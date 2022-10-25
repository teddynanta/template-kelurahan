<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(Post $post)
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard',
            'count' => $post->count()
        ]);
    }

    public function indexBerita()
    {
        // return $post;
    }

    public function createBerita()
    {
        //
    }

    public function showBerita(Post $post)
    {
        //
    }

    public function draft()
    {
        return view('dashboard.berita.draft', [
            'title' => 'Draft Berita',
            'active' => 'berita'
        ]);
    }
}
