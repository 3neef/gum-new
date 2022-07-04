<?php

namespace App\Http\Requests;

use App\Models\Sale;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSaleRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sale_edit');
    }

    public function rules()
    {
        return [
            'customer_id' => [
                'required',
                'integer',
            ],
            'phones.*' => [
                'integer',
            ],
            'phones' => [
                'required',
                'array',
            ],
            'operation' => [
                'required',
            ],
            'total_price' => [
                'string',
                'required',
            ],
        ];
    }
}
