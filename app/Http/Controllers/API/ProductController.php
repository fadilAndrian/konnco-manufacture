<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index() {
    	$data = Product::all();
        $response = [
            'message' => 'Show all products.',
            'data' => $data
        ];

        return Response()->json($response, 200);
    }

    public function show($id) {
    	$data = Product::findOrFail($id);
        $response = [
            'message' => 'Show product success.',
            'data' => $data
        ];

        return Response()->json($response, 200);
    }

    public function store(Request $request) {
    	$data = Product::create($request->all());
        $response = [
            'message' => 'Product added.',
            'data' => $data
        ];

        return Response()->json($response, 201);
    }

    public function update(Request $request, $id) {
    	$data = Product::findOrFail($id);
    	$data->update($request->all());
    	// $data->user_id = $request['user_id'];
    	// $data->nama_produk = $request['nama_produk'];
    	// $data->harga = $request['harga'];
    	// $data->status = $request['status'];
    	// $data->save();
        $response = [
            'message' => 'Product updated.',
            'data' => $data
        ];

        return Response()->json($response, 200);
    }
}
