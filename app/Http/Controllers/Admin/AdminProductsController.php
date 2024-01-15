<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use ZipArchive;
use DataTables;
use Session;

class AdminProductsController extends Controller
{
    public function view(Request $request){
        // $this->onUnauthorized();

        if($request->ajax()){
          $URL = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/products');
          $data = json_decode($URL->body())->data;
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('Img', function($img){
                        return "<img src=".asset("images/products/".$img->img)." style='max-width: 200px;'>";
                  })->addColumn('action', function($row){
                    // $btn = '<a class="edit btn btn-primary btn-md" id="btn-view" data-id='.$row->id.' style="margin-right:10px">View</a>';
                    // $btn .='<a class="edit btn btn-warning btn-md" id="btn-update" data-id='.$row->id.' style="margin-right:10px">Update</a>';
                    $btn ="<a class='edit btn btn-warning btn-md text-white' 
                          id='btn-update' data-id='$row->id' 
                          style='margin-right:10px' href=".route('admin.products.edit', ['id' => $row->id ]).">
                          Update
                          </a>";
                    $btn .= '<a class="edit btn btn-danger btn-md text-white" 
                            id="btn-delete" data-id='.$row->id.' 
                            style="margin-right:10px">
                            Delete
                            </a>';
                    return $btn;
                  })
                  ->rawColumns(['Img','action'])
                  ->make(true);
        }
        return view('admin/products/index');
    }
   
    public function create(Request $request){
      return view('admin/products/create');
    }


    public function edit($id){
      $API = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/products/'.$id);
      $data = json_decode($API->body())->data;
      
      $interiorImageUrls = [];
      $exteriorImageUrls = [];
      $view360 = [];


      if (!empty($data->gallery)){
          foreach($data->gallery as $gallery){
              if($gallery->type === "interior"){
                array_push($interiorImageUrls, asset('/images/products/content/'. $gallery->img));
              }else if($gallery->type === "exterior"){
                array_push($exteriorImageUrls, asset('/images/products/content/'. $gallery->img));
              }else if($gallery->type === "360"){
                $view360[] = $gallery->img;
              }
          }
      }
      usort($view360, function($a, $b) {
        try{
            $a = (int)explode('.', $a)[0];
            $b = (int)explode('.', $b)[0];
            return $a - $b;
        }catch(\Exception $exception){
            
        }
    });

      return view('admin/products/edit')
            ->with('data', $data)
            ->with('interiorImageUrls', $interiorImageUrls)
            ->with('exteriorImageUrls', $exteriorImageUrls)
            ->with('view360', $view360);
            ;
    }
    
    public function store(Request $request)
    {
      $this->validate($request, [
        'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
      ]);

    	$imageName = request()->file->getClientOriginalName();
      request()->file->move(public_path('upload'), $imageName);

    	return response()->json(['uploaded' => "upload/".$imageName]);
    }

    public function upload360(Request $request){
        // Validate the uploaded file
        $request->validate([
            '360' => 'mimes:zip', // Validate for ZIP file
        ]);

        // Handle the uploaded file
        $zipFile = $request->file('360');
        $tempPath = public_path('images/products/360/temp/');

        // Create a unique folder name for extracting contents
        $extractedFolder = uniqid('extracted_', true);
        $extractedPath = $tempPath . $extractedFolder;

        // Create the directory if it doesn't exist
        File::makeDirectory($extractedPath, 0777, true, true);

        // Extract the ZIP file
        $zip = new ZipArchive;
        if ($zip->open($zipFile)) {
            $zip->extractTo($extractedPath);
            $zip->close();

            return response()->json(['extracted_path' => $extractedPath]);
        } else {
            return response()->json(['error' => 'Failed to extract ZIP file'], 500);
        }
    }

}
