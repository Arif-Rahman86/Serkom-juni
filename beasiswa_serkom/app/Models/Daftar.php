<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftar extends Model
{
    use HasFactory;


    protected $table = 'daftar';

    // untuk menentukan data mana saja yang fillable
    protected $fillable = [
        'nama',
        'email',
        'no_hp',
        'semester',
        'ipk',
        'pilihanbeasiswa',
        'berkas',
        'status',
    ];
    
}
