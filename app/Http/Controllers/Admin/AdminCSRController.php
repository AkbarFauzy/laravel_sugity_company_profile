<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DataTables;
use Session;

class AdminCSRController extends Controller
{
    public function view(Request $request){
        // $this->onUnauthorized();

        if($request->ajax()){
          $URL = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/csr');
          $data = json_decode($URL->body())->data;
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('headline_img', function($img){
                        return "<img src=".asset("csr/thumbnail/".$img->headline_img).">";
                  })->addColumn('isPublish', function($isPublish){
                        return  '<div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" id="publish-switch" data-id='.$isPublish->id.' type="checkbox"'.($isPublish->isPublish ? 'checked': '').'> 
                        </div>';
                  })->addColumn('action', function($row){
                    // $btn = '<a class="edit btn btn-primary btn-md" id="btn-view" data-id='.$row->id.' style="margin-right:10px">View</a>';
                    // $btn .='<a class="edit btn btn-warning btn-md" id="btn-update" data-id='.$row->id.' style="margin-right:10px">Update</a>';
                    $btn ="<a class='edit btn btn-warning btn-md text-white' 
                            id='btn-update' data-id='$row->id' 
                            style='margin-right:10px' href=".route('admin.csr.edit', ['id' => $row->id ]).">
                            Update
                            </a>";
                    $btn .= '<a class="edit btn btn-danger btn-md text-white" 
                            id="btn-delete" data-id='.$row->id.' 
                            style="margin-right:10px">
                            Delete
                            </a>';
                    return $btn;
                  })
                  ->rawColumns(['headline_img','isPublish','action'])
                  ->make(true);
        }
        return view('admin/csr/index');
    }
    
    public function create(){
        return view('admin/csr/create');
    }

    public function add(Request $request){
        $response = Http::withToken(Session::get('token'))
            ->attach('thumbnail', $request->file('thumbnail'), 
                                  $request->file('thumbnail')->getClientOriginalName());
        
        if ($request->hasFile('gallery')) {
            $galleryFiles = $request->file('gallery');
            
            foreach ($galleryFiles as $index => $file) {
                $response->attach("gallery[]", 
                                file_get_contents($file->getRealPath()), 
                                $file->getClientOriginalName(),
                                ['Content-Type' => Storage::mimeType($file->getRealPath())]
                            );
            }
        }

        return $response->post(env('API_DOMAIN').'/api/csr/add', [
            'headline' => $request->input('headline'),
            'content' => $request->input('content'),
            'isPublish' => $request->input('isPublish')
        ]);
    }
    
    public function edit($id){
        $API = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/csr/'.$id);
        $data = json_decode($API->body())->data;

        $imageUrls = [];
        if (!empty($data->gallery)){
            foreach($data->gallery as $gallery){
                array_push($imageUrls, public_path('images/csr/content'), $gallery->img);
            }
        }

        return view('admin/csr/edit')
              ->with('data', $data)
              ->with('imageUrls', $imageUrls);
    }

    public function update(Request $request, $id){
        $response = Http::withToken(Session::get('token'))
            ->attach('thumbnail', $request->file('thumbnail'), 
                                  $request->file('thumbnail')->getClientOriginalName());
        
        if ($request->hasFile('gallery')) {
            $galleryFiles = $request->file('gallery');
            
            foreach ($galleryFiles as $index => $file) {
                $response->attach("gallery[]", 
                                file_get_contents($file->getRealPath()), 
                                $file->getClientOriginalName(),
                                ['Content-Type' => Storage::mimeType($file->getRealPath())]
                            );
            }
        }

        return $response->post(env('API_DOMAIN').'/api/csr/update/'.$id, [
            'headline' => $request->input('headline'),
            'content' => $request->input('content'),
            'isPublish' => $request->input('isPublish')
        ]);
    }

    public function delete($id){
        $response = Http::withToken(Session::get('token'))->delete(env('API_DOMAIN').'/api/csr/delete/'.$id);
        return $response->body();
    }
}
