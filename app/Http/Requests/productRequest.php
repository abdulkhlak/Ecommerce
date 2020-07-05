<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class productRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'cat_id'=>'required',
            'sub_cat_id'=>'required',
            'product_name'=>'required',
            'brand_id'=>'required',
            'size'=>'required',
            'color'=>'required',
            'buying_price'=>'required',
            'selling_price'=>'required',
            'quantity'=>'required',
            'image'=>'required',
            'description'=>'required',
        ];
    }
}
