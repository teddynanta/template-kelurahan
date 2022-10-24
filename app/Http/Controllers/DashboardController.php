<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index', [
            'title' => 'Dashboard',
            'active' => 'dashboard'
        ]);
    }

    public function indexBerita()
    {
        return view('dashboard.berita.index', [
            'title' => 'Dashboard',
            'active' => 'Dashboard',
            'posts' => Post::where('author_id', auth()->user()->id)->get()
        ]);
    }

    public function createBerita()
    {
        return view('dashboard.berita.create', [
            'title' => 'Tambah Berita',
            'active' => 'berita'
        ]);
    }

    public function showBerita(Post $post)
    {
        return view('dashboard.berita.show', [
            'title' => 'Detail Berita',
            'active' => 'berita',
            'post' => $post
        ]);
    }

    public function draftBerita()
    {
        return view('dashboard.berita.draft', [
            'title' => 'Draft Berita',
            'active' => 'berita'
        ]);
    }
}
