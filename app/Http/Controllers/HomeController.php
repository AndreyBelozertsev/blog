<?php

namespace App\Http\Controllers;


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

        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }

    public function banMember()
    {
        TelegraphCustom::banChannelMember( -1001570080663, 259548170)->send();
        TelegraphCustom::unbanChannelMember( -1001570080663, 259548170)->send();
    }
}
