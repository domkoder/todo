<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Repositories\Product\ProductContract;
class ProductsControllers extends Controller
{

  protected $repo;
  public function __construct(ProductContract $prodcon)
  {
    $this->repo = $prodcon;
  }

  public function searchProduct()
  {
    return view('search');
  }

  public function search2(Request $request)
  {
    $date = $request->select;
    $products = $this->repo->search($date);
    return view('output')->with('products',$products);
  }






  public function create()
  {
    return view('products');
  }

  public function save(Request $request)
  {
    $product = new Products();

    $product->productName = $request->pname;
    $product->price = $request->price;
    $product->barchNumber = $request->bnum;
    $product->experingDate = $request->edate;
    $product->manufacturingDate = $request->mdate;
    $product->Quantity = $request->quan;
    $product->manufacturersName=$request->mname;



    $product->save();
  }
}
