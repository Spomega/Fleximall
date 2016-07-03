<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Item;
use App\Repositories\ItemRepository as ViewItem;

class ItemController extends Controller
{
    
    
     protected $item;
    
     public function __construct(ViewItem $item) {
       
        $this->item = $item;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $items = $this->item->all();
	return view('pages.item_view',  compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('pages.item');
        
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
          //
        $this->validate($request,['image'=>'required|mimes:jpeg,png','itemname'=>'required','price'=>'required',
             'description'=>'required','category'=>'required']); 
        
        $item = new Item;
           
        $item->itemname  = $request->input('itemname');
        $item->price = $request->input('price');
        $item->description = $request->input('description');
        $item->category = $request->input('category');
        $item->quantity = $request->input('quantity');
        $item->merchant_id = $request->input('merchant_id');
        $item->status = '1';
        
       
        
            // upload the image //
      $file = $request->file('image');
      $destination_path =  'localhost:8000'.'/public/images/items/';
      $filename = str_random(6).'_'.$file->getClientOriginalName();
      $file->move($destination_path, $filename);
       
      // save image data into database //
      $item->thumbnailimage = $destination_path . $filename;
      
      $item->save();
        
       
      return redirect('item/view')->with('message','product created successfully'); 
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
        
        $items = $this->item->findAllBy('merchant_id',$id);
         return view('pages.shopitem',compact('items'));
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
