<?php
namespace App\Services;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class ProductService
{
    public function insertProduct($data)
    {
        return Product::create([
            'product_code' => $data['product_code'],
            'product_name' => $data['product_name'],
            'product_price' => $data['product_price'],
            'selling_price' => $data['selling_price'],
            'quantity' => $data['quantity']
        ]);
    }
    public function findProduct($data)
    {
        if (!empty($data)) {
            return Product::where('product_name', 'LIKE', $data . '%')
                ->get(['product_code', 'product_name', 'product_price', 'selling_price', 'quantity']);
        } else {
            return collect(); // return empty collection if nothing typed
        }
    }
    public function showAllProducts()
    {
        return Product::where('active_flag',1)->get(['id','product_code','product_name','product_price','selling_price','quantity']);
    }
     public function editProducts($id)
    {
        return Product::where('id',$id)->get(['id','product_code','product_name','product_price','selling_price','quantity']);
    }
}