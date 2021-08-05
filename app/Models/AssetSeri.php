<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetSeri extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'assets_id', 
        'nomor_seri',
        'nomor_pembelian',
        'sub_lokasi_duas_id',
        'sumber_danas_id',
        'departements_id',
        'merk_judul',
        'harga_beli',
        'harga_sekarang',
        'harga_minimum',
        'nilai_penyusutan',
        'kondisi',
        'tanggal_beli',
        'sn'
    ];

    protected $hidden = [

    ];
    
    public function assets()
    {
        return $this->belongsTo(Asset::class, 'assets_id');
    }

    public function sub_lokasi_duas()
    {
        return $this->belongsTo(SubLokasiDua::class);
    }

    public function sumber_danas()
    {
        return $this->belongsTo(SumberDana::class);
    }

    public function departements()
    {
        return $this->belongsTo(Departement::class);
    }

    public function asset_seri_histories()
    {
        return $this->hasMany(AssetSeriHistory::class);
    }
}
