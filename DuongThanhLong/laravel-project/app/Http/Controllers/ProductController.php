<?php

namespace App\Http\Controllers;

use App\Services\ProductService;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    private $productService;

    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        $products = $this->productService->getAllProducts();

        return response()->json([
            'data' => $products,
        ]);
    }

    public function show(int $id)
    {
        $product = $this->productService->getProductById($id);

        if (!$product) {
            return response()->json([
                'message' => 'Không tìm thấy sản phẩm',
            ], 404);
        }

        return response()->json([
            'data' => $product,
        ]);
    }

    public function store(Request $request)
    {
        // Validate dữ liệu sản phẩm
        $validatedData = $request->validate([
            'store_id' => 'required|integer',
            'category_id' => 'required|integer',
            'city_id' => 'required|integer',
            'draft_content' => 'nullable|json',
            'sku' => 'required|string|unique:products',
            'name' => 'required|string',
            'slug' => 'required|string|unique:products',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'discount_type' => 'nullable|in:%,,dong',
            'status' => 'required|in:draft,published',
            'quantity' => 'required|integer',
            'description' => 'required|string',
            'brand' => 'required|string',
            'warranty' => 'required|string',
            'warranty_type' => 'required|string',
            'shipping' => 'required|string',
        ]);

        // Tạo sản phẩm mới
        $product = new Product($validatedData);

        // Lưu sản phẩm vào database
        $product = $this->productService->createProduct($validatedData);

        // Trả về response
        return response()->json([
            'message' => 'Tạo sản phẩm thành công',
            'data' => $product,
        ]);
    }

    public function update(Request $request, int $id)
    {
        $data = $request->validate([
            'store_id' => 'required|integer',
            'category_id' => 'required|integer',
            'city_id' => 'required|integer',
            'sku' => 'required|string|unique:products,sku,' . $id,
            'name' => 'required|string',
            'slug' => 'required|string|unique:products,slug,' . $id,
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'discount_type' => 'nullable|in:%,,dong',
            'status' => 'required|in:draft,published',
            'quantity' => 'required|integer',
            'description' => 'required|string',
            'brand' => 'required|string',
            'warranty' => 'required|string',
            'warranty_type' => 'required|string',
            'shipping' => 'required|string',
        ]);

        // Lấy dữ liệu nháp
        $draftContent = $data;

        // Mã hóa dữ liệu nháp thành JSON
        $draftContentJson = json_encode($draftContent);

        // Kiểm tra trạng thái "draft"
        if ($request->input('status') === 'draft') {
            // Gán dữ liệu nháp vào mảng dữ liệu
            $data['draft_content'] = $draftContentJson;
        }

        // Tìm sản phẩm
        $product = $this->productService->getProductById($id);

        if (!$product) {
            return response()->json([
                'message' => 'Không tìm thấy sản phẩm',
            ], 404);
        }

        // Cập nhật sản phẩm
        $product = $this->productService->updateProduct($id, $data);

        return response()->json(['message' => 'Lưu nháp thành công']);
    }
    public function destroy(int $id)
    {
        $product = $this->productService->deleteProduct($id);

        if (!$product) {
            return response()->json([
                'message' => 'Không tìm thấy sản phẩm',
            ], 404);
        }

        return response()->json([
            'message' => 'Xóa sản phẩm thành công',
        ]);
    }
}
