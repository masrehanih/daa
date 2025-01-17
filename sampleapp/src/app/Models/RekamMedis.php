<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RekamMedis extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'deskripsi',
        'tanggal_rekam',
    ];

    public function pasien()
    {
        return $this->belongsTo(Pasien::class);
    }
}
