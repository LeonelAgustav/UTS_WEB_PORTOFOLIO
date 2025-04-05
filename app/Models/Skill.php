<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    use HasFactory;

    // Nama tabel yang terkait
    protected $table = 'skills';

    // Primary Key
    protected $primaryKey = 'skill_id';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'skill_name',
        'level',
        'type',
    ];

    // Jika tidak ada timestamps (created_at dan updated_at), Anda bisa menonaktifkannya
    public $timestamps = true;
}