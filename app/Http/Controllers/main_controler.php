<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class main_controler extends Controller
{
    public function get_info_index (){
        return view("/castom_views/main_view");
    // return view("/welcome");
    }
}
