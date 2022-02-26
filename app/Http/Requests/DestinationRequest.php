<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DestinationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        if($this->user_id == auth()->user()->id){
            return true;
        }else{
            return false;
        }
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $destination = $this->route()->parameter('destination');

        $rules = [
            'name'=>'required',
            'slug'=>"required|unique:destinations",
            'status'=>'required|in:1,2',
        ];

        if($destination){
            $rules['slug'] = "required|unique:destinations,slug," . $destination->id;
        }

        if($this->status==2){
            $rules = array_merge($rules,[
                'nation_id' => 'required',

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
                'file'=>'image',
                'filethumb'=>'image',
                'filefull'=>'image',
                


                
            ]);

        }

        return $rules;
    }
}
