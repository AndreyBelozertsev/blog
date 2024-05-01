<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Domain\Client\Models\Client;
use Services\Telegraph\Models\TelegraphChat;
use App\Http\Requests\ConsultationFormRequest;

class HomeController extends Controller
{
    public function index(){
        $chat=TelegraphChat::first();
        dump($chat->client);
        //transaction
        $subscription = $chat->client->subscriptions()->activeItem()->first();
        $chat->client->subscriptions()->create([
            'status' => 1,
            'expaire_at' => Carbon::parse($subscription->expaire_at)->addDays(2)
        ]);
        $subscription->update(['status' => 0]);
        dump($subscription);
        //endtransaction
        // if($subscription = $this->chat->client()->subscriptions())

        return view('page.home');
    }

    public function sendForm(ConsultationFormRequest $request)
    {

        //$action(new NewCustomerDTO($request->validated()));

        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }
}
