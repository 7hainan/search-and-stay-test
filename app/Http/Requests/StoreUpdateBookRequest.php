<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUpdateBookRequest extends FormRequest
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
        $rules = [
            'name'=> [
                'required',
                'min:3',
                'max:255'
            ],
            'isbn'=> [
                'required',
                'min:13',
                'max:13',
                'unique:books'
            ],
            'value' => ['required']
        ];

        if($this->method() === 'PATCH'){
            $rules['isbn'] = [
                'nullable',
                'min:13',
                'max:13',
                Rule::unique('books')->ignore($this->id)
            ];

            $rules['name'] = [
                'nullable',
                'min:3',
                'max:255'
            ];

            $rules['value'] = ['nullable'];

        } 

        return $rules;
    }
}
