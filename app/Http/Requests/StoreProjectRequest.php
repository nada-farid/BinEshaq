<?php

namespace App\Http\Requests;

use App\Models\Project;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('project_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'place' => [
                'string',
                'required',
            ],
            'date' => [
                'required',
                'date_format:' . config('panel.date_format'),
            ],
            'client' => [
                'string',
                'required',
            ],
            'classification' => [
                'string',
                'required',
            ],
            'during' => [
                'string',
                'required',
            ],
            'breif' => [
                'required',
            ],
            'photo' => [
                'required',
            ],
            'project_slider' => [
                'array',
            ],
        ];
    }
}
