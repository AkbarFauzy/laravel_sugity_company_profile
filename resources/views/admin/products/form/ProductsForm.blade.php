<form id ="form" class="" action='{{route("admin.products.add")}}' method="post" enctype="multipart/form-data">
    <!-- @csrf -->
    <div class="form-floating mb-3 col-md-12">
      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$data->name ?? ''}}">
      <label for="floatingInput">Name</label>
    </div>

    <div class="mb-3 col-md-12">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control" accept="image/*" type='file' name="img" id="img" onchange="loadFile(event)"/>
      <div class="mt-3">
        <img id="preview-img" src="{{$data == null ? '#' : asset('images/products'.$data->image_name.'')}}" alt="your image" style="width:100%" onerror="this.style.display='none'"/>
      </div>
    </div>

    <div class="form-floating mb-3 col-md-12">
        <select name="category" id="category" class="form-control">
          <option value="Public Transport">Public Transport</option>
          <option value="Healthcare Vehicle">Healthcare Vehicle</option>
          <option value="Export Vehicle">Export Vehicle</option>
          <option value="Interior Part">Interior Part</option>
          <option value="Exterior Part">Exterior Part</option>
          <option value="Mold">Mold</option>
        </select>
        <label for="floatingInput">Category</label>
    </div>

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Content</label>
      <textarea class="form-control" id="editor" rows="3" name="content">
      </textarea>
    </div>
    
    <div class="mb-3">
      <input type="submit" class="btn btn-primary float-end" name="" value="Save">
    </div>
  </form>
  
  <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>
  <script>
      img.onchange = evt => {
        const [file] =  img.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
      }

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
