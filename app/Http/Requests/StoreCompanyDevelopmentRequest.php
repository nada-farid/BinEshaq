<?php

namespace App\Http\Requests;

use App\Models\CompanyDevelopment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCompanyDevelopmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_development_create');
    }

    public function rules()
    {
        return [
            'year' => [
                'string',
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}
