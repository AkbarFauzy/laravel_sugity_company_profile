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
      <div class="card-header"><strong>News</strong><span class="small ms-1">Update a News</span></div>
         <div class="card-body">
            <form method="POST" id ="form" runat="server" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Headline</label>
                    <input name="headline" 
                    type="text" 
                    class="form-control" 
                    id="exampleFormControlInput1" 
                    placeholder="Lorem Ipsum"
                    value="{{$data->headline}}"
                    >
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
                    <textarea 
                    class="form-control" 
                    id="editor" 
                    rows="3" 
                    name="content"
                    >
                    {{$data->content}}

                    </textarea>
                </div>

                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Gallery</label>
                    <div class="file-loading" style="height: 100%">
                        <input id="gallery" type="file" name="gallery[]"  
                        data-overwrite-initial="false" multiple>
                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    <select class="border-2 border-gray-300 border-r p-2" name="isPublish">
                        <option value="1" {{$data->isPublish ? 'selected=selected' :''}}>Save and Publish</option>
                        <option value="0" {{!$data->isPublish ? 'selected=selected' :''}}>Save Draft</option>
                    </select>
                    <button class="p-2 btn-warning text-white" required="">Preview</button>
                    <button role="submit" class="p-2 btn-primary text-white" required="">Submit</button>
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

        $("#thumbnail").fileinput({
            uploadExtraData: function() {
                return {
                    _token: $("input[name='_token']").val(),
                };
            },
            url: '{{route("api.news.add")}}',
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: true,
            initialPreview: ['{{asset("images/news/$data->headline_img")}}'],
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            initialPreviewConfig: initialPreviewConfig,
            maxFileSize:2000,
            maxFilesNum: 1,
            minFilesNum: 1,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            },
            fileActionSettings: {
                    showDrag: true,
                    showZoom: true,
                    showUpload: false,
                    showRemove: true,
                },
            browseOnZoneClick: true,
        });

    var imageUrls = @json($imageUrls); // PHP array to JavaScript array

    var initialPreview = [];
    var initialPreviewConfig = [];
    imageUrls.forEach(function(url, index) {
        initialPreview.push(url);
        var config = {
            caption: "Image " + (index + 1),
            url: "/delete-image", // Replace with delete route
            key: index + 1
        };
        initialPreviewConfig.push(config);
    });

    
    $("#gallery").fileinput({
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        url: '{{route("api.news.add")}}',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        minFilesNum: 0,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        fileActionSettings: {
                showDrag: true,
                showZoom: true,
                showUpload: false,
                showRemove: true,
            },
        browseOnZoneClick: true,
        overwriteInitial: false,
        initialPreview: initialPreview,
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        initialPreviewConfig: initialPreviewConfig,
        
    });

    $('#form').submit(function(event) {
        event.preventDefault()
        
        var formData = new FormData($(this)[0]); // Get form data
        
        $.ajax({
            url: '{{route("api.news.update", $data->id)}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your news has been updated successfully.',
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
            error: function(xhr, status, error) {
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your news has Failed to Updated. ' + console.error(xhr.responseText),
                    icon: 'failed',
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
