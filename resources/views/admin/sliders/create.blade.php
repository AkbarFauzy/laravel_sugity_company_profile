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
      <div class="card-header"><strong>Sliders</strong><span class="small ms-1">Create a Sliders</span></div>
         <div class="card-body">
            <form method="POST" id="form" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Tagline</label>
                            <textarea class="form-control" id="editor" rows="3" name="tagline">
                            </textarea>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12 mb-3">
                                <label  for="name">Image</label>
                                <div class="file-loading" style="height: 100%">
                                    <input id="thumbnail" type="file" name="img" class="file" data-overwrite-initial="true">
                                </div>
                            </div>
                            
                            <div class="mb-3 col-md-6">
                                <label for="floatingInput">Pages</label>
                                <select name="page" id="page" class="form-control">
                                  <option value="Home">Home</option>
                                  <option value="Products">Products</option>
                                  <option value="Vehicle Business">Vehicle Business</option>
                                  <option value="Part Business">Part Business</option>
                                  <option value="Mold Business">Mold Business</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <label for="floatingInput">Position</label>
                                <select name="position" id="position" class="form-control">
                                  <option value="Center">Center</option>
                                  <option value="Top Left">Top Left</option>
                                  <option value="Middle Left">Middle Left</option>
                                  <option value="Bottom Left">Bottom Left</option>
                                  <option value="Top Right">Top Right</option>
                                  <option value="Middle Right">Middle Right</option>
                                  <option value="Bottom Right">Bottom Right</option>
                                </select>
                            </div>

                            <div class="mb-3 col-md-6">
                                <div>
                                    <label for="floatingInput">X-Offset</label>
                                    <input type="number" class="form-control" name="x_offset" id="x_offset" placeholder="X-Offset">
                                </div>
                            </div>
                            <div class="mb-3 col-md-6">
                                <div>
                                    <label for="floatingInput">Y-Offset</label>
                                    <input type="number" class="form-control" name="y_offset" id="y_offset" placeholder="X-Offset">
                                </div> 
                            </div>
                        </div>
              

                    </div>
                </div>

                <div class="d-flex justify-content-end">
                    {{-- <select class="border-2 border-gray-300 border-r p-2" name="isPublish">
                        <option value="1">Save and Publish</option>
                        <option value="0">Save Draft</option>
                    </select> --}}
                    {{-- <button class="p-2 btn-warning text-white" required="">Preview</button> --}}
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
<script src="{{asset('js/ckeditor.js')}}"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/buffer.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/filetype.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/piexif.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/plugins/sortable.min.js" type="text/javascript"></script>
<script src="https://cdn.jsdelivr.net/gh/kartik-v/bootstrap-fileinput@5.5.1/js/fileinput.min.js"></script>

<script>
    ClassicEditor
            .create( document.querySelector( '#editor' ), 
            { fontSize: {
                    options: [
                        8,
                        12,
                        14,
                        'default',
                        18,
                        21,
                        24,
                        32,
                        48,
                        56,
                    ]
                },
                toolbar: {
                    items: [
                        'undo', 'redo',
                        '|', 'heading',
                        '|', 'fontfamily', 'fontsize', 'fontColor', 'fontBackgroundColor',
                        '|', 'bold', 'italic', 'strikethrough', 'subscript', 'superscript', 'code',
                        '|', 'link', 'uploadImage', 'blockQuote', 'codeBlock',
                        '|', 'bulletedList', 'numberedList', 'todoList', 'outdent', 'indent'
                    ],
                    shouldNotGroupWhenFull: false
                }
            })
            .then( editor => {
                console.log( Array.from( editor.ui.componentFactory.names() ) );
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
        maxFileSize:5124,
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

    $('#form').submit(function(event) {
        event.preventDefault()
        
        var formData = new FormData($(this)[0]); // Get form data
        
        $.ajax({
            url: '{{route("api.sliders.add")}}',
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                Swal.fire({
                    title: 'Success!',
                    text: 'Your sliders has been submitted successfully.',
                    icon: 'success',
                    showCancelButton: false,
                    showConfirmButton: true,
                    confirmButtonColor: '#3085d6',
                    confirmButtonText: 'OK'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = '{{route("admin.sliders")}}';
                    }
                });
            },
            error: function(response) {
                Swal.fire({
                    title: 'Failed!',
                    text: 'Your products has Failed to Submitted. ' + response["errormsg"],
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
