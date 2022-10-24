<?php

namespace App\Http\Controllers;
use App\Models\Colour;
use App\Models\Products;
use Illuminate\Http\Request;


class ProductsController extends Controller
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
    public function addcolour()
    {
        return view('addproducts');
    }
    public function create(Request $request)
    {
        
       $data = new Colour();
       $data->colour_name = $request->input('colour_name');
       $data->save();
       return redirect('/add')->with(['success_add' => 'Inserted Successfully !']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
      $data =  new Products();
      $data->product_code = $request->input('product_code');
      $data->product_name = $request->input('product_name');
      $data->purchases_price = $request->input('purchases_price');
      $data->sales_price = $request->input('sales_price');
      $data->wholesale_price = $request->input('wholesale_price');
      $data->save();
      return redirect('/add')->with(['success_add' => 'Inserted Successfully !']);
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
