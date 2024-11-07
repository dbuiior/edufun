<?php
namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel beserta relasi writer, category, dan course
        $articles = Article::with('writer', 'category', 'course')->get(); 
        
        return view('category', compact('articles')); 
    }

    public function popular()
    {
        // Mengambil semua artikel beserta relasi writer, category, dan course
        $articles = Article::with('writer', 'category', 'course')->get(); 
        
        return view('popular', compact('articles')); 
    }
}
