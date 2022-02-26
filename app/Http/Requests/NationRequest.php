<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NationRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }


    public function rules()
    {
        $nation = $this->route()->parameter('nation');

        $rules = [
            'name'=>'required',
            'slug'=>"required|unique:nations",
            'status'=>'required|in:1,2',
            'file' => 'image'
        ];

        if($nation){
            $rules['slug'] = "required|unique:nations,slug," . $nation->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'abstract'=>'required',
                'body'=>'required',
                'title'=>'required',
                'subtitle'=>'required',
                'primgraph'=>'required',
                'quotation'=>'required',
                'abstract'=>'required',
                'sidetitle'=>'required',
                'sidebody'=>'required',
                'journalsubtitle'=>'required',
                'body'=>'required',
                'filethumb' => 'image',
                'filefull' => 'image'
                                                
            ]);

        }

        return $rules;
    
    }
}
