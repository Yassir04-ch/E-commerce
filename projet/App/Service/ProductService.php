<?php

namespace App\Services;
use App\Models\Product;
use App\Models\Category;

class ProductService {

    private Product $product;

    public function __construct() {
        $this->product = new Product();
    }

    public function createProduct($data) {
        $categoryName = $data['category'];
        $category = new Category();
        $catObj = $category->getCategoryByName($categoryName);

        if(!$catObj) {
            $category->setName($categoryName);
            $category->addCategory();
            $catObj = $category;
        }

        $this->product->setName($data['name']);
        $this->product->setDescription($data['description']);
        $this->product->setPrice($data['price']);
        $this->product->setStock($data['stock']);
        $this->product->setImage($data['image']);
        $this->product->setCategory($catObj);
        $this->product->addProduct();
    }

    public function updateProduct($id, $data) {
        $this->product->setId($id);
        $this->product->setName($data['name']);
        $this->product->setDescription($data['description']);
        $this->product->setPrice($data['price']);
        $this->product->setStock($data['stock']);
        $this->product->setImage($data['image']);

        $category = new Category();
        $catObj = $category->getCategoryByName($data['category']);
        if(!$catObj){
            $category->setName($data['category']);
            $category->addCategory();
            $catObj = $category;
        }
        $this->product->setCategory($catObj);
        $this->product->updateProduct();
    }

    public function deleteProduct($id){
        $this->product->delete($id);
    }

    public function getAllProducts(){
        return $this->product->getAllProduct();
    }
}
