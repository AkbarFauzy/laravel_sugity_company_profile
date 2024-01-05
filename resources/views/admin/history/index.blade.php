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
                    <h2 class="content-header-title float-left mb-0">History</h2>
                </div>
            </div>
        </div>
        <div class="col">
            <a style="float: right;" 
            id="btn-create" name="tambah" 
            class="btn btn-success btn-md text-white">Create History</a>
        </div>
    </div>
    <hr>
      <table class="table table-bordered yajra-datatable" id="datatables-ajax">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Year</th>
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

    $('#datatables-ajax').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{route('admin.history')}}",
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title', name: 'title' },
            { data: 'year', name: 'year' },
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

    }).on('click', '#btn-create', function(){
      let dialog = bootbox.dialog({
        title:'Create New History',
        message: '<center><div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></center>'
      });

      dialog.init(function(e){
        let req = new XMLHttpRequest();
        req.onreadystatechange = function(){
          if (this.readyState == 4 && this.status == 200) {
            dialog.find('.modal-content > .modal-body').html(this.responseText);
          }
        };
        req.open("GET", '{{route("admin.history.form")}}', true);
        req.send();
      });
    }).on('click', '#btn-view', function(){
      let id = $(this).data('id');
        dialog = bootbox.dialog({
          title: "View History",
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
        req.open("GET", '{{route("admin.history.form")}}', true);
        req.send();
      })

    }).on('click', '#btn-update', function(){
      let id = $(this).data('id');
        dialog = bootbox.dialog({
          title: "Update History with ID#"+id,
          message: '<center><div class="preloader"><div class="spinner-layer pl-red"><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div></center>',
        })
        dialog.init(function(e){
          let req = new XMLHttpRequest();
          req.onreadystatechange = function(){
            if (this.readyState == 4 && this.status == 200) {
              dialog.find('.modal-content > .modal-body').html(this.responseText);
            }
          };
          req.open("GET", '{{route("admin.history.form.edit",'')}}/'+id, true);
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
              url:"{{route('admin.history.delete','')}}/"+id,
              headers:{
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              type: 'DELETE',
              data: {
                id:id
              },
              success: function(response){
                console.log(response["success"])
                if(JSON.parse(response)["success"]){
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
                    text: JSON.parse(response)["message"],
                  })
                }
              },
              error: function(response){
                Swal.fire({
                  icon: 'error',
                  title: 'Oops...',
                  text: JSON.parse(response)["message"],
                })
              },
            })
          }
        });
    }).on('submit', '#form', function(e){
      e.preventDefault();
      let data = new FormData(this),
          action = $(this).attr('action');
      $.ajax({
        url:action,
        headers:{
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        type: 'POST',
        data:data,
        contentType: false,
        processData: false,
        success: function(response){
          if(response["success"]){
            bootbox.hideAll();
            $('#datatables-ajax').DataTable().ajax.reload();
            Swal.fire({
              icon: 'success',
              title: 'Success!.',
              text: response["message"],
            });
          }else{
            for (var value of data.values()) {
               console.log(value);
            }
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
            text: response['responseJSON']['errormsg'],
          })
        }
      });
    })
});
</script>
@endsection