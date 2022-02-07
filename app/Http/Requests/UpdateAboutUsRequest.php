<?php

namespace App\Http\Requests;

use App\Models\AboutUs;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateAboutUsRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('about_us_edit');
    }

    public function rules()
    {
        return [
            'breif' => [
                'required',
            ],
            'description' => [
                'required',
            ],
            'email_1' => [
                'required',
            ],
            'email_2' => [
                'string',
                'required',
            ],
            'vision' => [
                'required',
            ],
            'goals' => [
                'required',
            ],
            'phone_1' => [
                'string',
                'required',
            ],
            'phone_2' => [
                'string',
                'required',
            ],
            'address' => [
                'string',
                'required',
            ],
            'time' => [
                'string',
                'required',
            ],
            'facebook' => [
                'string',
                'required',
            ],
            'twitter' => [
                'string',
                'required',
            ],
            'instegram' => [
                'string',
                'required',
            ],
            'youtube' => [
                'string',
                'required',
            ],
            'linkedin' => [
                'string',
                'required',
            ],
            'services_text' => [
                'required',
            ],
            'projects_text' => [
                'required',
            ],
            'products_text' => [
                'required',
            ],
            'news_text' => [
                'required',
            ],
            'logo' => [
                'required',
            ],
        ];
    }
}
