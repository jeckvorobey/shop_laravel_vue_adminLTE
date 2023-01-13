<?php

namespace App\Http\Requests\User;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules(): array
    {
      return [
        'name' => 'required|string',
        'surname' => 'nullable|string',
        'patronymic' => 'nullable|string',
        'age' => 'nullable|string',
        'address' => 'nullable|string',
        'gender' => 'nullable|string',
      ];
    }
}
