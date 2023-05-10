<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreGameRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'string|required',
            'platform' => 'string|required',
            'release_year' => 'integer|required',
            'genre' => 'string|required',
            'publisher' => 'string|required',
            'rank' => 'integer|required',
            'na_sales' => 'integer|required',
            'eu_sales' => 'integer|required',
            'jp_sales' => 'integer|required',
            'other_sales' => 'integer|required',
            'global_sales' => 'integer|required',
        ];
    }
}
