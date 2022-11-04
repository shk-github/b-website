<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

    $articles = (object)[
        (object)[
            'link' => '#',
            'imgPrev' => 'img_blog_1.jpg',
            'title' => 'Epic project',
            'desc' => 'Awesome project i did in 2018. I was big experience for me'
        ],
        (object)[
            'link' => '#',
            'imgPrev' => 'img_blog_2.jpg',
            'title' => 'Anthore work i did',
            'desc' => 'Awesome project i did in 2018. I was big experience for me'
        ],
        (object)[
            'link' => '#',
            'imgPrev' => 'img_blog_3.jpg',
            'title' => 'Rebrand of this company',
            'desc' => 'Awesome project i did in 2018. I was big experience for me'
        ]
    ];

    return view('homepage.homepage')
        ->with('articles', $articles);
});
