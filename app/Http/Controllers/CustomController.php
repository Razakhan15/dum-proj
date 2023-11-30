<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Customers;
use Illuminate\Http\Request;

class   CustomController extends Controller
{
    public function index()
    {
        $url = url('/customer');
        $customer = new Customers;
        $data = compact('customer', 'url');
        return view('form')->with($data);
    }
    public function store(Request $request)
    {
        echo "<pre>";
        print_r($request->all());
        $customer = new Customers;
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->password = md5($request['password']);
        $customer->city = $request['country'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('/customer/view');
    }
    public function view(Request $req)
    {
        $search = $req['search'] ?? "";
        if ($search != "") {
            $customer = Customers::where('name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->get();
        } else {
            $customer = Customers::paginate(15);
        }
        $data = compact('customer','search');
        return view('custoView')->with($data);
    }
    public function trash()
    {
        $customer = Customers::onlyTrashed()->get();
        $data = compact('customer');
        return view('custoTrash')->with($data);
    }
    public function delete($id)
    {
        $customer = Customers::find($id);
        if (!is_null($customer)) {
            $customer->delete();
        }
        return redirect('customer/view');
    }
    public function forceDelete($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->forceDelete();
        }
        return redirect()->back();
    }
    public function restore($id)
    {
        $customer = Customers::withTrashed()->find($id);
        if (!is_null($customer)) {
            $customer->restore();
        }
        return redirect('customer/trash');
    }
    public function edit($id)
    {
        $customer = Customers::find($id);
        if (is_null($customer)) {
            return redirect('customer/view');
        } else {
            $url = url('/customer/update') . '/' . $id;
            $data = compact('customer', 'url');
            return view('form')->with($data);
        }
    }
    public function update($id, Request $request)
    {
        $customer = Customers::find($id);
        $customer->name = $request['name'];
        $customer->email = $request['email'];
        $customer->city = $request['city'];
        $customer->state = $request['state'];
        $customer->address = $request['address'];
        $customer->dob = $request['dob'];
        $customer->save();
        return redirect('/customer/view');
    }
}
