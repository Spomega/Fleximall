<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Merchant;
use App\User;
use Auth;
use App\Repositories\MerchantRepository as ViewMerchant;

class MerchantController extends Controller    
{
    
     protected $merchant;
    
     public function __construct(ViewMerchant $merchant) {
       
        $this->merchant = $merchant;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $merchant = User::find($id)->merchant;
        return view('pages.mechant_dashboard', compact('merchant'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.merchant',$this->mall->getAllSelect());
    }
    
    
    public function showdashboard()
    {
        //
        return view('pages.merchant_view');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,['image'=>'required|mimes:jpeg,png','merchantname'=>'required','email'=>'required',
             'contactnumber'=>'required','address'=>'required','bannermessage'=>'required']); 
        
        $merchant = new Merchant;
           
        $merchant->shopname  = $request->input('merchantname');
        $merchant->contactnumber = $request->input('contactnumber');
        $merchant->bannerimage = $request->input('bannerimage');
        $merchant->address = $request->input('address');
        $merchant->category = $request->input('category');
        $merchant->email = $request->input('email');
        $merchant->registrationstatus = '0';
        
            // upload the image //
      $file = $request->file('image');
      $destination_path =  'localhost:8000'.'/public/images/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $merchant->bannerimage = $destination_path . $filename;
      
      $merchant->save();
        
       
      return redirect('merchant/create')->with('message','Merchant Created'); 
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
        $shops = $this->merchant->findAllBy('mall_id', $id);
        return view('pages.shop', compact('shops'));
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
