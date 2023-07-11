<?php

namespace App\Http\Controllers;

use App\Models\Customers;
use Illuminate\Http\Request;

class GetCustomerController extends Controller
{
    public function show()
    {
        $url = url("/registerCustomer");
        $customer = "";
        $title = "Register Customer";
        $data = compact('url', 'title', 'customer');
        return view('Customer')->with($data);
    }



    public function store(Request $req)
    {
        echo "<pre>";
        print_r($req->all());

        $customer = new Customers;

        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->address = $req['address'];
        $customer->DOB = $req['DOB'];
        $customer->gender = $req['gender'];
        $customer->save();
        return redirect('view');
    }


    public function view(Request $req)
    {

        $search = $req['search'] ?? "";

        if ($search != "") {
            $customer = Customers::where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->cursorPaginate(5);
        } else {
            $customer = Customers::cursorPaginate(10);
        }
        $data = compact('customer');
        return view('view')->with($data);
    }

    public function trash(Request $req)
    {
        $search = $req['search'] ?? "";

        if ($search != "") {
            $customer = Customers::onlyTrashed()->where('name', 'LIKE', "%$search%")->orWhere('email', 'LIKE', "%$search%")->cursorPaginate(10);
        } else {
            $customer = Customers::onlyTrashed()->cursorPaginate(10);
        }
        $data = compact('customer');
        return view('Trash')->with($data);
    }

    public function delete(Customers $id)
    {
        $id->delete();
        return redirect("view");
    }

    public function Restore($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect("view");
    }

    public function Forcedelete($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect("view");
    }

    public function edit($id)
    {
        $customer = Customers::find($id);
        if (is_null($customer)) {
            return redirect("view");
        } else {
            $url = url('/update') . '/' . $id;
            $title = "Edit Customer";
            $data = compact('customer', 'url', 'title');
            return view('Customer')->with($data);
        }
    }

    public function update($id, Request $req)
    {
        $customer = Customers::find($id);
        $customer->name = $req['name'];
        $customer->email = $req['email'];
        $customer->address = $req['address'];
        $customer->DOB = $req['DOB'];
        $customer->gender = $req['gender'];
        $customer->save();


        return redirect('view');
    }
}