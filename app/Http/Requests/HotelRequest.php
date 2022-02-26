<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class HotelRequest extends FormRequest
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
        $hotel = $this->route()->parameter('hotel');

        $rules = [
            'name'=>'required',
            'slug'=>"required|unique:hotels",
            'status'=>'required|in:1,2',
        ];

        if($hotel){
            $rules['slug'] = "required|unique:hotels,slug," . $hotel->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'subtitle'=>'required',
                'primgraph'=>'required',
                'body'=>'required',
                'file'=>'image',
                'filethumb'=>'image',
                'filefull'=>'image'                
            ]);

        }

        return $rules;
    }
}
