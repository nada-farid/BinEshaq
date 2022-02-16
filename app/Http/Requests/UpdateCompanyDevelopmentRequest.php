<?php

namespace App\Http\Requests;

use App\Models\CompanyDevelopment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCompanyDevelopmentRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('company_development_edit');
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
