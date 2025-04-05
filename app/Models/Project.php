<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // Nama tabel yang terkait
    protected $table = 'projects';

    // Primary Key
    protected $primaryKey = 'project_id';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'project_name',
        'deskripsi',
        'bahasa',
        'url',
    ];

    // Jika tidak ada timestamps (created_at dan updated_at), Anda bisa menonaktifkannya
    public $timestamps = true;
}