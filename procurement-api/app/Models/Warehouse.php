<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'warehouse';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_karyawan', 'lokasi'];

    public function rak()
    {
        return $this->hasMany('App\Models\RakPenyimpanan', 'id', 'id_rak');
    }
}
