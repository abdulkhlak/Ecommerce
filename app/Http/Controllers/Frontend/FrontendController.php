<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\model\categories;
use App\model\Product;
use App\model\subcategories;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
   public function index()
   {
    $categories= categories::with('sub_categories')->where('status','1')->get();
       return view('frontend.layouts.home',compact('categories'));
   }
   public function category($slug)
   {
    $id= subcategories::where('subcat_slug',$slug)->pluck('id');
    $products= Product::where('sub_cat_id', $id)->get();
    return view('frontend.pages.sub_wise_product',compact('products'));
   }
   public function product($slug)
   {
    $id= Product::where('slug',$slug)->pluck('id');
    $product= Product::where('id', $id)->where('status','1')->first();
    $reletedProduct= Product::where('id', '!=',$product->id)->where('sub_cat_id', $product->sub_cat_id)->where('status','1')->orderBy
    ('id','DESC')->limit(20)->get();

    return view('frontend.pages.product_detail',compact('product','reletedProduct'));
   }

}
