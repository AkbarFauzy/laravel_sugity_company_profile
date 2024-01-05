<form id ="form" class="" action='{{route("api.bod.update", $data->id)}}' method="POST" enctype="multipart/form-data">
  @csrf 
  @method('PUT')

  <div class="form-floating mb-3 col-md-12">
    <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="{{$data->name ?? ''}}">
    <label for="floatingInput">Name</label>
  </div>

  <div class="form-floating mb-3 col-md-12">
      <select name="position" id="position" class="form-control">
        <option value="President Director">President Director</option>
        <option value="Executive Vice President">Executive Vice President</option>
        <option value="Director">Director</option>
        <option value="Commisioners">Commisioners</option>
      </select>
      <label for="floatingInput">Position</label>
  </div>

  <div class="form-floating mb-3 col-md-12">
    <input type="text" class="form-control" name="affiliation" id="affiliation" placeholder="Affiliation" value="{{$data->affiliation ?? ''}}">
    <label for="floatingInput">Affiliation</label>
  </div>

  <div class="mb-3 col-md-12">
    <label for="formFile" class="form-label">Image</label>
    <input class="form-control" accept="image/*" type='file' name="img" id="imgInp" onchange="loadFile(event)"/>
    <div class="mt-3">
      <img id="preview-img" src="{{$data == null ? '#' : asset('images/bod/'.$data->img.'')}}" alt="your image" style="width:100%" onerror="this.style.display='none'"/>
    </div>
  </div>
  <div class="mb-3">
    <input type="submit" class="btn btn-primary float-end" name="" value="Save">
  </div>
</form>

<script type="text/javascript">
  // var loadFile = function(event) {
  //   var output = document.getElementById('preview-img');
  //   output.src = URL.createObjectURL(event.target.files[0]);
  //   output.onload = function() {
  //     URL.revokeObjectURL(output.src)
  //   }
  // };
</script>