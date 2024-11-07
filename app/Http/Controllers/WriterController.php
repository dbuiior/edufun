<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all(); // Pastikan variabel ini bernama $writers
        return view('writers', compact('writers')); // Nama variabel di compact harus 'writers'
    }
}
