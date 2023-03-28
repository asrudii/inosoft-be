<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // request
        // $description = $request->input('description'); 
        // $qty = $request->input('qty'); 
        // $uom = $request->input('uom'); 
        // $unitPrice = $request->input('unitPrice'); 
        // $discount = $request->input('discount'); 
        // $vat = $request->input('vat'); 
        // $currency = $request->input('currency'); 
        // $vatAmount = $request->input('vatAmount'); 
        // $subTotal = $request->input('subTotal'); 
        // $total = $request->input('total'); 
        // $chargeTo = $request->input('chargeTo'); 
    
        // response
        return [
            "status" => 201,
            // "data" => [
            //     'name' => $description,
            //     'qty' => $qty,
            //     'uom' => $uom,
            //     'unitPrice' => $unitPrice,
            //     'discount' => $discount,
            //     'vat' => $vat,
            //     'currency' => $currency,
            //     'vatAmount' => $vatAmount,
            //     'subTotal' => $subTotal,
            //     'total' => $total,
            //     'chargeTo' => $chargeTo,
            // ],
            "data" => $request,
            "msg" => "Product success added!"
        ];
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
