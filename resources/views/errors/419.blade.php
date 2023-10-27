@extends('layouts.app')
@section('content')
<main class="pt-4 md:pt-36  xl:pt-48">
    <section class="pb-28">
        <div class="container px-6 pb-8">
            <div class="mb-4">
                <h1 class="text-3xl">Ключ безопасности устарел</h1>
                <p>Попробуйте обновить страницу!</p>
            </div>
        </div>
        <div class="container px-6 pb-8">
            <div class="flex flex-col">
                <div>
                    <div class="flex py-6">
                        <a href="{{ route('home') }}" class="bg-accent lg:bg-onAccent text-brand py-4 px-8 rounded-2xl block text-center w-full md:w-auto">Вернуться на главную</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection