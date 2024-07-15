<?php

namespace App\Http\Controllers;



use Carbon\Carbon;
use App\Jobs\EndSubscriptionJob;
use Domain\Client\Models\Client;
use App\Http\Requests\ConsultationFormRequest;
use Services\Telegraph\Facade\TelegraphCustom;

class HomeController extends Controller
{
    public function index(){

        $date = Carbon::today()->addDays(-1)->toDateString();
        $clients = Client::with('subscriptions')->whereHas('subscriptions', function($q) use($date) {
            $q->active()
            ->whereDate('expaire_at', $date);
        })->get();  
      
        $clients->each(function($item, $key){
            $item->notify(new \App\Notifications\EndSubscription("Ваша подписка окончена.\nОтправится в новое путешествие:"));
            EndSubscriptionJob::dispatch($item);
        });
        return view('page.home');
    }

    public function sendForm(ConsultationFormRequest $request)
    {
        //$action(new NewCustomerDTO($request->validated()));

        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }

}
