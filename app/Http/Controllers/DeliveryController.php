<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Delivery;

class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.delivery');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $this->validate($request,['companyname'=>'required','email'=>'required',
             'contactnumber'=>'required','address'=>'required','registrationcode'=>'required',
             'insurancecompany'=>'required','policy'=>'required']); 
          
         $delivery = new Delivery;
         
         $delivery->companyname = $request->input('companyname');
         $delivery->email = $request->input('email');
         $delivery->contactnumber = $request->input('contactnumber');
         $delivery->address = $request->input('address');
         $delivery->registrationcode = $request->input('insurancecompany');
         $delivery->insurancecompany = $request->input('email');
         $delivery->policynumber = $request->input('policy');
         $delivery->registrationstatus = '0';
         
         $delivery->save();
         
         
         
      return redirect('delivery\create')->with('message','Delivery Company Created Successfully'); 
         
          
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
