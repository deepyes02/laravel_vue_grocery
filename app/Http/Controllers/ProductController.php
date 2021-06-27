<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Exception;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resources
     */
    public function index()
    {
        $product = Product::all();
        if (count($product) < 1) {
            return [
                "message" => "No products exist, add products first"
            ];
        } else {
            return $product;
        }
    }

    /**
     * Post Request, store products
     *
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        try {
            return Product::create($request->all());
        } catch (Exception $e) {
            return [
                "message" => $e->getMessage()
            ];
        }
    }

    /**
     * Get Products by Id
     */
    public function show($id)
    {
        if (Product::find($id)) {
            return Product::find($id);
        } else {
            return [
                "message" => "Product not found"
            ];
        }
    }

    /**
     * Update Product by Id
     */
    public function update(Request $request, $id)
    {
        $product = Product::find($id);
        if ($product !== null) {
            $product->update($request->all());
            return $product;
        } else {
            return [
                "message" => "sorry product with id {$id} not found"
            ];
        }

    }

    /**
    * Delete product
     */
    public function destroy($id): array
    {
        $product = Product::find($id);
        if ($product !== null) {
            $product->delete();
            return [
                "message" => "Product {$id} destroyed successfully"
            ];
        } else return [
            "message" => "Sorry product with id '{$id}' not found"
        ];
    }
}
