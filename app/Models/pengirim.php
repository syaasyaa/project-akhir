<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pengirim extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'noHp',
        'alamat',
        
        
    ];
}
