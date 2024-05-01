<?php

namespace App\Http\Controllers;


use Illuminate\Support\Str;
use Domain\Client\Models\Client;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Storage;
use DefStudio\Telegraph\Keyboard\Keyboard;
use Domain\Product\Models\ServiceCategory;
use Services\Telegraph\Models\TelegraphChat;
use App\Http\Requests\ConsultationFormRequest;
use Services\Telegraph\Facade\TelegraphCustom;



class HomeController extends Controller
{
    public function index(){
        $client = Client::where('id', 1)->whereHas('subscriptions', function($q){
            $q->activeItem(); 
        })
        ->with('chat')
        ->first();

        if($client){
            //$telegraphChat = TelegraphChat::where('chat_id', $client->chat)->first();
            dump($client);

        }
        return view('page.home');
    }

    public function sendForm(ConsultationFormRequest $request)
    {

        //$action(new NewCustomerDTO($request->validated()));

        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }
}
