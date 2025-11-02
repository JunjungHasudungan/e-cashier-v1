<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CashierController extends Controller
{
    //membuat sebuah action/function
    public function index() {
        return view('cashier.index');
     }

    public function exampleIndex() {
        return view('cashier.example-index');
    }

    public function exampleGetListProduct() {
        try {
            $listProdut = Product::with('stocks')->get();
            return response()->json([
                'message'   => 'get list products successfully',
                'data'      => $listProdut
            ], 200);
        } catch (\Exception $error) {
            return response()->json([
                'message'   => $error->getMessage()
            ], 500);
        }
    }
}
