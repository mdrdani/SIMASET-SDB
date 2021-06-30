<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SubLokasi extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name','alias','luas','status','lokasis_id'
    ];

    protected $hidden = [

    ];

    public function lokasis()
    {
        return $this->belongsTo(Lokasi::class);
    }
}
