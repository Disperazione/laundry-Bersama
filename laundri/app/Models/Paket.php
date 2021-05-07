<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Paket extends Model
{
    use HasFactory;
    protected $table = 'paket';
    protected $fillable = [
        'jenis', 'nama_paket', 'harga'
    ];

    public function detail_transaksi()
    {
        return $this->hasMany(deta_transaksi::class, 'id_paket','id');
    }

    public function outlet()
    {
        return $this->belongsTo(Outlet::class, 'id_outlet');
    }
}
