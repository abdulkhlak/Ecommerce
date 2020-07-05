<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\model\Slider;
use Illuminate\Http\Request;
use Image;

class SliderController extends Controller
{

    public function view()
    {
        $sliders = Slider::get();
        return view('backend.sliders.sliders_view', compact('sliders'));

    }

    public function add()
    {
        return view('backend.sliders.sliders_add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => ['required', 'max:30'],
            'sub_title' => ['required', 'max:20'],
            'image' => ['required'],
            'url' => ['required'],
            'start_date' => ['required'],
            'end_date' => ['required'],
        ]);

        $slider= null;
        try {
            $image= $request->file('image');
            $fileEx= $image->getClientOriginalName();
            $fileName= date('Y-m-d').$fileEx;
            Image::make($image)->resize(80,80)->save(public_path('upload/sliders/'). $fileName);
//            $image->move(public_path('upload/sliders/'), $fileName);
            $slider = Slider::create([
             'title'=> $request->title,
             'sub_title'=> $request->sub_title,
             'image'=> $fileName,
             'url'=> $request->url,
             'start_date'=> $request->start_date,
             'end_date'=> $request->end_date,

            ]);
          // dd($slider);
//            if ($request->file('brand_logo')) {
//                $file = $request->file('brand_logo');
//                @unlink(public_path('upload/store_managment/brands_logo/' . $slider->brand_logo));
//                $filename = date('YmdHi') . $file->getClientOriginalName();
//                $file->move(public_path('upload/store_managment/brands_logo'), $filename);
//                $slider['brand_logo'] = $filename;
//            }
//            $slider->save();



        } catch (Exception $exception) {
            $slider = false;
        }
        if ($slider == true) {
            return redirect()->route('sliders_view')->with('success', 'Yah ! Slider has been successfully created !');
        } else {
            return back()->with('error', 'Oops! Unable to create a Slider ');
        }

    }

    public function sliderStatus($id, $status)
    {
        $users = Slider::find($id);
        $users->status = $status;
        $users->save();
        return response()->json(['message' => 'success']);
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
