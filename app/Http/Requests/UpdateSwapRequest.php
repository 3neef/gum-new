<?php

namespace App\Http\Requests;

use App\Models\Swap;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSwapRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('swap_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'phone_1_id' => [
                'required',
                'integer',
            ],
            'phone_2_id' => [
                'required',
                'integer',
            ],
            'price_diffrance' => [
                'string',
                'nullable',
            ],
        ];
    }
}
