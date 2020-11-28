<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RequestBarang extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'request_barang';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id_vendor', 'id_karyawan', 'id_barang', 'kuantitas', 'harga', 'disetujui'];

    public function vendor()
    {
        return $this->belongsTo('App\Models\Vendor', 'id', 'id_vendor');
    }

    public function barang()
    {
        return $this->belongsTo('App\Models\Barang', 'id', 'id_barang');
    }
}
