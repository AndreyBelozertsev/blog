<?php

namespace App\Http\Controllers;

use Domain\Customer\DTOs\NewCustomerDTO;
use App\Http\Requests\ConsultationFormRequest;
use Domain\Customer\Contracts\NewCustomerContract;

class HomeController extends Controller
{
    public function index(){

        return view('page.home');
    }

    public function sendForm(ConsultationFormRequest $request, NewCustomerContract $action)
    {
        $action(new NewCustomerDTO($request->validated()));

        return response()->json(['success'=>'Спасибо!</br>В ближайшее время мы свяжемся с вами'],200);
    }

}
