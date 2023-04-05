<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Buku as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Buku extends Model
{
    protected $table="bukus"; // Eloquent akan membuat model buku menyimpan record di tabel mahasiswas
    public $timestamps= false;
    protected $primaryKey = 'kode_buku'; // Memanggil isi DB Dengan primarykey
    /**
     * The attributes that are mass assignable.
     * *
    * @var array
    */
    protected $fillable = [
        'kode_buku',
        'judul',
        'pengarang',
        'jenis_buku',
        'harga',
        'qty',
    ];
}
