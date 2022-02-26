<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ExtensionRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        $extension = $this->route()->parameter('tour');

        $rules = [
            'title'=>'required',
            //'slug'=>"required|unique:posts",
            'status'=>'required|in:1,2',
            //'file' => 'image'
            
        ];

        if($extension){
            $rules['title'] = "required|unique:extensions,title," . $extension->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'days'=>'required',
                'price'=>'required',
                'days'=>'required',
                'suplement'=>'required',
                'accomodation'=>'required',
                'abstract'=>'required',
                'img_url'=>'required',                     
            ]);

        }
        return $rules;
    }
}
