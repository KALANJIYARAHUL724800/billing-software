<?php
namespace App\Services;

use App\Http\Controllers\ProductController;
use App\Models\Product;

class ProductService
{
    public function insertProduct($data)
    {
        return Product::create([
            'product_code' =>$data['product_code'],
            'product_name' =>$data['product_name'],
            'product_price'=>$data['product_price'],
            'selling_price'=>$data['selling_price'],
            'quantity' =>$data['quantity']
        ]);
    }
}