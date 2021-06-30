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

    public function sublokasi()
    {
        return $this->belongsTo(SubLokasi::class);
    }

}
