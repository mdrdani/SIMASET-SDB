<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetSeriHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'assets_seris_id','users_id','method'
    ];

    protected $hidden = [

    ];

    public function asset_seris()
    {
        return $this->belongsTo(AssetSeri::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function sub_lokasi_duas()
    {
        return $this->belongsTo(SubLokasiDua::class);
    }
}
