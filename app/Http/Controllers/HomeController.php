<?php
namespace App\Http\Controllers;

use App\Models\Article; // Import model Article
use App\Models\Category;
use App\Models\Course;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil category_id berdasarkan category_name
        $articles = Article::with('writer', 'course','category')
            ->whereExists(function ($query) {
                $query->select(DB::raw(1))
                    ->from('course')
                    ->whereRaw('article.course_id = course.course_id') // Ganti course.id dengan course.course_id
                    ->whereIn('course.category_id', [1, 2]); // Menyesuaikan dengan category_id di tabel course
            })
            ->get();

        // Mengirim data ke view
        return view('homePage', compact('articles'));  
    }

  
}
