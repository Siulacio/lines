<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEmployeeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }




    public function rules(): array
    {
        return [
            'muid' => ['required', 'max:7'],
            'name' => ['required'],
            'lastname' => ['required']
        ];
    }
}
