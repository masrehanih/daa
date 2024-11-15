<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama', 
        'email', 
        'tanggal_lahir', 
        'telepon', 
        'alamat', 
        'status'
    ];

    public function rekamMedis()
    {
        return $this->hasMany(RekamMedis::class);
    }

    public static function boot()
    {
        parent::boot();

        static::updating(function ($pasien) {
            if (!in_array($pasien->status, ['pending', 'approved', 'rejected'])) {
                throw new \Exception("Status pasien tidak valid");
            }
        });
    }
}
