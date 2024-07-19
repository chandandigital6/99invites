<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SadiCardDetailsRequest extends FormRequest
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
            'haldi_image' => 'nullable|image|max:2048',
            'haldi_title' => 'nullable|string',
            'haldi_msg' => 'nullable|string',
            'haldi_date_time' => 'nullable|date',
            'haldi_venue' => 'nullable|string',
            'mehndi_image' => 'nullable|image|max:2048',
            'mehndi_title' => 'nullable|string',
            'mehndi_msg' => 'nullable|string',
            'mehndi_date_time' => 'nullable|date',
            'mehndi_venue' => 'nullable|string',
            'sangeet_image' => 'nullable|image|max:2048',
            'sangeet_title' => 'nullable|string',
            'sangeet_msg' => 'nullable|string',
            'sangeet_date_time' => 'nullable|date',
            'sangeet_venue' => 'nullable|string',
            'barat_image' => 'nullable|image|max:2048',
            'barat_title' => 'nullable|string',
            'barat_msg' => 'nullable|string',
            'barat_date_time' => 'nullable|date',
            'barat_venue' => 'nullable|string',
            'vidai_image' => 'nullable|image|max:2048',
            'vidai_title' => 'nullable|string',
            'vidai_msg' => 'nullable|string',
            'vidai_date_time' => 'nullable|date',
            'vidai_venue' => 'nullable|string',
            'reception_image' => 'nullable|image|max:2048',
            'reception_title' => 'nullable|string',
            'reception_msg' => 'nullable|string',
            'reception_date_time' => 'nullable|date',
            'reception_venue' => 'nullable|string',
            'child_msg' => 'nullable|string',
            'f_family_title_name' => 'nullable|string',
            'f_family_member_name' => 'nullable|string',
            'f_contact_details' => 'nullable|string',
            'f_map_location' => 'nullable|string',
            'm_family_title_name' => 'nullable|string',
            'm_family_member_name' => 'nullable|string',
            'm_contact_details' => 'nullable|string',
            'm_map_location' => 'nullable|string',
            'sadiCard_id' => 'nullable|exists:sadi_cards,id',
        ];
    }
}
