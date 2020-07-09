<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\productRequest;
use App\model\brands;
use App\model\categories;
use App\model\Product;
use App\model\subcategories;
use Illuminate\Http\Request;
use Exception;
use Image;

class ProductController extends Controller
{

    public function view()
    {
        $products = Product::get();
        return view('backend.storemanagment.products.product_view', compact('products'));

    }

    public function add()
    {
        $categories= categories::all();
        $subcategories = subcategories::all();
        $brands= brands::all();
        return view('backend.storemanagment.products.product_add',compact('categories','subcategories','brands'));
    }

    public function store(productRequest $request)
    {
        $slider= null;
        try {
            $image= $request->file('image');
            $fileEx= $image->getClientOriginalName();
            $fileName= date('Y-m-d').$fileEx;
            Image::make($image)->resize(350,350)->save(public_path('upload/products/'). $fileName);
            $gallery =[];
            if ($request->hasFile('files'))
            {

                $images= $request->file('files');
                $i=0;
                foreach ($images as $image){
                    $fileEx = $image->getClientOriginalName();
                    $imageName = date('Y-m-d').$i. '.'.$fileEx;
                    Image::make($image)->resize(350,350)->save(public_path('upload/products/'). $imageName);
               array_push($gallery,$imageName);
               $i++;
                }
            }
//            $image->move(public_path('upload/sliders/'), $fileName);
            $product = Product::create([
                'cat_id' =>$request->cat_id,
                'sub_cat_id' =>$request->sub_cat_id,
                'brand_id' =>$request->brand_id,
                'product_name' => $request->product_name,
                'slug' =>slugify($request->product_name),
                'model' =>$request->model,
                'color' =>$request->color,
                'size' =>$request->size,
                'buying_price' =>$request->buying_price,
                'selling_price' =>$request->selling_price,
                'special_price' =>$request->special_price,
                'special_start' =>$request->special_start,
                'special_end' =>$request->special_end,
                'quantity' =>$request->quantity,
                'warranty' =>$request->warranty,
                'warranty_duration' =>$request->warranty_duration,
                'warranty_condition' =>$request->warranty_condition,
                'video_url' =>$request->video_url,
                'image' =>$fileName,
                'galleary' =>json_encode($gallery),
                'description' =>$request->description,
                'long_description' =>$request->long_description,
                'status' =>$request->status,

            ]);

            // dd($product);
//            if ($request->file('brand_logo')) {
//                $file = $request->file('brand_logo');
//                @unlink(public_path('upload/store_managment/brands_logo/' . $slider->brand_logo));
//                $filename = date('YmdHi') . $file->getClientOriginalName();
//                $file->move(public_path('upload/store_managment/brands_logo'), $filename);
//                $slider['brand_logo'] = $filename;
//            }
//            $slider->save();



        } catch (Exception $exception) {
            dd($exception);
            $product = false;
        }
        if ($product == true) {
            return redirect()->route('product_view')->with('success', ' Product has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Product ');
        }

    }

    public function productStatus($id, $status)
    {
        $users = Product::find($id);
        $users->status = $status;
        $users->save();
        return response()->json(['message' => 'success']);
    }

    /*
     *   findCategories funcion
     */

    public function findCategories($id)
    {
       $categories= subcategories::select('id','subcat_name')->where('category_id',$id)->get();
       echo ' <option selected disabled> select sub category</option>';
      foreach ($categories as $category)
      {
          echo '<option value="'.$category->id.'">'.$category->subcat_name.'</option>';
      }
    }
/*
 *   buying price update function
 */
    public function upByingPrice($id, $price)
    {
       $product= Product::select('id','buying_price')->find($id);
      $product->buying_price =$price;
      $product->update();

    }

    public function edit($id)
    {
        $id= base64_decode($id);
        $sliders = Slider::find($id);
        return view('backend.sliders.sliders_edit',compact('sliders'));
    }


    public function update(Request $request , $id)
    {
        $this->validate($request, [
            "image" => "required",

        ]);
        $slider = Slider::find($id);
        $success= null;
        try {
            $image= $request->file('image');
            @unlink(public_path('upload/sliders/' . $slider->image));
            $fileEx= $image->getClientOriginalName();
            $fileName= date('Y-m-d').$fileEx;
            Image::make($image)->resize(80,80)->save(public_path('upload/sliders/'). $fileName);
            $slider-> update([
                'title'=> $slider->title,
                'sub_title'=> $slider->sub_title,
                'image'=> $fileName,
                'url'=> $slider->url,
                'start_date'=> $slider->start_date,
                'end_date'=> $slider->end_date,

            ]);



            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('sliders_view')->with('success', 'Yah ! Slider has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Slider ');
        }



    }
    public function delete($id)
    {
        try {
            $id = base64_decode($id);

            $slider = Slider::find($id);
            unlink(public_path('upload/sliders/') . $slider->image);
            $slider->delete();
            return redirect()->route('sliders_view')->with('success', ' slider has been delete successfully');
        }catch (Exception $exception){
            return back()->with('error', 'Oops! Unable to delete a slider ');
        }

    }
}
