<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'alamat',
        'telepon',
        'posisi_id'
    ];

    public function posisi()
    {
        return $this->belongsTo(Position::class, 'positions_id');
    }
}
