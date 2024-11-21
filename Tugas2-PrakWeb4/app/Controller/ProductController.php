<?php

namespace app\Controller;

include "app/Traits/ApiResponseFormatter.php";
include "app/Models/Product.php";

use app\Models\Product;
use app\Traits\ApiResponseFormatter;

class ProductController
{

    use ApiResponseFormatter;

    public function index()
    {
        $productModel = new Product();
        $response = $productModel->findAll();
        return $this->apiResponse(200, "Success", $response);
    }

    public function getById($id)
    {

        $productModel = new Product();
        $response = $productModel->findById($id);
        if (!$response) {
            return $this->apiResponse(404, "Product not found", null);
        }
        return $this->apiResponse(200, "Success", $response);
    }

    public function insert()
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        if (json_last_error()) {
            $error = json_last_error_msg();
            return $this->apiResponse(400, "Error invalid input: $error", null);
        }

        if (!isset($inputData['product_name']) || empty($inputData['product_name'])) {
            return $this->apiResponse(400, "Error: product_name is required", null);
        }
        if (!isset($inputData['price']) || empty($inputData['price'])) {
            return $this->apiResponse(400, "Error: price is required", null);
        }
        if (!isset($inputData['stock']) || empty($inputData['stock'])) {
            return $this->apiResponse(400, "Error: stock is required", null);
        }
        if (!isset($inputData['image_url']) || empty($inputData['image_url'])) {
            return $this->apiResponse(400, "Error: image_url is required", null);
        }
        if (!isset($inputData['description']) || empty($inputData['description'])) {
            return $this->apiResponse(400, "Error: description is required", null);
        }
        $productModel = new Product();
        $response = $productModel->create([
            'product_name' => $inputData['product_name'],
            'price' => $inputData['price'],
            'stock' => $inputData['stock'],
            'image_url' => $inputData['image_url'],
            'description' => $inputData['description']

        ]);
        return $this->apiResponse(200, "Success", $response);
    }

    public function update($id)
    {
        $jsonInput = file_get_contents('php://input');
        $inputData = json_decode($jsonInput, true);

        // Validasi format JSON
        if (json_last_error()) {
            $error = json_last_error_msg();
            return $this->apiResponse(400, "Invalid JSON format: $error", null);
        }

        // Ambil data produk yang ada di database berdasarkan ID
        $productModel = new Product();
        $existingProduct = $productModel->findById($id);
        if (!$existingProduct) {
            return $this->apiResponse(404, "Product not found", null);
        }

        // Tentukan data yang akan diupdate
        $updatedData = [];

        // Jika ada data 'product_name' yang dikirimkan, update 'product_name'
        if (isset($inputData['product_name'])) {
            $updatedData['product_name'] = $inputData['product_name'];
        } else {
            // Jika tidak ada 'product_name', gunakan nilai yang ada di database
            $updatedData['product_name'] = $existingProduct['product_name'];
        }

        // Jika ada data 'price' yang dikirimkan, update 'price'
        if (isset($inputData['price'])) {
            $updatedData['price'] = $inputData['price'];
        } else {
            // Jika tidak ada 'price', gunakan nilai yang ada di database
            $updatedData['price'] = $existingProduct['price'];
        }

        // Jika ada data 'stock' yang dikirimkan, update 'stock'
        if (isset($inputData['stock'])) {
            $updatedData['stock'] = $inputData['stock'];
        } else {
            // Jika tidak ada 'stock', gunakan nilai yang ada di database
            $updatedData['stock'] = $existingProduct['stock'];
        }

        // Jika ada data 'image_url' yang dikirimkan, update 'image_url'
        if (isset($inputData['image_url'])) {
            $updatedData['image_url'] = $inputData['image_url'];
        } else {
            // Jika tidak ada 'image_url', gunakan nilai yang ada di database
            $updatedData['image_url'] = $existingProduct['image_url'];
        }

        // Jika ada data 'description' yang dikirimkan, update 'description'
        if (isset($inputData['description'])) {
            $updatedData['description'] = $inputData['description'];
        } else {
            // Jika tidak ada 'description', gunakan nilai yang ada di database
            $updatedData['description'] = $existingProduct['description'];
        }

        // Lakukan pembaruan data produk
        $result = $productModel->update($id, $updatedData);

        if ($result) {
            return $this->apiResponse(200, "Product updated successfully", null);
        } else {
            return $this->apiResponse(404, "Product update failed", null);
        }
    }




    public function delete($id)
    {
        $productModel = new Product();
        // Panggil metode delete dan periksa hasilnya
        $result = $productModel->delete($id);
        // Jika produk berhasil dihapus
        return $this->apiResponse(200, "Product deleted successfully", null);
    }
}
