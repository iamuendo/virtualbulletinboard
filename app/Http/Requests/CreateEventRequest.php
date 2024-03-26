<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEventRequest extends FormRequest
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
            'event_category_id' => 'required',
            'title' => 'required|max:155|min:2',
            'poster' => 'image|required',
            'description' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
            'event_mode_id' => 'required',
            'location_details' => 'nullable|max:155|min:2',
            'available_slots' => 'required|numeric',
            'room_no' => 'nullable|max:20|min:2',
            'meeting_url' => 'nullable|url',
            'tags' => 'required|exists:tags,id',
        ];
    }
}
