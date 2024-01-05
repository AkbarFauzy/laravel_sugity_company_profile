<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use DataTables;
use Session;

class AdminServicesController extends Controller
{
    public function view(Request $request){
        // $this->onUnauthorized();

     if($request->ajax()){
        $URL = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/services');
        $data = json_decode($URL->body())->data;
        return Datatables::of($data)
                ->addIndexColumn()
                ->addColumn('Img', function($img){
                      return "<img src=".asset("images/services/".$img->img)." style='max-width: 200px;'>";
                })->addColumn('action', function($row){
                  // $btn = '<a class="edit btn btn-primary btn-md" id="btn-view" data-id='.$row->id.' style="margin-right:10px">View</a>';
                  // $btn .='<a class="edit btn btn-warning btn-md" id="btn-update" data-id='.$row->id.' style="margin-right:10px">Update</a>';
                  $btn ="<a class='edit btn btn-warning btn-md text-white' 
                          id='btn-update' data-id='$row->id' 
                          style='margin-right:10px'>
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
      return view('admin/services/index');
  }
 
  public function loadForm($id = null){
    $data = null;
    if($id != null){
      $API = Http::withToken(Session::get('token'))->get(env('API_DOMAIN').'/api/services/'.$id);
      $data = json_decode($API->body())->data;

      return view('admin/services/form/ServicesFormEdit')
              ->with('data', $data);
    }

    return view('admin/services/form/ServicesForm')
            ->with('data', $data);
  }


  public function delete($id){
    $response = Http::withToken(Session::get('token'))->delete(env('API_DOMAIN').'/api/services/delete/'.$id);
    return $response->body();
  }
}
