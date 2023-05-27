<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use App\Models\Product;
use App\Models\reviews;
use DB;
class productController extends Controller
{
    // public function data(Request $request) {
    //     $response = Http::get('https://tech.dev.ats-digital.com/api/products', [
    //         'size' => 4
    //     ]);
    //     $data = $response->json();
    //     $products = $data['products'];
    //     if($products){
    //         foreach ($products as $p) {     
    //             $prod = new Product;
    //             $ids =  DB::select('select id from products');
    //             $revsContent = $p['reviews'];
    //             $prod->productName = $p['productName'];
    //             $prod->description = $p['description'];
    //             $prod->price = $p['price'];
    //             $prod->category = $p['category'];
    //             $prod->imageUrl = $p['imageUrl'];
    //             $prod->save();
    //             foreach ($revsContent as $revi) {
    //                 $revs = new reviews;
    //                 $revs->productId = $prod->id; 
    //                 $revs->note = $revi['value'];
    //                 $revs->comment = 'NOUR AND WAFA';
    //                 $revs->save(); 
    //             }     
    //         }

    //     }
    
    //     return response()->json($products);
    // }


    public function getAllProducts(Request $request){
            $response = Product::getCachedData();
            return $response;
    }   
}
