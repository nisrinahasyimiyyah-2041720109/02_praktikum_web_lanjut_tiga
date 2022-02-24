<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompanyProfileController extends Controller
{
    public function index(){
        return redirect('https://www.educastudio.com/');
    }

    public function cat1(){
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    }

    public function cat2(){
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    }

    public function cat3(){
        return redirect('https://www.educastudio.com/category/riri-story-books');
    }

    public function cat4(){
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    }

    public function news1($param) {
        return redirect('https://www.educastudio.com/news');
    }

    public function news2($param) {
        return redirect('https://www.educastudio.com/news/educa-studio-berbagi-untuk-warga-sekitar-terdampak-covid-19');
    }

    public function program1(){
        return redirect('https://www.educastudio.com/program/karir');
    }

    public function program2(){
        return redirect('https://www.educastudio.com/program/magang');
    }

    public function program3(){
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    }

    public function aboutUs(){
        return redirect('https://www.educastudio.com/about-us');
    }
}
