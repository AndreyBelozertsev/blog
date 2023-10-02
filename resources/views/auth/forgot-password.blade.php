@extends('layouts.app')

@section('content')
<x-forms.auth-forms 
	title="Забыли пароль?" 
	action="{{ route('password.forgot.handle') }}"
	method="POST"
>
    @csrf
    <x-forms.text-input 
        type="email" 
        name="email" 
        placeholder="Email" 
        required="true"
        :isError="$errors->has('email')"
    />
    @error('email')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
    @enderror


    <x-forms.primary-button>Отправить</x-forms.primary-button>
 
    <x-slot:buttons>
        <div class="space-y-3 mt-5">
            <div class="text-xxs md:text-xs"><a href="{{ route('login') }}" class="text-white hover:text-white/70 font-bold">Вспомнил пароль</a></div>
        </div>
    </x-slot:buttons>    

</x-forms.auth-forms>
@endsection