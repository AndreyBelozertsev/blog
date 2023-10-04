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
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight">Как стать блогером?</h2>
                    </div>
                </div>
                <div class="pb-24">
                    <div class="text-3xl uppercase">
                        <p style="text-indent:20%">Если вы мечтаете стать <span class="opacity-50">блогером</span>, делиться своими идеями и историями с миром, то мои <span class="opacity-50">видеоуроки</span> предоставят необходимые инструменты <span class="opacity-50">для успешного старта</span> в этой сфере</p>
                    </div>
                </div>
                <div class="pb-20">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Отвечу на ваши вопросы:</h2>
                </div>
                <div class="grid grid-cols-3 gap-5">
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center">Как начать <span class="opacity-50">вести блог?</span></p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center">Как <span class="opacity-50">масштабироваться</span> в соц. сетях?</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center">Как <span class="opacity-50">зарабатывать</span> на своём блоге?</p></div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-9">
                    <div class="col-span-4 col-start-3 flex flex-col justify-end px-20">
                        <p class="font-medium text-3xl pb-4 font-medium">Для блогов любой ниши!</p>
                        <p class="text-xl pb-10">Делюсь рабочими инструментами и личной стратегией <span class="opacity-50">быстрого роста</span> во всех соц.сетях <span class="opacity-50">через видеоконтент без вложений.</span></p>
                        <p class="ff-Montserrat">За 3 года «хакнул» соц.сети . Тысячи новых подписчиков каждый день.</p>
                    </div>
                    <div class="col-span-3">
                        <img src="{{ asset('template/images/7-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="flex flex-wrap justify-center">
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">450 000</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">подписчиков за 3 месяца</span> через Reels в Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center overflow-hidden z-50">
                            <div>
                                <img src="{{ asset('template/images/insta.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">420 000</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">подписчиков за год на</span> Youtube</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">238 000 000</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">просмотров на</span> Youtube</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">3 300 000</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">подписчиков в</span> TikTok</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center">1,8 млрд.</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">просмотров в</span> TikTok</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-1/4 flex justify-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center overflow-hidden">
                            <div>
                                <img src="{{ asset('template/images/tiktok.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight">Кому подойдут мои<br><span class="font-medium ml-40">видеоуроки</span></h2>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-5 pb-24">
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center">Тем, <span class="opacity-50">кто хочет начать блог</span> и поделиться своими интересами и знаниями</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center"><span class="opacity-50">Студентам, выпускникам и профессионалам,</span> ищущим возможности в соц.сетях</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-2xl"><p class="text-center"><span class="opacity-50">Предпринимателям,</span> желающим  продвигать свой бизнес</p></div>
                </div>
                <div class="grid grid-cols-5 gap-10 pb-24">
                    <div>
                        <p class="ff-Montserrat text-2xl">
                            5 видеоуроков по созданию рилс :
                        </p>
                    </div>
                    <div class="col-span-2">
                        <ul class="ff-Montserrat">
                            <li class="pb-4">- Вся правда о <span class="opacity-50">рилс</span></li>
                            <li class="pb-4">- Виды <span class="opacity-50">контента</span> и формирования <span class="opacity-50">целевой аудитории</span></li>
                            <li class="pb-4">- Создание образа и <span class="opacity-50">позиционирование в соц сетях</span></li>
                            <li class="pb-4">- <span class="opacity-50">Топ стратегии</span> успешных рилс</li>
                            <li class="pb-4">- Работа со светом <span class="opacity-50">в кадре</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid grid-cols-5 gap-4">
                    <div>
                        <img src="{{ asset('template/images/8-1.jpg') }}" alt="">
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
                                        <p class="ff-Montserrat">Оставьте заявку и с вами свяжутся в ближайшее время</p>
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
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24 gap-36">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight">Консультация со мной</h2>
                    </div>
                </div>
                <div class="grid grid-cols-5 pb-24 gap-12">
                    <div class="flex flex-col justify-center">
                        <img src="{{ asset('template/images/9-1.png') }}" alt="">
                    </div>
                    <div class="col-span-2 flex flex-col justify-center">
                        <p class="ff-Montserrat pb-20">Подойдёт для тех, кому достаточно разовой консультации о профессии моряка или о блогерстве</p>
                        <form action="">
                            <div class="pb-6">
                                <input class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" type="text" placeholder="Имя">
                            </div>
                            <div class="pb-6">
                                <input class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" type="phone" placeholder="Телефон">
                            </div>
                            <div class="pb-6">
                                <textarea class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" name="" id="" rows="2" placeholder="Комментарий"></textarea>
                            </div>  
                            <div class="pb-12">
                                <label class="ff-Montserrat focus:outline-none"><input type="checkbox" class="absolute -z-10 opacity-0 block w-0 h-0 group"> <span class="opacity-50 inline-block relative pl-8 before:inline-block before:content-[''] before:w-5 before:h-5 before:absolute before:left-0 before:top-0 before:bg-[url('{{ asset('template/images/check.svg') }}')] before:rounded-full before:border-2 before:bg-no-repeat group-w-4:checked">Отправляя заявку вы соглашаетесь с Политикой конфиденциальности</span></label>
                            </div>  
                            <div>
                                <a class="ff-Montserrat text-center text-lg py-6 bg-accent leading-none px-4 justify-between" href="#"><span class="pr-4">Получить консультацию</span>
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9687 11.1881L15.9687 4.03116L12.3349 7.68389C13.6616 6.35013 15.9389 7.27978 15.9533 9.16098L15.9687 11.1881Z" fill="white"/>
                                        <path d="M15.9687 4.03116H11.1974H8.81176L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389L15.9687 4.03116Z" fill="white"/>
                                        <path d="M5.55424 14.4456L12.3349 7.68389M15.9687 4.03116L11.1974 4.03116L8.81176 4.03116M15.9687 4.03116L15.9687 11.1881M15.9687 4.03116L12.3349 7.68389M6.42612 4.03116L8.81176 4.03116M15.9687 13.5737L15.9687 11.1881M8.81176 4.03116L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389V7.68389M15.9687 11.1881L15.9533 9.16098C15.9389 7.27978 13.6616 6.35013 12.3349 7.68389V7.68389" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </a>
                            </div>   
                        </form>
                    </div>
                    <div class="col-start-5 flex flex-col justify-center">
                        <div class="text-opacity-50 w-48 h-48 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl text-center pb-2">5 000<br>руб.</p>
                                <p class="text-base text-center font-thin px-4">стоимость<br>консультации</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight">Эксклюзивный<br><span class="font-medium ml-40">Telegram-канал</span></h2>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-6 pb-36">
                    <div class="col-span-2">
                        <img class="w-full" src="{{ asset('template/images/10-1.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-2xl text-center pb-2 ff-Montserrat p-4">Избранные длинные видео в <span class="opacity-50">оригинальном качестве</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-start-2">
                        <img class="w-full" src="{{ asset('template/images/10-2.jpg') }}">
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-3.jpg') }}">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-6 pb-24">
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-4.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-2xl text-center pb-2 ff-Montserrat p-4">Авторские фото для заставки на <span class="opacity-50">ваши смартфоны</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-5.jpg') }}">
                    </div>
                    <div class="col-start-3">
                        <img class="w-full" src="{{ asset('template/images/10-6.jpg') }}">
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-7.jpg') }}">
                    </div>
                </div>
                <div class="grid grid-cols-4 gap-6 pb-24">
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-8.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-2xl text-center pb-2 ff-Montserrat p-4">Открытые комментарии для <span class="opacity-50">живого общения</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-9.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 w-72 h-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-2xl text-center pb-2 ff-Montserrat p-4">Возможность подержать мои <span class="opacity-50">новые проекты для вас</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 gap-4">
                    <div>
                        <img src="{{ asset('template/images/8-1.jpg') }}" alt="">
                    </div>
                    <div class="col-span-4 border border-white">
                        <div class="p-8">
                            <div class="pb-10">
                                <p class="text-[40px] uppercase font-light">Получить доступ</p>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-4 col-start-2">
                                        <p class="text-[40px] uppercase font-medium">к видеоруководству</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="grid grid-cols-5">
                                    <div class="col-span-2 col-start-2 pb-10">
                                        <p class="ff-Montserrat">Оставьте заявку и наши менеджеры свяжутся с вами в ближайшее время</p>
                                    </div> 
                                    <div class="col-span-2 row-span-2 flex flex-col justify-center items-center">
                                        <div class="text-opacity-50 w-40 h-40 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                                            <div>
                                                <p class="text-3xl text-center pb-2">290 <span class="text-xl">руб.</span></p>
                                                <p class="text-base text-center font-thin px-4">стоимость<br>подписки</p>
                                            </div>
                                        </div>
                                    </div> 
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
        <section class="pb-36">
            <div class="container">
                <div class="grid grid-cols-5 pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-6xl uppercase font-extralight relative">Эксклюзивный<br><span class="font-medium ml-72">магазин</span><span class="opacity-50 absolute ff-Montserrat text-2xl font-medium bottom-10 lowercase">@papazzhuk</span></h2>
                    </div>
                </div>
                <div class="grid grid-cols-5 pb-24">
                    <div class="col-span-2 col-start-3">
                        <p class="text-2xl">Неповторимый ассортимент <span class="opacity-50">одежды, аксессуаров и коллекционных предметов</span>, которые отражают стиль и уникальность моего блога</p>
                    </div>
                </div>
                <div class="flex gap-4 pb-8 border-b">
                    <button class="text-xl font-medium ff-Montserrat px-10 py-5 border opacity-50">
                        Для детей
                    </button>
                    <button class="text-xl font-medium ff-Montserrat px-10 py-5 border">
                        Для всех
                    </button>
                </div>
                <div class="flex gap-4 pt-8 pb-24">
                    <button class="font-medium ff-Montserrat px-4 py-2 border opacity-50">
                        Печатная продукция
                    </button>
                    <button class="font-medium ff-Montserrat px-4 py-2 border opacity-50">
                       Сувениры
                    </button>
                    <button class="font-medium ff-Montserrat px-4 py-2 border">
                       Одежда
                    </button>
                    <button class="font-medium ff-Montserrat px-4 py-2 border opacity-50">
                       Книга
                    </button>
                </div>
                <div class="grid grid-cols-3 pb-24 gap-6">
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div class="col-start-2">
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                    <div>
                        <div class="pb-4">
                            <img src="{{ asset('template/images/11-1.jpg') }}" alt="">
                        </div>
                        <div class="pb-10">
                            <p>Футболка мужская</p>
                        </div>
                        <div class="grid grid-cols-3">
                            <a class="ff-Montserrat px-4 py-2 col-span-2 border flex justify-between" href="#">Перейти в магазин
                                <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.9687 11.1886L15.9687 4.03165L12.3349 7.68437C13.6616 6.35062 15.9389 7.28027 15.9533 9.16147L15.9687 11.1886Z" fill="white"/>
                                    <path d="M15.9687 4.03165H11.1974H8.81176L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437L15.9687 4.03165Z" fill="white"/>
                                    <path d="M5.55424 14.4461L12.3349 7.68437M15.9687 4.03165L11.1974 4.03165L8.81176 4.03165M15.9687 4.03165L15.9687 11.1886M15.9687 4.03165L12.3349 7.68437M6.42612 4.03165L8.81176 4.03165M15.9687 13.5742L15.9687 11.1886M8.81176 4.03165L10.827 4.03894C12.7252 4.04581 13.6736 6.33868 12.3349 7.68437V7.68437M15.9687 11.1886L15.9533 9.16147C15.9389 7.28027 13.6616 6.35062 12.3349 7.68437V7.68437" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <span class="text-xl justify-self-end self-end">3 000 руб.</span>
                        </div>
                    </div>
                </div>
                <div class="flex justify-center ff-Montserrat">
                    <nav role="navigation" aria-label="{{ __('Pagination Navigation') }}" class="flex items-center justify-between">
                        <div class="flex justify-between flex-1 sm:hidden">
                
                                <span class="relative inline-flex items-center px-4 py-2 text-sm font-medium text-white border border-white cursor-default leading-5">
                                    {!! __('pagination.previous') !!}
                                </span>

                                <a href="#" class="relative inline-flex items-center px-4 py-2 text-sm font-mediumborder border-white leading-5 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    {!! __('pagination.previous') !!}
                                </a>



                                <a href="#" class="relative inline-flex items-center px-4 py-2 ml-3 text-sm font-medium text-wgite border border-white leading-5 rounded-md hover:text-gray-500 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150">
                                    {!! __('pagination.next') !!}
                                </a>
                
                                <span class="relative inline-flex items-center px-4 py-2 ml-3 text-sm text-white  border border-gray-300 cursor-default leading-5 rounded-md">
                                    {!! __('pagination.next') !!}
    
                        </div>

                        <div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
                            <div>
                                <span class="relative z-0 inline-flex shadow-sm">
                                    {{-- Previous Page Link --}}
                            
                                        <a href="#" rel="prev" class="relative inline-flex items-center px-2 py-2 text-sm text-white text-opacity-50 border-opacity-50 border-l border-white leading-5 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.previous') }}">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                            
                                        <span aria-disabled="true">
                                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm  text-white cursor-default leading-5">1</span>
                                        </span>
                                        <span aria-disabled="true">
                                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm  text-white cursor-default leading-5">2</span>
                                        </span>
                                        
                                        <span aria-current="page">
                                            <span class="relative inline-flex items-center px-4 py-2 -ml-px text-sm text-white cursor-default leading-5">3</span>
                                        </span>
                                        
                                        <a href="#" class="relative inline-flex items-center px-4 py-2 -ml-px text-sm text-white leading-5 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-700 transition ease-in-out duration-150" aria-label="{{ __('Go to page :page', ['page' => 4]) }}">
                                            4
                                        </a>
                                        <a href="#" rel="next" class="relative inline-flex items-center px-2 py-2 -ml-px text-sm font-medium text-white border-r border-white leading-5 border-opacity-50 text-opacity-50 focus:z-10 focus:outline-none focus:ring ring-gray-300 focus:border-blue-300 active:bg-gray-100 active:text-gray-500 transition ease-in-out duration-150" aria-label="{{ __('pagination.next') }}">
                                            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                                            </svg>
                                        </a>
                                </span>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </section>
    </main>
@endsection