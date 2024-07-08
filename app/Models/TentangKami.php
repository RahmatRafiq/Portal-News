<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangKami extends Model
{
    use HasFactory;

    protected $table = 'tentang_kami';
    protected $fillable = [
        'judul',
        'deskripsi',
        'alamat',
        'gambar',
        'telepon',
        'email',
        'instagram',
        'facebook',
        'youtube',
        'twitter',

    ];

}
