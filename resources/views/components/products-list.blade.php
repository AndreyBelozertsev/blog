@props([
    'col_start_2' => [4,13,22,31,40],
    'col_start_1' => [8,17,26,35,44],
    'hidden',
    'tab_id',
    'title'

])

@php
    $products = array();
    for ($i = 0; $i < 20; ++$i) {
        $products[] = ['title' =>  "$title $i"];
    }
@endphp


<div data-tab-content="{{ $tab_id }}" class="tab-content-block grid xs:grid-cols-2 lg:grid-cols-3 pb-24 gap-6 {{ $hidden}}">
    @foreach ($products as $product)
        <div class="@if (in_array($loop->iteration, $col_start_2))
            col-start-2
        @elseif (in_array($loop->iteration, $col_start_1))
            col-start-1
        @endif"
        >
            <div class="pb-4">
                <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
            </div>
            <div class="pb-4 md:pb-6 lg:pb-10">
                <p class="text-base">{{ $product['title'] }}</p>
            </div>
            <div class="grid lg:grid-cols-3">
                <a class="ff-Montserrat text-sm md:text-base px-4 py-2 lg:col-span-2 border flex justify-between order-2 lg:order-1" href="https://www.wildberries.ru/">Перейти в магазин
                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                        <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                        <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <span class="text-sm lg:text-lg 2xl:text-xl lg:justify-self-end lg:self-end order-1 lg:order-2 pb-2 lg:pb-0">3 000 руб.</span>
            </div>
        </div>
    @endforeach
</div>