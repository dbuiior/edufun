<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function dataScience()
    {
        // Ambil artikel berdasarkan course_id yang sesuai
        $articles = Article::whereHas('course', function ($query) {
            // Menggunakan 'course_id' yang benar dan memberikan array ID yang valid
            $query->whereIn('category_id', [1]); // Misalnya ID kursus Data Science
        })->get();
        
        // Kirim data ke view
        return view('dataScience', compact('articles'));
    }

    public function networkSecurity()
    {
        // Ambil artikel berdasarkan course_id untuk kategori Network Security
        $articles = Article::whereHas('course', function ($query) {
            // Menggunakan 'course_id' yang benar untuk Network Security
            $query->whereIn('category_id', [2]); // Misalnya ID kursus Network Security
        })->get();

        // Kirim data ke view
        
        return view('networkSecurity', compact('articles'));
    }

    public function writerArticles($writer_id)
    {
        // Ambil artikel yang ditulis oleh penulis dengan `writer_id` yang diterima
        $articles = Article::where('writer_id', $writer_id)->get();
        
        // Kirim data artikel ke view
        return view('writerDetails', compact('articles'));
    }

}
