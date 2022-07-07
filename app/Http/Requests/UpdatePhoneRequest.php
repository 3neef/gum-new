<?php

namespace App\Http\Requests;

use App\Models\Phone;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePhoneRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('phone_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'brand_id' => [
                'required',
                'integer',
            ],
            'state' => [
                'required',
            ],
            'color' => [
                'string',
                'nullable',
            ],
            'battery' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'space' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'ram' => [
                'string',
                'nullable',
            ],
            'images' => [
                'array',
            ],
            'price' => [
                'string',
                'nullable',
            ],
            'serial' => [
                'string',
                'nullable',
            ],
        ];
    }
}
