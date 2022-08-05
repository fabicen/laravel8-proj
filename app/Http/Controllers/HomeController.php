<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        return view(view:"homePage.index");
    }

    public function test($id,$name)
    {
      return view("homePage.test",["id"=>$id, "name"=>$name]);
       /* echo "girilen numara: ", $id;
        echo "<br>girilen isim: ", $name;
        */
    }
    public function aboutus(){
        return view(view:"homePage.aboutus");
    }
}
