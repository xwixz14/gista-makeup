<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataReservasi extends Model
{
    use HasFactory;
    protected $table = 'pemesanan';
    protected $fillable = ['custumer', 'email', 'no_hp', 'paket', 'harga', 'tanggal_reservasi'];
}