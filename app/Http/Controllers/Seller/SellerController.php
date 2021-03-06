<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $vendedores = Seller::has('products')->get();

        //return $usuarios;
        return response()->json(['data' => $vendedores], 200);
    }
   /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comprador = Seller::has('products')->findOrFail($id);

        //return $usuarios;
        return response()->json(['data' => $comprador], 200);
    }
}
