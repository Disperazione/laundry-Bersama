<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;
    protected $table = 'member';
    protected $fillable = [
        'nama', 'alamat', 'jenis_kelamin', 'tlp'
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'id_member','id');
    }
}
