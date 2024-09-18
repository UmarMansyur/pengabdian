<?php

use App\Models\Visitor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // ambil data dari api mooodle
    Visitor::create([
        'count' => 1
    ]);

    $all_visitor = DB::table('visitors')->where('created_at', '>=', now()->subDay())->sum('count');
    return view('welcome', compact('all_visitor'));
});

Route::get('/about-us', function () {
    return view('about');
});