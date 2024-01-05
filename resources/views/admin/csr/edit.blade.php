@extends('admin.layout.apps')
@section('custom_css')

<style rel="stylesheet">
.ck-editor__editable {
  min-height: 500px;
}
</style>
@endsection

@section('content')
<div class="col-12">
    <div class="card mb-4">
      <div class="card-header"><strong>CSR</strong><span class="small ms-1">Create a CSR</span></div>
         <div class="card-body">
            <form method="PUT" runat="server" enctype="multipart/form-data">
                @csrf
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
                            <div class="col-md-4">
                            <input accept="image/*" type='file' type="file" id="thumbnail" name="thumbnail" onerror >
                        </div>
                        <div class="col-md-8">
                            <img id="blah" 
                            src="{{asset('CSR/thumbnail')."/".$data->headline_img}}" 
                            style="max-width: 100%; 
                            object-fit:contain" />
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

                <div class="d-flex justify-content-end">
                    <select class="border-2 border-gray-300 border-r p-2" name="action">
                        <option {{$data->isPublish ? 'selected=selected' :''}}>Save and Publish</option>
                        <option {{!$data->isPublish ? 'selected=selected' :''}}>Save Draft</option>
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
<script>
    thumbnail.onchange = evt => {
    const [file] =  thumbnail.files
    if (file) {
        blah.src = URL.createObjectURL(file)
    }
    }

    ClassicEditor
            .create( document.querySelector( '#editor' ), 
            {
                ckfinder:{
                    uploadUrl: "{{route('ckeditor.csr-content-upload').'?_token='.csrf_token()}}",
                }
            })
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            });
</script>
@endsection
