<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'kode' => 'required|string|min:1|unique:assets,kode',
            'name' => 'required|string|min:2',
            'ukuran' => 'nullable|string',
            'foto' => 'nullable|mimes:png,jpg,jpeg|max:3024'
        ];
    }
}
