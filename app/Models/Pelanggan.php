<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pelanggan extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $primaryKey = 'id';
    protected $fillable = [
        'id',
        'nama_pelanggan',
        'alamat',
        'no_hp',
        'keterangan_pelanggan',
        'link_history',
        'user_id'
    ];

    public function delete()
    {
        parent::delete();

        $max_id = DB::table($this->table)->max('id');
        DB::statement('ALTER TABLE ' . $this->table . ' AUTO_INCREMENT = ' . ($max_id + 1));
        DB::table($this->table)->where('id', '>', $this->id)->update(['id' => DB::raw('id - 1')]);
    }

    public function domain()
    {
        return $this->hasMany(Domain::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
