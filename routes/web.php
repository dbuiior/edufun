<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\WriterController;
use App\Http\Controllers\PageController;



// Route::get('/article', [ArticleController::class, 'index']);

Route::get('/', [HomeController::class, 'index'])->name('homePage');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::get('/writers', [WriterController::class, 'index'])->name('writers');
Route::get('/popular', [CategoryController::class, 'popular'])->name('popular');

// Route::get('/course/category/${category_id}',[CourseController::class,'showByCategory'])->name('course.category');



// routes/web.php
Route::get('/category/dataScience', [PageController::class, 'dataScience'])->name('category.dataScience'); 
Route::get('/category/networkSecurity', [PageController::class, 'networkSecurity'])->name('category.networkSecurity');
 

// Route::get('/popular',function(){
//     return view('popular');
// })->name('popular');

// Route::get('/category/{id}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/dataScience',function(){
    return view('dataScience');
})->name('dataScience');

Route::get('/networkSecurity',function(){
    return view('networkSecurity');
})->name('networkSecurity');

Route::get('/writerDetails',function(){
    return view('writerDetails');
})->name('writerDetails');


Route::get('/details',function(){
    return view('details');
})->name('details');

Route::get('/writers/{writer_id}/articles', [PageController::class, 'writerArticles'])->name('writers.articles');

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('details.show');


// Route untuk kategori Data Science
// Route::get('/courses/data-science', [CourseController::class, 'dataScience'])->name('course.dataScience');


// Route::get('/courses/{id}', [CourseController::class, 'show'])->name('courses.show');
// Route::get('/course/network-security', [CourseController::class, 'networkSecurity'])->name('course.networkSecurity');



Route::get('/aboutUs',function(){
    return view('aboutUs');
})->name('aboutUs');










