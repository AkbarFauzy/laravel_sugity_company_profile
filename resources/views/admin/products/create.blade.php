@extends('admin.layout.apps')
@section('custom_css')
<style rel="stylesheet">
.ck-editor__editable {
  min-height: 500px;
}
</style>
<style type="text/css">
    .main-section{
        margin:0 auto;
        padding: 20px;
        margin-top: 100px;
        background-color: #fff;
        box-shadow: 0px 0px 20px #c1c1c1;
    }
    .fileinput-remove,
    .fileinput-upload{
        display: none;
    }
</style>
<link href="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.min.css" crossorigin="anonymous">

@endsection
@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Products</strong><span class="small ms-1">Create a Products</span></div>
         <div class="card-body">
            <form method="POST" id="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label  for="name">Name</label>
                            <input name="name" type="text" class="form-control" id="name" placeholder="Lorem Ipsum">
                        </div>

                        <label>Category</label>
                        <select name="category" id="category" class="form-control">
                        <option value="Public Transport">Public Transport</option>
                        <option value="Healthcare Vehicle">Healthcare Vehicle</option>
                        <option value="Export Vehicle">Export Vehicle</option>
                        <option value="Interior Part">Interior Part</option>
                        <option value="Exterior Part">Exterior Part</option>
                        <option value="Mold">Mold</option>
                        </select>

                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <div class="row"> 
                                <label  for="name">Thumbnail</label>
                                <div class="file-loading" style="height: 100%">
                                    <input id="img" type="file" name="img" class="file" data-overwrite-initial="true">
                                </div>
                            </div>
                        </div>                        
                    </div>
                </div>
 
                <div class="mb-3">
                    <div class="row"> 
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Left Content</label>
                            <textarea class="form-control" id="left-editor" rows="3" name="left_content">
                            </textarea>
                        </div>
                        <div class="col-md-6">
                            <label for="exampleFormControlTextarea1" class="form-label">Right Content</label>
                            <textarea class="form-control" id="right-editor" rows="3" name="right_content">
                            </textarea>
                        </div>
                     </div>
                </div>
                
                <div class="mb-3">
                    <label for="" class="form-label">Interior</label>
                    <div class="file-loading" style="height: 100%">
                        <input id="interior" type="file" name="interior[]" multiple class="file" data-overwrite-initial="false">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Exterior</label>
                    <div class="file-loading" style="height: 100%">
                        <input id="exterior" type="file" name="exterior[]" multiple class="file" data-overwrite-initial="false">
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button role="submit" class="p-2 btn-primary text-white">Submit</button>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@section('custom_js')
<script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/filetype.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/fileinput.min.js"></script>

<script>
    ClassicEditor
            .create( document.querySelector( '#left-editor' ), 
            {

            })
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            });

    ClassicEditor
            .create( document.querySelector( '#right-editor' ), 
            {

            })
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            });
</script>
<script type="text/javascript">
    $("#img").fileinput({
        url: '{{route("admin.products.image")}}',
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
                showDrag: true,
            },
        browseOnZoneClick: true
    });
   
   $("#interior").fileinput({
        // uploadUrl: '{{route("admin.products.image")}}',
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
                showDrag: true
            },
        browseOnZoneClick: true
    });

    $("#exterior").fileinput({
        // uploadUrl: '{{route("admin.products.image")}}',
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
            },
        browseOnZoneClick: true
    });


    $('#form').submit(function(event) {
        event.preventDefault()
        
        var formData = new FormData($(this)[0]); // Get form data
        
        $.ajax({
            url: '{{route("api.products.add")}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your products has been submitted successfully.',
                    icon: 'success',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{route("admin.products")}}';
                    }
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your products has Failed to Submitted. ' + console.error(response["errormsg"]),
                    icon: 'error',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            }
        });
    });


</script>

@endsection
