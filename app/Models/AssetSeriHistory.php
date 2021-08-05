<?php

namespace App\Models;

use App\Models\AssetSeri;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
