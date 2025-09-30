<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use function Laravel\Prompts\alert;
class ProductController extends Controller
{
    private ProductService $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    public function addProducts(Request $request)
    {
        $validate = $request->validate([
            'product_code' => 'integer',
            'product_name' => 'required',
            'product_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required'
        ]);
        $res = $this->productService->insertProduct($validate);
        if (!empty($res)) {
            return redirect()->back()->with('success', 'Product successfully inserted');
        } else {
            return redirect()->back()->with('error', 'Failed to insert product');
        }
    }

    public function searchProduct(Request $request)
    {
        return $request->all();
    }
}
