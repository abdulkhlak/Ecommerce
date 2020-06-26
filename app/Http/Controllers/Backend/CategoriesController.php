<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\model\categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function view()
    {
        $categorires = categories::get();
        return view('backend.storemanagment.categories.category_view', compact('categorires'));

    }

    public function add()
    {
        return view('backend.storemanagment.categories.category_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'category_name' => ['required', 'string', 'max:100','unique:categories,category_name'],
            'status' => ['required'],

        ]);
        $categories= null;
        try {
            $category_name = $request->category_name;
            $category = categories::create([
                'category_name' => $category_name,
                'category_slug' => slugify($category_name),
                'status' => $request->status,

            ]);
            if ($request->file('category_logo')) {
                $file = $request->file('category_logo');
                @unlink(public_path('upload/store_managment/category_logo/' . $category->category_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/category_logo'), $filename);
                $category['category_logo'] = $filename;
            }

            $category->save();


            $categories= true;
        } catch (Exception $exception) {
            $categories = false;
        }
        if ($categories == true) {
            return redirect()->route('categories_view')->with('success', 'Yah ! Category has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Category ');
        }

    }

    public function categoryStatus($id, $status)
    {
        $category = categories::find($id);
        $category->status = $status;
        $category->save();
        return response()->json(['message' => 'success']);
    }

    public function edit($id)
    {
        $id= base64_decode($id);
        $categories = categories::find($id);
        return view('backend.storemanagment.categories.category_edit', compact('categories'));
    }


    public function update(Request $request , $id)
    {
        $request->validate([
            "category_name" => "required| unique:categories,category_name,".$id,

        ]);
        $category = categories::find($id);
        $success= null;
        try {
            $category_name = $request->category_name;
            $category-> update([
                'category_name' => $category_name,
                'category_slug' => slugify($category_name),

            ]);
            if ($request->file('category_logo')) {
                $file = $request->file('brand_logo');
                @unlink(public_path('upload/store_managment/brands_logo/' . $category->category_logo));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/store_managment/category_logo'), $filename);
                $category['category_logo'] = $filename;
            }
            $category->save();


            $success = true;
        } catch (Exception $exception) {
            $success = false;
        }
        if ($success === true) {
            return redirect()->route('categories_view')->with('success', 'Yah ! Category has been successfully update !');
        } else {
            return back()->with('error', 'Oops! Unable to update a Category ');
        }



    }
    public function delete($id)
    {
        $id = base64_decode($id);

        $category = categories::find($id);
        $category->delete();
        return redirect()->route('categories_view')->with('success', ' Category has been delete successfully');
    }

}
