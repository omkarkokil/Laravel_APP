@include('layouts.Header')
 
    <div class="container my-4">
     <form action="{{url('/')}}" method="POST">
        @csrf
        <h1>Register Form</h1>
        <x-input type="text" name="name" label="Enter your name" />
        <x-input type="text" name="email" label="Enter your email" />
        <x-input type="password" name="password" label="Enter your password" />
        <x-input type="password" name="password_confirmation" label="confirm password" />
        {{-- <x-input />
        <x-input />
        <x-input /> --}}
  {{-- <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="email" value="{{old("email")}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
       <span class="text-danger">@error('email')
        {{"* ".$message}}
    @enderror</span>
  </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Password</label>
      <input type="password" name="password" class="form-control" id="exampleInputPassword1">
          <span class="text-danger">@error('password')
        {{"* ".$message}}
    @enderror</span>
    </div>
  <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">ConfirmPassword</label>
      <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1">
          <span class="text-danger">@error('password_confirmation')
        {{"* ".$message}}Y
    @enderror</span>
    </div> --}}
    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>


 @include('layouts.Footer')