<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course; // Pastikan untuk mengimpor model Course
use App\Models\Writer; // Pastikan untuk mengimpor model Writer

class Article extends Model
{
    use HasFactory;

    protected $table = 'article'; // Menetapkan nama tabel
    protected $primaryKey = 'article_id'; // Adjust with the correct column name


    // Relasi dengan Course
    public function course()
{
    return $this->belongsTo(Course::class, 'course_id','course_id');
}

    // Relasi dengan Writer
    public function writer()
    {
        return $this->belongsTo(Writer::class, 'writer_id','writer_id'); // Menghubungkan ke model Writer
    }

    public function category()
    {
        return $this->hasOneThrough(Category::class, Course::class, 'course_id', 'category_id', 'id', 'category_id');
    }
}
