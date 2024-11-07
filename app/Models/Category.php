<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Course; // Pastikan untuk mengimpor model Course

class Category extends Model
{
    use HasFactory;

    protected $table = 'category'; // Menetapkan nama tabel

    // Relasi dengan Course
    public function courses()
    {
        return $this->hasMany(Course::class, 'category_id'); // Menghubungkan ke model Course
    }
}
