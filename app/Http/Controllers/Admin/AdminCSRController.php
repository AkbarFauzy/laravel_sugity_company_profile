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
          $URL = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/csr/get-all');
          $data = json_decode($URL->body())->data;
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('headline_img', function($img){
                        return "<img src=".asset("images/csr/".$img->headline_img)." style='max-width: 200px;'>";
                  })->addColumn('isPublish', function($isPublish){
                        return  '<div class="form-check form-switch d-flex justify-content-center">
                        <input class="form-check-input" id="publish-switch" data-id='.$isPublish->id.' type="checkbox"'.($isPublish->isPublish ? 'checked': '').'> 
                        </div>';
                  })->addColumn('action', function($row){
                    // $btn = '<a class="edit btn btn-primary btn-md" id="btn-view" data-id='.$row->id.' style="margin-right:10px">View</a>';
                    // $btn .='<a class="edit btn btn-warning btn-md" id="btn-update" data-id='.$row->id.' style="margin-right:10px">Update</a>';
                    $btn = "<a class='view btn btn-secondary btn-md text-white' 
                            id='btn-view' data-id='$row->id' 
                            style='margin-right:10px' target='_blank' rel='noopener noreferrer' href=".route('admin.csr.preview', ['id' => $row->id ]).">
                            Preview
                            </a>";
                    $btn .= "<a class='edit btn btn-warning btn-md text-white' 
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


    
    public function edit($id){
        $API = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/csr/'.$id);
        $data = json_decode($API->body())->data;

        $imageUrls = [];
        if (!empty($data->gallery)){
            foreach($data->gallery as $gallery){
                array_push($imageUrls, asset('/images/csr/content/'. $gallery->img));
            }
        }

        return view('admin/csr/edit')
              ->with('data', $data)
              ->with('imageUrls', $imageUrls);
    }


    public function delete($id){
        $response = Http::withToken(Session::get('token'))->delete(env('API_DOMAIN').'/api/csr/delete/'.$id);
        return $response->body();
    }


    public function previewForm(Request $request)
    {
        // Retrieve form data from the request
        $formData = $request->except('_token');
        
        // Handle multiple images
        if ($request->hasFile('thumbnail')) {
            $imagePath = $request->file('thumbnail')->store('temp', 'public');
            $imagePaths = Storage::url($imagePath);
        }

        $galleries = [];
        if ($request->hasFile('gallery')){
            foreach($request->file('gallery') as $image){
                $imagePath = $image->store('temp', 'public');
                $galleries[] = Storage::url($imagePath);
            }
        }

        // Pass form data and image paths to the view
        return view('admin/csr/preview-form', [
                                    'formData' => $formData, 
                                    'thumbnail' => $imagePaths,
                                    'galleries' => $galleries,
                                ]);
        
    }

    public function preview($id){
        $currentCSRAPI = Http::get(env('API_DOMAIN').'/api/csr/'.$id);
        $currentCSRData = json_decode($currentCSRAPI->body());
        
        if($currentCSRData->success){     
            return view('admin/csr/preview')->with([
                'current_csr' => $currentCSRData, 
            ]);
        }else{
            abort(404);
        }
    }


}
