<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Article; // Pastikan untuk mengimpor model Article

class Writer extends Model
{
    use HasFactory;

    protected $table = 'writer'; // Menetapkan nama tabel

    // Relasi dengan Article
    public function articles()
    {
        return $this->hasMany(Article::class, 'writer_id'); // Menghubungkan ke model Article
    }
}
