<?php

namespace App\Http\Requests;

use App\Models\Experience;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateExperienceRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('experience_edit');
    }

    public function rules()
    {
        return [
            'brief_summary' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'years' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'projects' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'special_customer' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
            'worker' => [
                'required',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
