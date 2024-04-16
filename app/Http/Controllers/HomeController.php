<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use Domain\Product\Models\ServiceCategory;
use App\Http\Requests\ConsultationFormRequest;
use Services\Telegraph\Facade\TelegraphCustom;



class HomeController extends Controller
{
    public function index(){
        return view('page.home');
    }

    public function sendForm(ConsultationFormRequest $request)
    {

        //$action(new NewCustomerDTO($request->validated()));
        echo 123;
        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }
}
