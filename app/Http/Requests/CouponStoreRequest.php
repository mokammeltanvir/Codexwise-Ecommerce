<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CouponStoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'coupon_name' => 'required|string|max:255|unique:coupons,coupon_name',
            'discount_amount' => 'required|numeric',
            'minimum_purchase_amount' => 'required|numeric',
            'validity_till' => 'required|date',
        ];

    }
}
