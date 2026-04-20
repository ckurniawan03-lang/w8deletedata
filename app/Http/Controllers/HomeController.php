<?php

namespace App\Http\Controllers;

use App\Models\ProductCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function show(){
<<<<<<< HEAD
        return view('home',[
            'product_categories' => ProductCategory::with(['products'])->get(),
=======
        $product_categories = ProductCategory::with('products')->get();

        return view('home', [
            'product_categories' => $product_categories
>>>>>>> a17a68c75f0ef523e9974de07746f14d6a06b83e
        ]);
    }
}
