@extends('layouts.app')

@section('content')
    <main>
        <section class="pb-44">
            <div class="container">
                <div class="grid grid-cols-5 gap-8">
                    <div class="pt-24 col-span-3">
                        <p class="text-6xl font-light relative leading-tight">ОФИЦИАЛЬНЫЙ САЙТ<span class="absolute pl-4 opacity-50 text-2xl -top-4">@papazzhuk</span></p>
                        <p class="text-6xl font-medium text-right relative leading-tight">АЛЕКСАНДРА<br><span class="absolute -right-24">ЖУКА<span></p>
                    </div>
                    <div class="pt-24 col-span-2 row-span-2">
                        <img src="{{ asset('template/images/1-1.png') }}" alt="">
                    </div>
                    <div class="pt-12 col-span-3">
                        <div class="w-1/2 flex content-start items-center pb-12 gap-4">
                            <div class="text-opacity-50 w-36 h-36 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                                <p class="text-base text-center font-thin">Моряк</span></br><span class="font-bold">№1</span> в соцсетях</p>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-20 h-20 flex justify-center items-center">
                                    <img src="{{ asset('template/images/1-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-20 h-20 flex justify-center items-center">
                                    <img src="{{ asset('template/images/1-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="grid grid-cols-2">
                            <div class="grid gap-2">
                                <div>
                                    <a href="#">
                                        <img src="{{ asset('template/images/social-1.svg') }}" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="{{ asset('template/images/social-2.svg') }}" alt="">
                                    </a>
                                </div>
                                <div>
                                    <a href="#">
                                        <img src="{{ asset('template/images/social-3.svg') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div>
                                <div class="pb-10">
                                    <p class="text-lg">Создал полное руководство для тех, кто хочет стать моряком или больше узнать о профессии</p>
                                </div>
                                <div>
                                    <a class="ff-Montserrat text-center text-lg py-6 bg-accent leading-none px-4 justify-between" href="#"><span class="pr-4">Получить видеоруководство</span>
                                        <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M15.9687 11.1881L15.9687 4.03116L12.3349 7.68389C13.6616 6.35013 15.9389 7.27978 15.9533 9.16098L15.9687 11.1881Z" fill="white"/>
                                            <path d="M15.9687 4.03116H11.1974H8.81176L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389L15.9687 4.03116Z" fill="white"/>
                                            <path d="M5.55424 14.4456L12.3349 7.68389M15.9687 4.03116L11.1974 4.03116L8.81176 4.03116M15.9687 4.03116L15.9687 11.1881M15.9687 4.03116L12.3349 7.68389M6.42612 4.03116L8.81176 4.03116M15.9687 13.5737L15.9687 11.1881M8.81176 4.03116L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389V7.68389M15.9687 11.1881L15.9533 9.16098C15.9389 7.27978 13.6616 6.35013 12.3349 7.68389V7.68389" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-24">
            <div class="container">
                <div class="pb-20">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Обо мне</h2>
                </div>
                <div class="flex justify-end pb-28">
                    <p style="text-indent:2em" class="text-3xl uppercase">Моря и океаны — это не просто водные просторы,<br>это <span class="opacity-50">настоящие чудеса природы</span>, и я приглашаю вас<br>отправиться со мной в эти <span class="opacity-50">удивительные путешествия</span></p>
                </div>
                <div class="grid grid-cols-4 pb-28">
                    <div class="col-span-2">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">> <span class="text-8xl">4</span> млн</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">общее количество подписчиков в </span>Tik-Tok, Instagram <span class="opacity-50">и</span> YouTube</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-8xl text-center">45</p>
                                <p class="text-base text-center font-thin px-4">стран мира<span class="opacity-50"> посетил за время работы в судовых компаниях</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                            <p class="text-4xl text-center"><span class="text-8xl">18</span> лет</p>
                                <p class="text-base text-center font-thin px-4">стаж работы<span class="opacity-50"> в иностранных судовых компаниях</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-4 pb-28 gap-4">
                    <div>
                        <img src="{{ asset('template/images/2-1.jpg') }}" alt="">
                    </div>
                    <div class="flex items-center col-start-3">
                        <div class="flex flex-col justify-end gap-4 ff-Montserrat">
                            <p>Моря и океаны всегда притягивали меня своей <span class="opacity-50">таинственностью и величием</span>.</p>
                            <p>Долгое время <span class="opacity-50">работаю в иностранных судовых компаниях</span> и создаю видео по своей авторской методике, которые собрали более <span class="opacity-50">2 млрд просмотров</span> в соцсетях.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex flex-col gap-4 ff-Montserrat">
                            <p>Я здесь, чтобы поделиться с вами красотой и величием океанов и морей этого мира с неизведанной большинству людей стороны.</p>
                            <p>Создал <span class="opacity-50">полное руководство</span> для тех, кто хочет стать моряком или больше узнать о профессии.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24 gap-36">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight">Как стать моряком?</h2>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-36 overflow-hidden">
                    <div class="col-start-2 col-span-2 max-h-[400px]">
                        <div class="ff-Montserrat pb-14">
                            <p class="text-2xl font-medium pb-8">Ежедневно получаю этот вопрос от подписчиков</p>
                            <p class="text-base pb-8">Обо всём, что поможет вам определится с выбором профессии и специальности, о зарплатах, карьерном росте подробно рассказываю в своём видеоруководстве.</p>
                        </div>
                        <div>
                            <img class="max-h-fit" src="{{ asset('template/images/3-1.jpg') }}" alt="">
                        </div>
                    </div>
                    <div class="col-span-2">
                        <div>
                            <img class="max-h-fit" src="{{ asset('template/images/3-2.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 gap-10">
                    <div>
                        <p class="ff-Montserrat text-2xl">
                            В моём видеоруководстве вы получите ответы на вопросы:
                        </p>
                    </div>
                    <div class="col-span-2">
                        <ul class="ff-Montserrat">
                            <li class="pb-4">- Как выбрать специальности на флоте. <span class="opacity-50">Их плюсы и минусы</span></li>
                            <li class="pb-4">- Всё <span class="opacity-50">о зарплатах</span> моряков</li>
                            <li class="pb-4">- Где получить <span class="opacity-50">морское образование</span></li>
                            <li class="pb-4">- <span class="opacity-50">Стоимость</span> обучения</li>
                            <li class="pb-4">- <span class="opacity-50">Требования</span> к будущим морякам</li>
                            <li class="pb-4">- Необходимый <span class="opacity-50">пакет документов</span> для работы</li>
                            <li class="pb-4">- Где и <span class="opacity-50">как искать работу</span></li>
                            <li class="pb-4">- Как расти <span class="opacity-50">по карьерной лестнице</span></li>
                            <li class="pb-4">- И много другой полезной информации из своего <span class="opacity-50">20-ти летнего опыта работы</span> на судах иностранных компаний</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-24">
            <div class="container">
                <div class="grid grid-cols-5">
                    <div class="flex pb-28 col-start-2 col-span-4">
                        <p style="text-indent:2em" class="text-3xl uppercase">Если вы мечтаете о карьере моряка<br>то это <span class="opacity-50">видеоруководство</span> - ваш первый шаг к<br>осуществлению этой <span class="opacity-50">мечты</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="pb-24">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Ты получишь:</h2>
                </div>
                <div class="grid grid-cols-5 gap-10">
                    <div class="col-start-2">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center pb-3">Видео<br>файл</p>
                                <p class="text-base text-center font-thin px-4 opacity-50">с моими личными разъяснениями о специфике профессии</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center pb-3">Печатный<br>файл</p>
                                <p class="text-base text-center font-thin px-4 opacity-50">с полезными ссылками, файлами и подробными инструкциями по обучению и получению морских документов</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="w-72 h-72rounded-full flex justify-center items-center ">
                            <img src="{{ asset('template/images/5-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 gap-4">
                    <div>
                        <img src="{{ asset('template/images/6-1.jpg') }}" alt="">
                    </div>
                    <div class="col-span-4 border border-white">
                        <div class="p-8">
                            <div class="pb-16">
                                <p class="text-[40px] uppercase font-light">Получить доступ</p>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-4 col-start-2">
                                        <p class="text-[40px] uppercase font-medium">к видеоруководству</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="grid grid-cols-5  pb-10">
                                    <div class="col-span-2 col-start-2">
                                        <p class="text-2xl">Не упустите шанс достичь успехов в карьере  моряка прямо сейчас! </p>
                                    </div> 
                                </div>
                                <div class="grid grid-cols-5  pb-10">
                                    <div class="col-span-2 col-start-2">
                                        <p class="ff-Montserrat">Оставьте заявку и наши менеджеры свяжутся с вами в ближайшее время</p>
                                    </div> 
                                </div>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-2 col-start-2">
                                        <a class="ff-Montserrat text-center text-lg py-6 bg-accent leading-none px-4 justify-between" href="#"><span class="pr-4">Получить видеоруководство</span>
                                            <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15.9687 11.1881L15.9687 4.03116L12.3349 7.68389C13.6616 6.35013 15.9389 7.27978 15.9533 9.16098L15.9687 11.1881Z" fill="white"/>
                                                <path d="M15.9687 4.03116H11.1974H8.81176L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389L15.9687 4.03116Z" fill="white"/>
                                                <path d="M5.55424 14.4456L12.3349 7.68389M15.9687 4.03116L11.1974 4.03116L8.81176 4.03116M15.9687 4.03116L15.9687 11.1881M15.9687 4.03116L12.3349 7.68389M6.42612 4.03116L8.81176 4.03116M15.9687 13.5737L15.9687 11.1881M8.81176 4.03116L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389V7.68389M15.9687 11.1881L15.9533 9.16098C15.9389 7.27978 13.6616 6.35013 12.3349 7.68389V7.68389" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection