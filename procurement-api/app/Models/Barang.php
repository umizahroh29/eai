<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'barang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vendor', 'id_rak', 'nama', 'tipe', 'kuantitas', 'harga'];

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor', 'id_vendor');
    }

    public function rak()
    {
        return $this->belongsTo('App\Models\RakPenyimpanan', 'id_rak');
    }
}
