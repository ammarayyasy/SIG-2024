<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $table = 'provinces';

    protected $guarded = ['id'];

    protected $dates = ['created_at', 'updated_at'];

    public function regencies() {
        return $this->hasMany(Regency::class);
    }

    public function dataProvinces() {
        return $this->hasMany(DataProvince::class);
    }
}
