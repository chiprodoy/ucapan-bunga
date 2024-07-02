<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'costumer_name' => ['required','min:3'],
            'costumer_phone'=>['required','min:11','numeric'],
            'delivery_address'=>['required','min:10'],
            'product_name'=>['required'],
            'qty' => ['required','min:1','numeric']

        ];
    }
}
