<?php

namespace App\Http\Requests;

use App\Models\CompanyDevelopment;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyCompanyDevelopmentRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('company_development_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:company_developments,id',
        ];
    }
}
