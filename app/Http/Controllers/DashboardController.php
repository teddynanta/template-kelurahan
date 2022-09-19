<?php

namespace App\Http\Controllers;

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
            'title' => 'Berita',
            'active' => 'berita'
        ]);
    }

    public function createBerita()
    {
        return view('dashboard.berita.create', [
            'title' => 'Tambah Berita',
            'active' => 'berita'
        ]);
    }

    public function showBerita()
    {
        return view('dashboard.berita.show', [
            'title' => 'Detail Berita',
            'active' => 'berita'
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
