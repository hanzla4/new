<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductList()
    {
        // Any logic to fetch products from the database (optional)
        // Example: $products = Product::all();

        // Return the view
        return view('products.ProductList');
    }
    public function addProduct()
    {
        // Any logic to fetch products from the database (optional)
        // Example: $products = Product::all();

        // Return the view
        return view('products.AddProduct');
    }
    public function  ProductsReports()
    {
        // Any logic to fetch products from the database (optional)
        // Example: $products = Product::all();

        // Return the view
        return view('products.ProductsReports');
    }


}
