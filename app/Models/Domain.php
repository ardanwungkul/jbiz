<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Domain extends Model
{
    use HasFactory;
    protected $table = 'domains';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_domain',
        'epp_code',
        'keterangan_domain',
        'lokasi_domain',
        'tanggal_mulai',
        'tanggal_expired',
        'status_domain',
        'hosting',
        'kapasitas_hosting',
        'tanggal_hosting',
        'lokasi_hosting',
        'paket_website',
        'jumlah_email',
        'pelanggan_id',
        'nameserver_id',
        'slug',
        'hidden_epp'
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class);
    }
    public function nameserver()
    {
        return $this->belongsTo(Nameserver::class);
    }
}
