<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class deta_transaksi extends Model
{
    use HasFactory;
    protected $guard = 'detail_transaksi';
    protected $table = 'detail_transaksi';
    protected $fillable = [
        'qty', 'keterangan'
    ];
    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, 'id_transaksi');
    }
    public function paket()
    {
        return $this->belongsTo(Paket::class, 'id_paket');
    }
}
