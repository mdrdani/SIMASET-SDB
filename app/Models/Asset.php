<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Asset extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'categories_id','kode','name','ukuran','foto'
    ];

    protected $hidden = [

    ];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function asset_histories()
    {
        return $this->hasMany(AssetHistory::class);
    }

    public function asset_seris()
    {
        return $this->hasMany(AssetSeri::class, 'assets_id',);
    }
}
