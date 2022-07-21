<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class ProductController extends Controller
{

    //insert a new product with name and description.
    public function create($name, $description) {
        $product = new Products();
        $product->name = $name;
        $product->description = $description;
        $product->save();
        return "Inserted.";
    }    

    //find a product and dump it to the client.
    public function showProduct(int $id) {
        $product = Products::find($id);
        if ($product) {
            dump($product);
        } else {
            dump("Product does not exists!");
        }
         
    }

    //simple function.
    function showAll(){
        return "hi";
    }
}
