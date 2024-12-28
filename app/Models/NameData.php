<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NameData extends Model
{
    use HasFactory;
    protected $table = 'name_data';
    protected $guarded = ['id'];

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function dataProvinces() {
        return $this->hasMany(DataProvince::class);
    }

    public function dataKabKotas() {
        return $this->hasMany(DataRegency::class);
    }
}
