<?php
namespace App\Http\Controler;

use Illuminate\Request;

class Tuturial extends Controller
{

   public function show(Request $request)
   {
      return view('welcome');
   }
}