<?php
    namespace App\Repositories\Product;

    use App\Repositories\Product\ProductContract;
    use App\Products;
    /**
     *
     */
    class EloquentProductRepository implements ProductContract{

       public function search($date)
        {
          $products = products::where ('manufacturingDate', $date)->get();
          return $products;
        }

    }


 ?>
