<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category; // Pastikan untuk mengimpor model Category
use App\Models\Article; // Pastikan untuk mengimpor model Article

class Course extends Model
{
    use HasFactory;

    protected $table = 'course'; // Menetapkan nama tabel

    // Relasi dengan Category
    public function category()
{
    return $this->belongsTo(Category::class, 'category_id','category_id');
}

    // Relasi dengan Article
    public function articles()
    {
        return $this->hasMany(Article::class, 'course_id'); // Menghubungkan ke model Article
    }
}
