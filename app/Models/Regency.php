<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regency extends Model
{
    use HasFactory;
    protected $table = 'regencies';
    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    function province() {
        return $this->belongsTo(Province::class);
    }

    public function dataKabKotas() {
        return $this->hasMany(DataRegency::class);
    }
}
