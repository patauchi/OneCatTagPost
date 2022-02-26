<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TourRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $tour = $this->route()->parameter('tour');

        $rules = [
            'name'=>'required',
            'slug'=>"required|unique:posts",
            'status'=>'required|in:1,2',
            
        ];

        if($tour){
            $rules['slug'] = "required|unique:tours,slug," . $tour->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'slogan'=>'required',
                'subtitle'=>'required',
                'days'=>'required',
                'shortprice'=>'required',
                'fullprice'=>'required',
                'calltoaction'=>'required',
                'abstract'=>'required',
                'include'=>'required',
                'overview'=>'required',
                'file' => 'image',
                'filethumb' => 'image',
                'filefull' => 'image',
                    
            
                
            ]);

        }
        return $rules;

    }
    
}
