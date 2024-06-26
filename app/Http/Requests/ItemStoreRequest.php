<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'photo' => 'required|max:255',
            'gender' => 'required|max:255',
            'size' => 'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'status' => 'required|max:255',
        ];
    }
}
