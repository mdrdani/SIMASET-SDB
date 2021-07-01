<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AssetHistory extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'assets_id','users_id','method'
    ];

    protected $hidden = [

    ];

    public function assets()
    {
        return $this->belongsTo(Asset::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
