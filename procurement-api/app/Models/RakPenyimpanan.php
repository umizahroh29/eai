<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RakPenyimpanan extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'rak_penyimpanan';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_warehouse', 'tipe_rak', 'jumlah_barang'];

    public function warehouse()
    {
        return $this->belongsTo('App\Models\Warehouse', 'id', 'id_warehouse');
    }

    public function barang()
    {
        return $this->hasMany('App\Models\Barang', 'id', 'id_barang');
    }
}
