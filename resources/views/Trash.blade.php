@include('layouts.Header')

<form action="" method="GET" class="d-flex align-items-center justify-content-center mb-3 " style="background: #334;">
                <div class="form-group my-2" style="width: 80%" >
                  <input type="search" name="search" id="" class="form-control" placeholder="Search...">
                </div>
                <div class="mx-4 my-2">
                    <button class="btn btn-success ">Search</button>
                    <a class="btn btn-primary " type="button" href="{{url('/view/trash')}}" >reset</a>
                </div>
            </form>

    <div class="container my-4">
          <div class="d-flex align-items-center justify-content-between">
            <h1 class="my-4 text-danger">Trash data</h1>
            <a name="" id="" class="btn btn-primary" href="{{url('/view')}}" role ="button">Customer data</a>
    </div>

        <div class="table-responsive">
            <table class="table">
                <thead class="table-danger">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">DOB</th>
                        <th scope="col">Address</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customer as $item)
                    <tr class="">
                        <td scope="row">{{$item->name}}</td>
                        <td scope="row">{{$item->email}}</td>
                        <td scope="row">{{$item->gender}}</td>
                        <td scope="row">{{$item->DOB}}</td>
                        <td scope="row">{{$item->address}}</td>
                        <td scope="row">
                            <a name="" id="" class="btn btn-danger" href="{{url("/forcedelete")}}/{{$item->customer_id}}" role="button">delete</a>
                            <a name="" id="" class="btn btn-success" href="{{url("/restore")}}/{{$item->customer_id}}" role="button">Restore</a>
                        </td>
                    </tr>
                    @endforeach
                  
                </tbody>
            </table>
        </div>
         <div class="d-flex align-items-center mb-4 ">
      {{$customer->links()}}
        </div>
        
    </div>
        
    </div>


 @include('layouts.Footer')