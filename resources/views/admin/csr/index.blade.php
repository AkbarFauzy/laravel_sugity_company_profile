@extends('admin.layout.apps')
@section('custom_css')
<link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet">
<link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
@endsection

@section('content')
<div class="col-12">
  <div class="card mb-4">
    <div class="container mt-5">
      <div class="content-header row p-1 mb-4">

        <div class="col">
            <div class="row breadcrumbs-top">
                <div class="col-12">
                    <h2 class="content-header-title float-left mb-0">CSR</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <a style="float: right;" 
            id="btn-create" name="tambah" 
            class="btn btn-success btn-md text-white" href="{{route('admin.csr.create')}}">Create CSR</a>
        </div>
    </div>
    <hr>
      <table class="table table-bordered yajra-datatable" id="datatables-ajax">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Headline</th>
                  <th>Headline (Bahasa Indonesia)</th>
                  <th>Thumbnail</th>
                  <th>Published</th>
                  {{-- <th>Description</th> --}}
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>

          </tbody>
      </table>
    </div>
  </div>
</div>
@endsection

@section('custom_js')
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js"></script>

<script>

$(function() {
    // var loadFile = function(event) {
    //   var output = document.getElementById('preview-img');
    //   output.src = URL.createObjectURL(event.target.files[0]);
    //   output.onload = function() {
    //     URL.revokeObjectURL(output.src) // free memory
    //   }
    // };
    $('#datatables-ajax').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{route('admin.csr')}}",
        order: [[ 0, "desc" ]],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'headline', name: 'headline' },
            { data: 'headline_ind', name: 'headline_ind' },
            { data: 'headline_img', name: 'headline_img' },
            { data: 'isPublish', name: 'isPublish'},
            // { data: 'description', name: 'description', width:'50%' },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width:'30%'
            },
        ]
    });

    $(document).ready(function(){
      
    }).on('click', '#btn-delete', function(e){
        let id = $(this).data('id');
        Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url:"{{route('api.csr.delete','')}}/"+id,
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'DELETE',
              data: {
                id:id
              },
              success: function(response){
                if(response["success"]){
                  Swal.fire(
                    'Deleted!',
                    'Your record has been deleted.',
                    'success'
                  );
                  $('#datatables-ajax').DataTable().ajax.reload();
                }else{
                  Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: response["message"],
                  })
                }
              },
              error: function(response){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: response["message"],
                })
              },
            })
          }
        });
    }).on('change', '#publish-switch', function(e){
       let id = $(this).data('id');
       $.ajax({
        type: "PUT",
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        url: "{{route('admin.api.csr.publish','')}}/"+id,
        async: true,
        data: {
          id:id
        },
        success: function (response) {
          alert(response["message"]);
        },
        error: function (response) {
          alert(response["message"]);
        },
      });
    })
});
</script>
@endsection