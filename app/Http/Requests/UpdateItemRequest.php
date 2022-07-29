<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateItemRequest extends FormRequest
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
            'title' => 'required|min:10|unique:items,title,'.$this->route('item')->id,
            'type' => 'required',
            'photo' => 'mimes:jpg,png,jpeg,svg|file',
            'level' => 'required|in:0,1,2'
        ];
    }
}
