<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function hello() {
        return "Selamat Datang DiKampus POLINEMA";
       }
       public function index() {
           return "Selamat Datang ";
          }
          public function about() {
           return 'POLINEMA';
          }
          public function articles($Id) {
            return 'Halaman Ke'.$Id;
          }
}
