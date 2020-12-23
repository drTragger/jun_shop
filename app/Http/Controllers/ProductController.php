<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;

    /**
     * Dependency injection of product service
     * @param ProductService $service
     */
    public function __construct(ProductService $service)
    {
        $this->productService = $service;
    }

    public function index()
    {
        $products = $this->productService->getProducts();
        return view('products.index', ['products' => $products]);
    }

    public function admin()
    {
        $products = $this->productService->getProducts();
        return view('products.admin', ['products' => $products]);
    }

    public function add(ProductRequest $request)
    {
        $this->productService->addProduct($request->toArray());
        return redirect(route('products.admin'));
    }

    public function delete(Product $product)
    {
        $product->delete();
        return redirect(route('products.admin'));
    }
}
