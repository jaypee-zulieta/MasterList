<?php

namespace App\Http\Requests;

use App\Rules\UniqueSchoolYearRule;
use App\Rules\YearEndRule;
use Illuminate\Foundation\Http\FormRequest;

class StoreSchoolYearRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "year_start" => ['required', 'numeric',  new UniqueSchoolYearRule],
            "year_end" => ['required', 'numeric', new YearEndRule],
            "description" => ['nullable']
        ];
    }
}
