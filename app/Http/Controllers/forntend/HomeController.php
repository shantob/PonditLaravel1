<?php

namespace App\Http\Controllers\Forntend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index()
   {
    return view("forntend/index");
   }
   public function productlist()
   {
    return view("forntend/productlist");
   }
   public function contact()
   {
    return view("forntend/contact");
   }
   public function about()
   {
    return view("forntend/about");
   }
   public function addtocard()
   {
    return view("forntend/addtocard");
   }
}
