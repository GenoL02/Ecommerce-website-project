<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAllProducts()
    {
        return Product::all();
    }

    public function getProductById(int $id)
    {
        return Product::find($id);
    }

    public function createProduct(array $data)
    {
        $product = Product::create($data);
        return $product;
    }

    public function updateProduct(int $id, array $data)
    {
        $product = Product::find($id);
        $product->update($data);
        return $product;
    }

    public function deleteProduct(int $id)
    {
        return Product::destroy($id);
    }
}
