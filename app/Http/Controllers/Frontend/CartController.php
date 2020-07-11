<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\model\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
   public function add(Request $request)
   {
   $product= Product::select('product_name','selling_price','special_price','special_start','special_end','image')->find
   ($request->id);
   $price=($product->special_price)?$product->special_price:$product->selling_price;
  \Cart::add([
      'id' => $request->id,
     'name' => $product->product_name,
     'price' => $price,
      'quantity' => $request->product_qty,
      'attributes' => array([
          'special_price' => $product->special_price,
          'image'=>$product->image,
     ]),
 ]);
       $items = \Cart::getContent();
       //dd($items);
return redirect('cart/show');

   }
   public function show()
   {
       $items = \Cart::getContent();
       //return $items;
       //dd($items);
return view('cart/cart-show',compact('items'));
   }

    public function remove($id)
    {
        try {
            $id = base64_decode($id);

            $remove = \Cart::remove($id);

          return back();
        }catch (Exception $exception){
            return back()->with('error', 'Oops! Unable to remove a cart ');
        }

    }
}
