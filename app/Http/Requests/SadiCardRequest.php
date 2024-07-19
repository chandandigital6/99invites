<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SadiCardRequest extends FormRequest
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
            'image'=>'nullable',
            'mantra' => 'nullable|string',
            'm_name' => 'nullable|string|max:255',
            'f_name' => 'nullable|string|max:255',
            'in_request' => 'nullable|string',
            'data_and_time' => 'nullable|string',
            'venue_address' => 'nullable|string',
            'marriage_to_follow' => 'nullable|string',
            'cardType_id' => 'nullable|exists:card_types,id',
        ];
    }
}
