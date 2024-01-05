<form id ="form" class="" action='{{route("api.history.add")}}' method="post" enctype="multipart/form-data">
    <!-- @csrf -->
    <div class="form-floating mb-3 col-md-12">
      <input type="text" class="form-control" name="title" id="title" placeholder="Title" value="{{$data->title ?? ''}}">
      <label for="floatingInput">Title</label>
    </div>

    <div class="form-floating mb-3 col-md-12">
        <input type="number" class="form-control" name="year" id="year" placeholder="Year" value="{{$data->year ?? ''}}">
        <label for="floatingInput">Year</label>
      </div>  
    <div class="mb-3 col-md-12">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control" accept="image/*" type='file' name="img" id="imgInp" onchange="loadFile(event)"/>
      <div class="mt-3">
        <img id="preview-img" src="{{$data == null ? '#' : asset('/img/destination/'.$data->image_name.'')}}" alt="your image" style="width:100%" onerror="this.style.display='none'"/>
      </div>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary float-end" name="" value="Save">
    </div>
  </form>
