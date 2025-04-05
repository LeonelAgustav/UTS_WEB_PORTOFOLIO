<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    use HasFactory;

    // Nama tabel yang terkait
    protected $table = 'certificates';

    // Primary Key
    protected $primaryKey = 'certi_id';

    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'image',
        'certi_name',
        'publisher',
        'month',
    ];

    // Jika tidak ada timestamps (created_at dan updated_at), Anda bisa menonaktifkannya
    public $timestamps = true;
}