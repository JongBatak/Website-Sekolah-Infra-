<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Galeri;

class GaleriController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $galeris = Galeri::with('category')->latest()->get();

        return view('pages.galeri', compact('categories', 'galeris'));
    }
}
