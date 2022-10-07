<?php

namespace App\Http\Controllers;
use View;
use Illuminate\Http\Request;
use App\Models\customer;
class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return View::make('customer.index');
    }

    public function getCustomerAll(Request $request)
    {
        // if ($request->ajax()){
        $customers = Customer::orderBy('lname', 'DESC')->get();
        return response()->json($customers);
        //  }
    }

    public function getCustomer(Request $request, $id){
        // if ($request->ajax()) {
            $customer = Customer::where('id',$id)->first();
             return response()->json($customer);
        // }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer);
    } 

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
       {
        $customer = Customer::find($id);
        return response()->json($customer);
        }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if ($request->ajax()) {
        $customer = Customer::find($id);
        $customer = $customer->update($request->all());
         return response()->json($customer);
        // }
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $customer = Customer::findOrFail($id);
        $customer->delete();
        return response()->json(["success" => "customer deleted successfully.",
             "status" => 200]);
    }
}