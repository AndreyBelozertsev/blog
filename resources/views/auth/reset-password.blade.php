@extends('layouts.app')

@section('content')
<x-forms.auth-forms 
	title="Восстановление пароля" 
	action="{{ route('password.reset.handle') }}"
	method="POST"
>
    @csrf
    <input type="hidden" name="token" value="{{ $token }}">

    <x-forms.text-input 
        type="email" 
        name="email" 
        placeholder="Email" 
        required="true"
		value="{{ request()->get('email') }}"
        :isError="$errors->has('email')"
    />
    @error('email')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
    @enderror

    <x-forms.text-input 
        type="password" 
        name="password" 
        placeholder="Пароль" 
        required="true" 
        :isError="$errors->has('password')"
    />

    @error('password')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
    @enderror

    <x-forms.text-input 
        type="password" 
        name="password_confirmation" 
        placeholder="Повторите пароль" 
        required="true" 
        :isError="$errors->has('password_confirmation')"
    />

    @error('password_confirmation')
        <x-forms.error>
            {{ $message }}
        </x-forms.error>
    @enderror

    <x-forms.primary-button>Обновить пароль</x-forms.primary-button>
    <x-slot:buttons></x-slot:buttons>    
</x-forms.auth-forms>
@endsection 