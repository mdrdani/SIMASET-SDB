<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubLokasiDua extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','alias','luas','status','sub_lokasis_id'
    ];

    protected $hidden = [

    ];

    public function sublokasis()
    {
        return $this->belongsTo(SubLokasi::class);
    }

    public function asset_seris()
    {
        return $this->hasMany(AssetSeri::class, 'sub_lokasi_duas_id');
    }

    public function asset_seri_histories()
    {
        return $this->hasMany(AssetSeriHistory::class);
    }
}
