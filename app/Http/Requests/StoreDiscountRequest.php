<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDiscountRequest extends FormRequest
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
            'title' =>['required','string'],
            'public' =>['required','boolean'],
            'canUseForAllProducts' => ['required','boolean'],
            'max_number_of_uses' =>['required','integer'],
            'max_number_of_user_uses' =>['required','integer'],
            'discount_type' =>['required','string'],

            'code' =>['nullable','string'],
            'description' =>['nullable','string'],
            'number_of_uses' =>['nullable','integer'],
            'discount_amount_percentage'=>['nullable','integer'],
            'discount_amount_amount'=>['nullable','integer'],
            'starts_at'=>['nullable','date_format:Y-m-d H:i:s'],
            'expires_at' =>['nullable','date_format:Y-m-d H:i:s'],

        ];
    }
}
