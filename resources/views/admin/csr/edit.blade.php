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

<!-- Loading overlay -->
<div id="loadingOverlay">
    <div class="spinner"></div>
</div>

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>CSR</strong><span class="small ms-1">Update a CSR</span></div>
         <div class="card-body">
            <form method="POST" id ="form" runat="server" enctype="multipart/form-data">
                @csrf 
                @method('PUT')
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="exampleFormControlInput1" class="form-label">Headline</label>
                            <input name="headline" 
                            type="text" 
                            class="form-control" 
                            id="exampleFormControlInput1" 
                            placeholder="Lorem Ipsum"
                            value="{{$data->headline}}"
                            >
                        <label for="date" class="col-form-label">Posting Date</label>
                        <div class="input-group date" id="datepicker">
                            <div class="input-group date" id="datepicker">
                                <input type="date" id="date" class="form-control" name="date" value="{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d')}}">
                                <span class="input-group-append">
                                </span>
                            </div>
                        </div> 

                        </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                                <label  for="name">Thumbnail</label>
                                <div class="file-loading" style="height: 100%">
                                    <input id="thumbnail" type="file" name="thumbnail" class="file" data-overwrite-initial="true">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row">
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
                </div>
    
                <div class="d-flex justify-content-end">
                    <select class="border-2 border-gray-300 border-r p-2" name="isPublish">
                        <option value="1" {{$data->isPublish ? 'selected=selected' :''}}>Save and Publish</option>
                        <option value="0" {{!$data->isPublish ? 'selected=selected' :''}}>Save Draft</option>
                    </select>
                    <button type="button" class="p-2 btn-warning text-white" id="previewButton">Preview</button>
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

        let editor;

        ClassicEditor
            .create( document.querySelector( '#editor' ), 
            {
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.csr-content-upload').'?_token='.csrf_token()}}",
                },
            })
            .then( newEditor => {
                console.log( newEditor );
                newEditor.config.autoParagraph = false;
                editor = newEditor;
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
            allowedFileExtensions: ['jpg', 'png', 'gif'],
            overwriteInitial: true,
            initialPreview: ['{{asset("images/csr/$data->headline_img")}}'],
            initialPreviewAsData: true,
            initialPreviewFileType: 'image',
            maxFileSize:2000,
            maxFilesNum: 1,
            minFilesNum: 1,
            slugCallback: function (filename) {
                return filename.replace('(', '_').replace(']', '_');
            },
            fileActionSettings: {
                    showDrag: false,
                    showZoom: true,
                    showUpload: false,
                    showDelete:false,
                    showRemove: false,
                },
            browseOnZoneClick: true,
            initialPreviewShowDelete: 0,
        });


    function getDisplayedImageURLs() {
        const imageNames = [];
        $('.kv-preview-thumb').each(function() {
            // Find .kv-file-content and then .file-preview-image inside it
            const $fileContent = $(this).find('.kv-file-content');
            const $image = $fileContent.find('.file-preview-image');

            // Extract the 'src' attribute from .file-preview-image
            const imageUrl = $image.attr('src');
            // Check if the image source is a link (http/https) and not a data:image
            if (imageUrl && !imageUrl.startsWith('data:image')) {
                const fileName = imageUrl.substring(imageUrl.lastIndexOf('/') + 1); // Extract filename from URL
                imageNames.push(fileName);
            }
        });

        return imageNames;
    }

    var imageUrls = @json($imageUrls); // PHP array to JavaScript array

    var initialPreview = [];
    var initialPreviewConfig = [];
    imageUrls.forEach(function(url, index) {
        initialPreview.push(url);
        var config = {
            caption: "Image " + (index + 1),
            url: "{{route('admin.csr.delete.gallery')}}",
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
        url: '{{route("api.csr.add")}}',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: false,
        maxFileSize:2000,
        maxFilesNum: 10,
        minFilesNum: 0,
        slugCallback: function (filename) {
            return filename.replace('(', '_').replace(']', '_');
        },
        fileActionSettings: {
                showDrag: false,
                showZoom: true,
                showUpload: false,
                showRemove: true,
            },
        browseOnZoneClick: true,
        overwriteInitial: true,
        initialPreview: initialPreview,
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        initialPreviewConfig: initialPreviewConfig,
        initialPreviewShowDelete: 0,
    });

    $('#form').submit(function(event) {
        event.preventDefault()
        const displayedUrls = getDisplayedImageURLs();

        var formData = new FormData($(this)[0]); // Get form data
        
        displayedUrls.forEach(function(url, index) {
            formData.append('uploadedGallery[]', url); // Adjust the key name as needed
        });

        $('#loadingOverlay').show();
        $(this).find(':submit').attr('disabled','disabled');
        $.ajax({
            url: '{{route("api.csr.update", $data->id)}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#loadingOverlay').hide();
                Swal.fire({
                    title: 'Success!',
                    text: 'Your csr has been updated successfully.',
                    icon: 'success',
                    showCancelButton: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{route("admin.csr")}}';
                    }
                });
            },
            error: function(xhr, status, error) {
                $('#loadingOverlay').hide();
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your csr has Failed to Updated. ' + console.error(xhr.responseText),
                    icon: 'failed',
                    showCancelButton: false,
                    allowOutsideClick: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });

                setTimeout(function() {
                    $('#form').find(':submit').removeAttr('disabled');
                }, 3000);
                
            }
        });
    });

    $(document).ready(function() {
        $('#previewButton').on('click', function() {
            // Prepare form data
            var formData = new FormData($('#form')[0]);
            const editorData = editor.getData();

            formData.set('content', editorData);
            // Submit form asynchronously
            $.ajax({
                url: "{{ route('admin.csr.preview-form') }}",
                type: 'POST',
                processData: false,
                contentType: false,
                data: formData,
                success: function(response) {
                    // Open a new tab with the preview content
                    var newTab = window.open('');
                    newTab.document.write(response);
                    newTab.document.close();
                }
            });
        });
    });

</script>
@endsection
