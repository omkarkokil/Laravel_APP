 <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">{{$label}} :</label>
    <input type="{{$type}}" name="{{$name}}" placeholder="{{$label}}" value="{{old($name)}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <span class="text-danger">@error($name)
        {{"* ".$message}} 
    @enderror</span>
  </div>