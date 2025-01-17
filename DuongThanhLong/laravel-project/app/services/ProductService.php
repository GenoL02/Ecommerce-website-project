<?php

namespace App\Services;

use App\Repositories\ProductRepository;

class ProductService
{
    private $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAllProducts()
    {
        return $this->productRepository->getAllProducts();
    }

    public function getProductById(int $id)
    {
        return $this->productRepository->getProductById($id);
    }

    public function createProduct(array $data)
    {
        return $this->productRepository->createProduct($data);
    }

    public function updateProduct(int $id, array $data)
    {
        return $this->productRepository->updateProduct($id, $data);
    }

    public function deleteProduct(int $id)
    {
        return $this->productRepository->deleteProduct($id);
    }
}
