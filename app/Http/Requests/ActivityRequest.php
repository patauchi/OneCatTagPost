<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ActivityRequest extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        $activity = $this->route()->parameter('activity');

        $rules = [
            'title'=>'required',
            //'slug'=>"required|unique:posts",
            'status'=>'required|in:1,2',
            //
            
        ];

        if($activity){
            $rules['title'] = "required|unique:extensions,title," . $activity->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'description'=>'required',
                'img_url'=>'required',  
                'file' => 'image'                   
            ]);

        }
        return $rules;
    }
}
