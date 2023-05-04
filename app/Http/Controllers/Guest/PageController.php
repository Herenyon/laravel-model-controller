<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movies;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movies::all();

        return view('welcome', compact('movies'));
    }
    public function show($id)
    {
        $movie = Movies::find($id);
        return view('details', compact('movie'));
    }
}
