<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Stock;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //membuat sebuah action/function
    public function index() {
        $listProduct = Product::with('stocks')->paginate(5);
        return view('admin.index', ['listProduct'=> $listProduct]);
     }

    public function create() {
        return view('admin._demo_card-create-product');
    }

    public function store(Request $request) {
        $validated  = $request->validate([
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'description' => 'required',
            ],[
                'name.required' => 'Nama wajib di isi..',
                'size.required' => 'Ukuran wajib di pilih..',
                'price.required' => 'Harga wajib di isi..',
                'quantity.required' => 'Jumlah wajib di isi..',
                'description.required' => 'Keterangan wajib di isi..',
            ]);

        $product = Product::create($validated);

        Stock::create([
            'product_id'    => $product->id,
            'quantity'  => $validated['quantity']
        ]);

        return redirect()->route('dashboard-admin')
                ->with('status', 'created-message');
    }

    public function deleteProduct($productId){
        $product = Product::where('id', $productId)->first();
        $product->stocks()->delete();
        $product->delete();
        return response()->json([
            'message'=>'Product berhasil dihapus'
        ],200);
    }

    public function editProduct($productId) {
        $product = Product::where('id', $productId)->with('stocks')->first();
        return view('admin._card-edit-product', ['product'=> $product]);
    }

    public function restockProduct($productId) {
        $product = Product::where('id', $productId)->first();
        return view('admin._card-restock-product', ['product'=> $product]);
    }

    public function updateProduct($productId, Request $request) {
        $validated  = $request->validate([
            'name' => 'required',
            'size' => 'required',
            'price' => 'required',
            'description' => 'required',
            [
                'name.required' => 'Nama wajib di isi..',
                'size.required' => 'Ukuran wajib di pilih..',
                'price.required' => 'Harga wajib di isi..',
                'description.required' => 'Keterangan wajib di isi..',
            ]
        ]);

        // membuat objek product
        $product = Product::where('id', $productId)->first();

        // melakukan update data product
        $product->update([
            'name' => $validated['name'],
            'size' => $validated['size'],
            'price' => $validated['price'],
            'description' => $validated['description'],
        ]);

        // mengembalikan ke jalur admin yang utama
       return redirect()->route('dashboard-admin')
                ->with('status', 'updated-message');
    }
}
