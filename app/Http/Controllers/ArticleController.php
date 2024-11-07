<?php
namespace App\Http\Controllers;

use App\Models\Article; // Pastikan untuk mengimpor model Article
use Illuminate\Http\Request;


class ArticleController extends Controller
{
    public function index()
    {
        // Mengambil semua artikel beserta relasi writer dan course (gunakan with() jika ingin memuat relasi)
        $articles = Article::with('writer', 'course')->get(); // Mengambil artikel dan relasi terkait
    
        // Mengirim data ke view
        return view('homePage', compact('articles'));
    }

    public function show($id)
    {
    // Find the article by its ID
    $articles = Article::findOrFail($id);

    // Return the view with the article data
    return view('details', compact('articles'));
    }

}
