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

<link rel="stylesheet" href="{{asset('css/custom/admin.css')}}">
@endsection

<!-- Loading overlay -->
<div id="loadingOverlay">
    <div class="spinner"></div>
</div>


@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>Products</strong><span class="small ms-1">Create a Products</span></div>
         <div class="card-body">
            <form method="POST" id="form" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                      <button class="nav-link active" id="nav-home-tab" data-coreui-toggle="tab" data-coreui-target="#nav-general" type="button" role="tab" aria-controls="nav-general" aria-selected="true">General</button>
                      <button class="nav-link" id="nav-profile-tab" data-coreui-toggle="tab" data-coreui-target="#nav-360" type="button" role="tab" aria-controls="nav-360" aria-selected="false">360</button>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active pt-4" id="nav-general" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label  for="name">Name</label>
                                <input name="name" 
                                type="text" 
                                class="form-control" 
                                id="name" 
                                placeholder="Lorem Ipsum"
                                value="{{$data->name}}"
                                >
                            </div>

                            <div class="mb-3">
                                <label>Category</label>
                                <select name="category" id="category" class="form-control">
                                <option value="Public Transport" {{$data->category === "Public Transport" ? 'selected' : ''}} >Public Transport</option>
                                <option value="Healthcare Vehicle" {{$data->category === "Healthcare Vehicle" ? 'selected' : ''}} >Healthcare Vehicle</option>
                                <option value="Export Vehicle" {{$data->category === "Export Vehicle" ? 'selected' : ''}} >Export Vehicle</option>
                                <option value="Other" {{$data->category === "Other" ? 'selected' : ''}}>Other Vehicle</option>
                                <option value="Interior Part" {{$data->category === "Interior Part" ? 'selected' : ''}} >Interior Part</option>
                                <option value="Exterior Part" {{$data->category === "Exterior Part" ? 'selected' : ''}} >Exterior Part</option>
                                <option value="Mold" {{$data->category === "Mold" ? 'selected' : ''}} >Mold</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6"> 
                            <div class="mb-3">
                                <label  for="name">Thumbnail</label>
                                <div class="file-loading" style="height: 100%">
                                    <input id="img" type="file" name="img" class="file" data-overwrite-initial="true">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <div class="row"> 
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Left Content</label>
                                <textarea class="form-control" id="left-editor" rows="3" name="left_content">
                                    {{$data->left_content}}
                                </textarea>
                            </div>
                            <div class="col-md-6">
                                <label for="exampleFormControlTextarea1" class="form-label">Right Content</label>
                                <textarea class="form-control" id="right-editor" rows="3" name="right_content">
                                    {{$data->right_content}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mb-3" id="interior-file-input">
                        <label for="" class="form-label">Interior</label>
                        <div class="file-loading" style="height: 100%">
                            <input id="interior" type="file" name="interior[]" multiple class="file" data-overwrite-initial="false">
                        </div>
                    </div>
                    <div class="mb-3" id="interior-file-input">
                        <label for="" class="form-label">Exterior</label>
                        <div class="file-loading" style="height: 100%">
                            <input id="exterior" type="file" name="exterior[]" multiple class="file" data-overwrite-initial="false">
                        </div>
                    </div>
                </div>
                    <div class="tab-pane fade pt-4" id="nav-360" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                        <div class="mb-3">
                            <label for="" class="form-label">360</label>
                            <div class="file-loading" style="height: 100%">
                                <input id="360" type="file" name="360" class="file" data-overwrite-initial="false">
                            </div>
                        </div>
                        <input type="hidden" name="360_path" id="extractedPath">
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

    ClassicEditor
            .create( document.querySelector( '#right-editor' ), 
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
<script type="text/javascript">
    $("#img").fileinput({
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['jpg', 'png', 'gif'],
        overwriteInitial: true,
        initialPreview: ['{{asset("images/products/$data->img")}}'],
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
                showRemove: false,
            },
        browseOnZoneClick: true,
        initialPreviewShowDelete: 0,
    });


    var imageUrls = @json($interiorImageUrls); // PHP array to JavaScript array

    var initialPreview = [];
    var initialPreviewConfig = [];
    imageUrls.forEach(function(url, index) {
        initialPreview.push(url);
        var config = {
            caption: "Image " + (index + 1),
            url: "{{route('admin.news.delete.gallery')}}",
            key: index + 1
        };
        initialPreviewConfig.push(config);
    });

    $("#interior").fileinput({
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),    
            };
        },
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
        overwriteInitial: false,
        initialPreview: initialPreview,
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        initialPreviewConfig: initialPreviewConfig,
    });

    var imageUrls = @json($exteriorImageUrls); // PHP array to JavaScript array

    var initialPreview = [];
    var initialPreviewConfig = [];
    imageUrls.forEach(function(url, index) {
        initialPreview.push(url);
        var config = {
            caption: "Image " + (index + 1),
            url: "{{route('admin.news.delete.gallery')}}",
            key: index + 1
        };
        initialPreviewConfig.push(config);
    });

    $("#exterior").fileinput({
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        url: '{{route("admin.products.image")}}',
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
        overwriteInitial: false,
        initialPreview: initialPreview,
        initialPreviewAsData: true,
        initialPreviewFileType: 'image',
        initialPreviewConfig: initialPreviewConfig,
    });

    $("#360").fileinput({
        uploadUrl: '{{route("admin.products.upload360")}}',
        uploadExtraData: function() {
            return {
                _token: $("input[name='_token']").val(),
            };
        },
        allowedFileExtensions: ['zip'],
        overwriteInitial: false,
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
        uploadAsync: true,
    });

    $('#360').on('filebatchselected', function(event) {
        $(this).fileinput('upload');
    }).on('filebatchpreupload', function(event) {
        $('#submitButton').addClass('disabled').attr('disabled', true);
    }).on('fileuploaded', function(event, data, previewId, index) {
        const serverResponse = data.response['extracted_path'];
        $('#extractedPath').val(serverResponse);
    }).on('filebatchuploadcomplete', function(event, files, extra) {
        $('#submitButton').removeClass('disabled').removeAttr('disabled');
    });;

    
    $('#form').submit(function(event) {
        event.preventDefault()
        
        var formData = new FormData($(this)[0]); // Get form data
        const displayedUrls = getDisplayedImageURLs();

        displayedUrls.forEach(function(url, index) {
            formData.append('uploadedGallery[]', url); // Adjust the key name as needed
        });
        $('#loadingOverlay').show();
        $.ajax({
            url: '{{route("api.products.update", $data->id)}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                $('#loadingOverlay').hide();
                Swal.fire({
                    title: 'Success!',
                    text: 'Your products has been updated successfully.',
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
            error: function(xhr, status, error) {
                $('#loadingOverlay').hide();
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your products has Failed to Updated. ' + console.error(xhr.responseText),
                    icon: 'failed',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                });
            }
        });
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


</script>

@endsection
