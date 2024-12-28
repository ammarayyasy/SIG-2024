<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataRegency extends Model
{
    use HasFactory;
    protected $table = 'data_regencies';
    protected $guarded = ['id'];

    public function regency() {
        return $this->belongsTo(Regency::class);
    }

    public function nameData() {
        return $this->belongsTo(NameData::class);
    }
}
