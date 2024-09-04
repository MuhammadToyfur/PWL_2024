<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function hello() {
        return "Selamat Datang DiKampus POLINEMA";
       }
       public function index() {
           return "Selamat Datang POLINEMA";
          }
          public function about() {
           return 'POLINEMA';
          }
          public function articles($Id) {
            return 'Halaman Ke'.$Id;
     }
}
