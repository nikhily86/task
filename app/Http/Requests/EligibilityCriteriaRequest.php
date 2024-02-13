<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EligibilityCriteriaRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'age_less_than' => 'nullable|integer|min:0',
            'age_greater_than' => 'nullable|integer|min:0',
            'last_login_days_ago' => 'nullable|integer|min:0',
            'income_less_than' => 'nullable|numeric|min:0',
            'income_greater_than' => 'nullable|numeric|min:0',
        ];
    }
}
