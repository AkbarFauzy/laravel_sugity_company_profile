<form id ="form" class="" action='{{route("api.services.add")}}' method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-floating mb-3 col-md-12">
      <input type="text" class="form-control" name="name" id="name" placeholder="Services Name" value="{{$data->name ?? ''}}">
      <label for="floatingInput">Name</label>
    </div>

    <div class="form-floating mb-3 col-md-12">
      <div class="input-group">
        <span class="input-group-text">Description</span>
        <textarea rows="10" class="form-control" name="description" id="description"></textarea>
      </div>
    </div>

    <div class="mb-3 col-md-12">
      <label for="formFile" class="form-label">Image</label>
      <input class="form-control" accept="image/*" type='file' name="img" id="imgInp"/>
      <div class="mt-3">
        <img id="preview-img" src="{{$data == null ? '#' : asset('images/bod'.$data->img.'')}}" alt="your image" style="width:100%" onerror="this.style.display='none'"/>
      </div>
    </div>
    <div class="mb-3">
      <input type="submit" class="btn btn-primary float-end" name="" value="Save">
    </div>
  </form>