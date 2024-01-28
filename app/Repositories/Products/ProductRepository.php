<?php

namespace App\Repositories\Products;

use App\Repositories\BaseRepository;
use \App\Models\Product;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface {

    public function getModel()
    {
        return Product::class;
    }

    public function getProduct($limit=10)
    {
        return $this->model->limit($limit)->get();
    }
}