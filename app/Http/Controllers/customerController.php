<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
class customerController extends Controller
{
    public function index()
    {
       return View::make('customer.index');
    }

    public function getCustomerAll(Request $request){
        // if ($request->ajax()){
            $customers = Customer::orderBy('lname','DESC')->get();
            return response()->json($customers);
        //  }
    }
}