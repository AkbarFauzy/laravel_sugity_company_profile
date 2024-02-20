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
                    <h2 class="content-header-title float-left mb-0">Products</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <a style="float: right;"
            id="btn-create" name="tambah"
            class="btn btn-success btn-md text-white" href="{{route('admin.products.create')}}">Create Products</a>
        </div>
    </div>
    <hr>
      <table class="table table-bordered yajra-datatable" id="datatables-ajax">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Name</th>
                  <th>Category</th>
                  <th>Img</th>
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
        ajax: "{{route('admin.products')}}",
        order: [[ 0, "desc" ]],
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name', name: 'name' },
            { data: 'category', name: 'category' },
            { data: 'Img', name:'Img'},
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false,
                width:'20%'
            },
        ]
    });

    $(document).ready(function(){

    }).on('click', '#btn-view', function(){
      let id = $(this).data('id');
        dialog = bootbox.dialog({
          title: "View Board of Director",
          size: 'large',
          message: '<center><div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></center>',
        })

      dialog.init(function(e){
        let req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200) {
            dialog.find('.modal-content > .modal-body').html(this.responseText);
          }
        };
        req.open("GET", '{{route("admin.products.edit",'')}}/'+id, true);
        req.send();
      })

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
              url:"{{route('api.products.delete','')}}/"+id,
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
    })
});
</script>
@endsection
