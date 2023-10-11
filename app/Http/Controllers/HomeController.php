<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Domain\Product\Models\ServiceCategory;
use Services\Telegraph\Facade\TelegraphCustom;



class HomeController extends Controller
{
    public function index(){
        return view('page.home');
    }
}
