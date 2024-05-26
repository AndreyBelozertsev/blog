<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Domain\Product\Models\TgTarif;
use Domain\Order\Models\PaymentRegistry;
use Services\Telegraph\Models\TelegraphChat;
use App\Http\Requests\ConsultationFormRequest;
use Services\Telegraph\Facade\TelegraphCustom;

class HomeController extends Controller
{
    public function index(){

        if(!$payment_registry = PaymentRegistry::where('invoice_payload', '880933d4-ad71-4201-873a-4f4d20282fd8')
        //->where('status', false)
        ->with('client')
        ->with('tarif')
        ->first()   )
    {
        return;
    }

        dump($payment_registry);

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

    public function transaction()
    {
        $chat=TelegraphChat::first();
        dump($chat->client);
        //transaction
        $subscription = $chat->client->subscriptions()->activeItem()->first();
        // if($subscription){
        //     $chat->client->subscriptions()->create([
        //         'status' => 1,
        //         'expaire_at' => Carbon::parse($subscription->expaire_at)->addDays(2)
        //     ]);
        //     $subscription->update(['status' => 0]);
        // }else{
        //     $chat->client->subscriptions()->create([
        //         'status' => 1,
        //         'expaire_at' => Carbon::parse(NOW())->addDays(2)
        //     ]);
        // }
        //endtransaction
        // if($subscription = $this->chat->client()->subscriptions())
        // $chat->client->subscriptions()->create([
        //     'status' => 1,
        //     'expaire_at' => Carbon::parse(NOW())->addDays()
        // ]);
        $date = Carbon::parse(NOW())->addDays(30);

    
    }
}
