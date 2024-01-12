<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
            'title' => [
                'required',
                'min:3',
                'max:255',
                // Rule::unique('projects')->ignore($this->post)
            ],
            'link' => 'required|max:255|url',
            'description' => 'nullable',
            'image' => 'nullable|url',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio',
            'title.min' => 'Il titolo deve avere almeno :min caratteri',
            'title.max' => 'Il titolo deve avere massimo :max caratteri',
            'link.required' => 'Il link al progetto esterno è obbligatorio',
            'link.max' => 'Il link deve avere massimo :max caratteri',
            'link.url' => 'Devi inserire una url valida',
            'image.url' => 'Devi inserire una url valida',



        ];
    }
}
