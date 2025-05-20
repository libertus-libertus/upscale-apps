<?php

namespace App\Http\Controllers;

#use Illuminate\Http\Request;

class HomePage extends Controller
{
    /**
     * Menampilkan halaman home
     */ 
    public function home() {
        return view('home');
    }

    /**
     * Menampilkan halaman for-business
     */ 
    public function business() {
        return view('business');
    }

    /**
     * Menampilkan halaman for-talent
     */ 
    public function talent() {
        return view('talent');
    }

    /**
     * Menampilkan halaman jobs
     */ 
    public function jobs() {
        return view('jobs');
    }

     /**
     * Menampilkan halaman faq
     */ 
    public function faq() {
        return view('faq');
    }
}
