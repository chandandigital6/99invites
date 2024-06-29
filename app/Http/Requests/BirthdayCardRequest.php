<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BirthdayCardRequest extends FormRequest
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
            'title' => 'nullable|string|max:255',
            'name' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'address' => 'nullable|string',
            'datetime' => 'nullable|date',
            'other' => 'nullable|string',
            'other_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'cardType_id' => 'nullable|exists:card_types,id',
        ];
    }
}
