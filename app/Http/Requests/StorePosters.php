<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePosters extends FormRequest
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
            'RU_Title'=>'required|string|',
            'Romanji_Title'=>'required|string|',
            'path' =>'required|file|',
            'Description'=>'required|string|',
            'Status'=>'required|string|',
            'Type'=>'required|string|',
            'Episodes'=>'required|string|',
            'Studio'=>'required|string|',
            'Age_limit'=>'|string|',
            'Year'=>'required|string|',
            'Genres'=>'required|string|',
            'Dubbers'=>'required|string|',
            'Timer'=>'required|string|',
        ];
    }
}
