@include('layouts.Header')
 
    <div class="container my-4">
     <form action="{{$url}}" method="POST">
        @csrf
        <h1>{{$title}}</h1>

         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your name :</label>
    <input type="text" name="name" value="{{$url == url("/registerCustomer") ? "" : $customer->name}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your email :</label>
    <input type="text" name="email" value="{{$url == url("/registerCustomer") ? "" :$customer->email}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

  </div>


  <div class="row my-2">
  <div class="col">
     <label for="exampleInputEmail1" class="form-label">Date of birth :</label>
    <input type="date" class="form-control" value="{{$url == url("/registerCustomer") ? "" : $customer->DOB}}" name="DOB"  aria-label="First name">
  </div>
  <div class="col ">
    <div class="form-controll">
        <label for="exampleInputEmail1" class="form-label">Gender :</label>
    </div>
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio1" value="Male"  {{$url == url("/registerCustomer") ? "" :($customer->gender == "male" ? "checked" : "")}}>
  <label class="form-check-label" for="inlineRadio1">Male</label>
</div>
<div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Female" {{$url == url("/registerCustomer") ? "" :($customer->gender == "female" ? "checked" : "")}}>
  <label class="form-check-label" for="inlineRadio2">Female</label>
  </div>
  <input class="form-check-input" type="radio" name="gender" id="inlineRadio2" value="Other" {{$url == url("/registerCustomer") ? "" :($customer->gender == "other" ? "checked" : "")}}>
  <label class="form-check-label" for="inlineRadio2">Other</label>
  </div>
</div>


         <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Enter your address :</label>
    <input type="text" name="address" value="{{$url == url("/registerCustomer") ? "" :$customer->address}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
   
  </div>

    
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>

@include('layouts.Footer')