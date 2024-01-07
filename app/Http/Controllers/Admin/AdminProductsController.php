<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
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
      if (!empty($data->gallery)){
          foreach($data->gallery as $gallery){
              if($gallery->type === "interior"){
                array_push($interiorImageUrls, asset('/images/products/content/'. $gallery->img));
              }
          }
      }

      $exteriorImageUrls = [];
      if (!empty($data->gallery)){
          foreach($data->gallery as $gallery){
              if($gallery->type === "exterior"){
                array_push($exteriorImageUrls, asset('/images/products/content/'. $gallery->img));
              }
          }
      }

      return view('admin/products/edit')
            ->with('data', $data)
            ->with('interiorImageUrls', $interiorImageUrls)
            ->with('exteriorImageUrls', $exteriorImageUrls);
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

}
