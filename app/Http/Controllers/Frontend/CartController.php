<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\model\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function add(Request $request)
   {
   $product= Product::select('product_name','selling_price','special_price','special_start','special_end','image')->find($request->id);
  \Cart::add([
      'id' => $request->id,
      'name' => $product->product_name,
      'price' => $product->selling_price,
      'quantity' => 1,
      'attributes' => array([
          'image'=>$product->image
      ]),
  ]);
return redirect('cart/show');

   }
   public function show()
   {
       $items = \Cart::getContent();



return view('cart/cart-show',compact('items'));
   }
}
