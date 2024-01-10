<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use DataTables;
use Session;

class AdminSlidersController extends Controller
{
    public function view(Request $request){
         // $this->onUnauthorized();
        if($request->ajax()){
          $URL = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/sliders');
          $data = json_decode($URL->body())->data;
          return Datatables::of($data)
                  ->addIndexColumn()
                  ->addColumn('Img', function($img){
                        return "<img src=".asset("images/sliders/".$img->img)." style='max-width: 200px;'>";
                  })->addColumn('action', function($row){
                    // $btn = '<a class="edit btn btn-primary btn-md" id="btn-view" data-id='.$row->id.' style="margin-right:10px">View</a>';
                    // $btn .='<a class="edit btn btn-warning btn-md" id="btn-update" data-id='.$row->id.' style="margin-right:10px">Update</a>';
                    $btn = "<a class='edit btn btn-warning btn-md text-white' 
                            id='btn-update' data-id='$row->id' 
                            style='margin-right:10px' href=".route('admin.sliders.edit', ['id' => $row->id ]).">
                            Update
                            </a>";
                    $btn .= '<a class="edit btn btn-danger btn-md text-white" 
                            id="btn-delete" data-id='.$row->id.' 
                            style="margin-right:10px">
                            Delete
                            </a>';
                    return $btn;
                  }) ->editColumn('tagline', function ($row) {
                        return html_entity_decode(strip_tags($row->tagline));
                  })
                  ->rawColumns(['Img','action', 'tagline'])
                  ->make(true);
        }
        return view('admin/sliders/index');
    }

    public function create(Request $request){
        return view('admin/sliders/create');
    }
    

  public function edit($id){
      $API = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/sliders/'.$id);
      $data = json_decode($API->body())->data;

      return view('admin/sliders/edit')
            ->with('data', $data);
  }          

  public function delete($id){
      $response = Http::withToken(Session::get('token'))->delete(env('API_DOMAIN').'/api/sliders/delete/'.$id);
      return $response->body();
  }

}
