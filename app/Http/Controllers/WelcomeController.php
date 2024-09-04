<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
public function hello() {
 return "Hello World";
}
public function index() {
    return "Selamat Datang";
   }
   public function about() {
    return 'Muhammad Toyfur, 2241760126';
   }
   public function articles($Id) {
    return 'Halaman Ke'.$Id;
   }
   public function greeting(){
    return view('blog.hello')
    ->with('name','ZIDAN')
    ->with('occupation','Astronaut');
    }
}


