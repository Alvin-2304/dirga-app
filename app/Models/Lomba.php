<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lomba extends Model
{
    protected $fillable = [
        'user_id', 'nama', 'kategori', 'deskripsi', 'poster',
        'tanggal_mulai', 'deadline', 'tanggal_pengumuman',
        'juara_1', 'juara_2', 'juara_3', 'total_hadiah',
        'biaya', 'ketentuan', 'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}