<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CashierController extends Controller
{
    //membuat sebuah action/function
    public function index() {
        return view('cashier.index');
     }

    // membuat fungsi untuk mengambil data dan mengirim ke front-end
    public function getListProduct() { 
        try {
            // mengambil data produk dan relasinya
            $listProduct = Product::with('stocks')->get();

            // mengembalikan data berbentuk json
            return response()->json([
                'data'  => $listProduct,
                'message'   => 'get list product successfully'
            ], 200);
        } catch (\Exception $error) {
            //melemparkan error bila data tidak ada
            return response()->json([
                'message'   => $error->getMessage()
            ], 500);
        }
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

    public function exampleStoreOrderProduct(Request $request) {
         $validator = Validator::make($request->all(), [
            'total_amount' => 'required',
            'order_product' => 'required'
        ]);

        $validated = $validator->validated();

        // melakukan perulangan untuk membongkar array order_product kiriman data dari front end 
        // mengisi data kedalam class product melalui relasi
        // mengirim pesan berbentuk respon json
        
        dd($validated);
    }
}
