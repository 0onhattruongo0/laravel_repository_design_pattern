<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Repositories\Products\ProductRepository;

class ProductController extends Controller
{
    protected $productRepo;

    public function __construct(ProductRepository $productRepo)
    {
        $this->productRepo = $productRepo;
    }
    public function index(){
        // dd($this->productRepo);
        // $products = $this->productRepo->getProduct(1);
        $products = $this->productRepo->getAll();
        dd($products);
    }

    public function show($id)
    {
        $product = $this->productRepo->find($id);
        // return view('home.product', ['product' => $product]);
    }
    public function store(Request $request)
    {
        $data = $request->all();
        //... Validation here
        $product = $this->productRepo->create($data);
        // return view('home.products');
    }
    public function update(Request $request, $id)
    {
        $data = $request->all();
        //... Validation here
        $product = $this->productRepo->update($id, $data);
        // return view('home.products');
    }
    public function destroy($id)
    {
        $this->productRepo->delete($id);
        // return view('home.products');
    }
}
