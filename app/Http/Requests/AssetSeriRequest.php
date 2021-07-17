<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AssetSeriRequest extends FormRequest
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
            'nomor_seri' => 'required|min:1|unique:asset_seris,nomor_seri',
            'nomor_pembelian' => 'nullable',
            'sub_lokasi_duas_id' => 'required',
            'sumber_danas_id' => 'required',
            'departements_id' => 'required',
            'merk_judul' => 'required|string|min:1',
            'harga_beli' => 'nullable|numeric',
            'harga_sekarang' => 'nullable|numeric',
            'harga_minimum' => 'nullable|numeric',
            'nilai_penyusutan' => 'nullable|numeric',
            'kondisi' => 'required',
            'tanggal_beli' => 'nullable|date',
            'sn' => 'required|string|min:1|unique:asset_seris,sn'
        ];
    }
}
