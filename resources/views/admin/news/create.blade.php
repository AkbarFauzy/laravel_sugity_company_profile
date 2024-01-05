@extends('admin.layout.apps')
@section('custom_css')

<style rel="stylesheet">
    .ck-editor__editable {
    min-height: 500px;
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
      <div class="card-header"><strong>News</strong><span class="small ms-1">Create a News</span></div>
         <div class="card-body">
            <form method="POST" id="form" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Headline</label>
                    <input name="headline" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Lorem Ipsum" required >
                </div>
                <div class="mb-3">
                    <div class="row"> 
                        <label  for="name">Thumbnail</label>
                        <div class="file-loading" style="height: 100%">
                            <input id="thumbnail" type="file" name="thumbnail" class="file" data-overwrite-initial="true">
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Content</label>
                    <textarea class="form-control" id="editor" rows="3" name="content">
                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Gallery</label>
                    <div class="file" style="height: 100%">
                        <input id="gallery" type="file" name="gallery[]"  
                        data-overwrite-initial="false" multiple>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <select class="border-2 border-gray-300 border-r p-2" name="isPublish">
                        <option value="1">Save and Publish</option>
                        <option value="0">Save Draft</option>
                    </select>
                    <button class="p-2 btn-warning text-white" >Preview</button>
                    <button type="submit" class="p-2 btn-primary text-white">Submit</button>
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
            .create( document.querySelector( '#editor' ), 
            {
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.news-content-upload').'?_token='.csrf_token()}}",
                }
            })
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            });
</script>
<script>
 $("#thumbnail").fileinput({
        uploadUrl: '{{route("admin.products.image")}}',
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        minFilesNum: 1,
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
            },
        browseOnZoneClick: true
    });
            

   $("#gallery").fileinput({
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
            },
        browseOnZoneClick: true,
        initialPreviewAsData: true,
    });



    $('#form').submit(function(event) {
        event.preventDefault()
        
        var formData = new FormData($(this)[0]); // Get form data
        
        $.ajax({
            url: '{{route("api.news.add")}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your news has been submitted successfully.',
                    icon: 'success',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{route("admin.news")}}';
                    }
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your news has Failed to Submitted. ' + console.error(response["errormsg"]),
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
