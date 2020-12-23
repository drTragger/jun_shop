<?php


namespace App\Services;


use App\Models\Product;

class ProductService
{
    /**
     * Gets all products from database
     * @return array
     */
    public function getProducts(): array
    {
        $product = Product::all();
        return $product->toArray();
    }

    /**
     * Adds a new product to database
     * @param array $product
     * @return Product
     */
    public function addProduct(array $product): Product
    {
        unset($product['_token']);
        return Product::create($product);
    }
}
