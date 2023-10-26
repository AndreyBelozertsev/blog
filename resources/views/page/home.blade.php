@extends('layouts.app')

@section('content')
    <main class="xl:pt-14">
        <section class="pb-28">
            <div class="container">
                <div class="grid grid-cols-5 gap-8">
                    <div class="pt-4 md:pt-24 col-span-5 md:col-span-3 hidden md:block z-10">
                        <p class="text-xl md:text-2xl lg:text-4xl xl:text-5xl 3xl:text-6xl font-light relative leading-tight">ОФИЦИАЛЬНЫЙ САЙТ<span class="absolute pl-4 opacity-50 text-sm md:text-base lg:text-base xl:text-lg 3xl:text-2xl md:-top-4">@papazzhuk</span></p>
                        <p class="text-xl md:text-2xl lg:text-4xl xl:text-5xl 3xl:text-6xl font-medium md:text-right relative leading-tight">АЛЕКСАНДРА<br><span class="md:absolute -right-24">ЖУКА<span></p>
                    </div>
                    <div class="relative pt-24 col-span-5 md:col-span-2 md:row-span-3 order-1">
                        <div class="">
                            <img src="{{ asset('template/images/1-1.png') }}" alt="">
                        </div>
                        <div class="absolute -bottom-2 md:hidden bg-gradient-to-t from-brand via-brand to-transparent h-fit w-full pb-8 pt-16 px-4">
                            <p class="text-lg xs:text-xl sm:text-2xl lg:text-4xl xl:text-5xl 3xl:text-6xl font-light relative leading-tight">ОФИЦИАЛЬНЫЙ САЙТ<span class="absolute pl-4 opacity-50 text-sm md:text-base lg:text-base xl:text-lg 3xl:text-2xl md:-top-4">@papazzhuk</span></p>
                            <p class="text-lg xs:text-xl sm:text-2xl lg:text-4xl xl:text-5xl 3xl:text-6xl font-medium md:text-right relative leading-tight">АЛЕКСАНДРА<br><span class="md:absolute -right-24">ЖУКА<span></p>
                        </div>
                    </div>
                    <div class="col-span-5 md:col-span-3 order-2">
                        <div class="w-full lg:w-2/3 2xl:w-1/2 flex 2xl:justify-start items-center pb-4 md:pb-12 gap-4">
                            <div class="text-opacity-50 w-24 md:w-32 3xl:w-36 h-24 md:h-32 3xl:h-36 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                                <p class="text-xs md:text-sm 3xl:text-base text-center font-thin">Моряк</span></br><span class="font-bold">№1</span> в соцсетях</p>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-16 md:w-20 h-16 md:h-20 flex justify-center items-center">
                                    <img src="{{ asset('template/images/1-2.png') }}" alt="">
                                </div>
                            </div>
                            <div class="flex justify-center">
                                <div class="w-16 md:w-20 h-16 md:h-20 flex justify-center items-center">
                                    <img src="{{ asset('template/images/1-3.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-5 lg:col-span-3 order-3">
                        <div class="sm:grid grid-cols-4 2xl:grid-cols-2 ">
                            <div class="flex sm:grid gap-2 pb-12 sm:pb-0">
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
                            <div class="col-span-3 2xl:col-span-1">
                                <div class="pb-10">
                                    <p class="text-base md:text-lg">Создал полное руководство для тех, кто хочет стать моряком или больше узнать о профессии</p>
                                </div>
                                <div>
                                    <a class="ff-Montserrat text-center text-base md:text-lg py-4 md:py-6 px-3 md:px-4 justify-between bg-accent leading-none" href="#"><span class="pr-4">Получить видеоруководство</span>
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
        <section class="ankor md:pb-30 xl:pb-44" id="about"></section>
        <section>
            <div class="container">
                <div class="pb-16 md:pb-20">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Обо мне</h2>
                </div>
                <div class="flex justify-end pb-20 md:pb-28">
                    <p style="text-indent:2em" class="text-lg md:text-2xl text-3xl uppercase">Моря и океаны — это не просто водные просторы,<br>это <span class="opacity-50">настоящие чудеса природы</span>, и я приглашаю вас<br>отправиться со мной в эти <span class="opacity-50">удивительные путешествия</span></p>
                </div>
                <div class="grid md:grid-cols-3 xl:grid-cols-4 pb-20 md:pb-28 gap-4">
                    <div class="xl:col-span-2 flex justify-center lg:block">
                        <div class="text-opacity-50 h-48 lg:h-56 2xl:h-60 3xl:h-72 w-48 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">> <span class="text-4xl xl:text-6xl 3xl:text-8xl">4</span> млн</p>
                                <p class="text-base text-center font-thin px-4"><span class="opacity-50">общее количество подписчиков в </span>Tik-Tok, Instagram <span class="opacity-50">и</span> YouTube</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:block">
                        <div class="text-opacity-50 h-48 lg:h-56 2xl:h-60 3xl:h-72 w-48 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center" style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-4xl xl:text-6xl 3xl:text-8xl text-center">45</p>
                                <p class="text-base text-center font-thin px-4">стран мира<span class="opacity-50"> посетил за время работы в судовых компаниях</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-center lg:block">
                        <div class="text-opacity-50 h-48 lg:h-56 2xl:h-60 3xl:h-72 w-48 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                            <p class="text-4xl text-center"><span class="text-4xl xl:text-6xl 3xl:text-8xl">18</span> лет</p>
                                <p class="text-base text-center font-thin px-4">стаж работы<span class="opacity-50"> в иностранных судовых компаниях</span></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid md:grid-cols-3 lg:grid-cols-4 pb-8 md:pb-28 gap-8 md:gap-4">
                    <div>
                        <img src="{{ asset('template/images/2-1.jpg') }}" alt="">
                    </div>
                    <div class="flex items-center lg:col-start-3">
                        <div class="flex flex-col justify-end gap-4 ff-Montserrat text-sm md:text-base">
                            <p>Моря и океаны всегда притягивали меня своей <span class="opacity-50">таинственностью и величием</span>.</p>
                            <p>Долгое время <span class="opacity-50">работаю в иностранных судовых компаниях</span> и создаю видео по своей авторской методике, которые собрали более <span class="opacity-50">2 млрд просмотров</span> в соцсетях.</p>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <div class="flex flex-col gap-4 ff-Montserrat text-sm md:text-base">
                            <p>Я здесь, чтобы поделиться с вами красотой и величием океанов и морей этого мира с неизведанной большинству людей стороны.</p>
                            <p>Создал <span class="opacity-50">полное руководство</span> для тех, кто хочет стать моряком или больше узнать о профессии.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ankor pb-20 md:pb-36" id="sailor"></section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="md:grid grid-cols-5 pb-16 md:pb-24 gap-36">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight">Как стать моряком?</h2>
                    </div>
                </div>
                <div class="flex flex-wrap lg:grid grid-cols-5 gap-8 lg:gap-36 overflow-hidden">
                    <div class="xl:col-start-2 col-span-3 xl:col-span-2 lg:max-h-[400px]">
                        <div class="ff-Montserrat pb-10 md:pb-14">
                            <p class="text-lg md:text-2xl font-medium pb-8">Ежедневно получаю этот вопрос от подписчиков</p>
                            <p class="text-sm md:text-base md:pb-8">Обо всём, что поможет вам определится с выбором профессии и специальности, о зарплатах, карьерном росте подробно рассказываю в своём видеоруководстве.</p>
                        </div>
                        <div class="hidden lg:flex justify-center items-center">
                            <img class="max-h-fit w-full" src="{{ asset('template/images/3-1.jpg') }}" alt="">
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
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="xl:grid grid-cols-5 gap-10">
                    <div class="col-span-2 2xl:col-span-1">
                        <p class="ff-Montserrat text-lg md:text-2xl pb-10 xl:pb-0">
                            В моём видеоруководстве вы получите ответы на вопросы:
                        </p>
                    </div>
                    <div class="col-span-2">
                        <ul class="ff-Montserrat text-sm md:text-base">
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
        <section class="pb-16 md:pb-24">
            <div class="container">
                <div class="md:grid grid-cols-5">
                    <div class="flex pb-10 sm:pb-16 md:pb-28 col-start-2 col-span-4">
                        <p class="md:indent-[20%] text-lg md:text-2xl text-3xl  uppercase">Если вы мечтаете о карьере моряка<br>то это <span class="opacity-50">видеоруководство</span> - ваш первый шаг к<br>осуществлению этой <span class="opacity-50">мечты</span></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class=" pb-24">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Ты получишь:</h2>
                </div>
                <div class="flex flex-col items-center md:grid grid-cols-3 3xl:grid-cols-4 gap-6 lg:gap-10">
                    <div class="3xl:col-start-2">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center pb-3">Видео файл</p>
                                <p class="text-sm md:text-base text-center font-thin px-4 opacity-50">с моими личными разъяснениями о специфике профессии</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center pb-3">Печатный<br>файл</p>
                                <p class="text-sm md:text-base text-center font-thin px-4 opacity-50">с полезными ссылками, файлами и подробными инструкциями по обучению и получению морских документов</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 rounded-full flex justify-center items-center ">
                            <img src="{{ asset('template/images/5-1.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="grid xl:grid-cols-3 2xl:grid-cols-5 gap-4">
                    <div class="hidden xl:block 2xl:col-span-1">
                        <img src="{{ asset('template/images/6-1.jpg') }}" alt="">
                    </div>
                    <div class="border border-white xl:col-span-2 2xl:col-span-4">
                        <div class="p-8">
                            <div class="pb-16">
                                <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-light">Получить доступ</p>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-5 lg:col-span-4 lg:col-start-2">
                                        <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-medium">к видеоруководству</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="grid lg:grid-cols-5  pb-10">
                                    <div class="lg:col-span-2 lg:col-start-2">
                                        <p class="text-lg xl:text-xl 2xl:text-2xl">Не упустите шанс достичь успехов в карьере  моряка прямо сейчас! </p>
                                    </div> 
                                </div>
                                <div class="grid lg:grid-cols-5  pb-10">
                                    <div class="lg:col-span-2 lg:col-start-2">
                                        <p class="ff-Montserrat">Оставьте заявку и наши менеджеры свяжутся с вами в ближайшее время</p>
                                    </div> 
                                </div>
                                <div class="grid lg:grid-cols-5">
                                    <div class="col-span-4 lg:col-span-4 lg:col-start-2">
                                        <a class="ff-Montserrat text-center text-xs xs:text-sm lg:text-lg py-4 md:py-6 px-3 md:px-4 bg-accent leading-none justify-between" href="#"><span class="pr-2 sm:pr-4">Получить видеоруководство</span>
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
        <section class="ankor pb-20 md:pb-36" id="bloger"></section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="md:grid grid-cols-5 pb-16 md:pb-24 ">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight">Как стать блогером?</h2>
                    </div>
                </div>
                <div class="pb-24">
                    <div class="text-lg md:text-2xl text-3xl uppercase">
                        <p class="md:indent-[20%]" >Если вы мечтаете стать <span class="opacity-50">блогером</span>, делиться своими идеями и историями с миром, то мои <span class="opacity-50">видеоуроки</span> предоставят необходимые инструменты <span class="opacity-50">для успешного старта</span> в этой сфере</p>
                    </div>
                </div>
                <div class="pb-20">
                    <h2 class="text-base px-2 font-thin border-r border-l w-fit text-accentSecondary border-accentSecondary">Отвечу на ваши вопросы:</h2>
                </div>
                <div class="grid lg:grid-cols-3 gap-5">
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center">Как начать <span class="opacity-50">вести блог?</span></p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center">Как <span class="opacity-50">масштабироваться</span> в соц. сетях?</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center">Как <span class="opacity-50">зарабатывать</span> на своём блоге?</p></div>
                </div>
            </div>
        </section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="grid md:grid-cols-9 gap-8">
                    <div class="md:col-span-6 2xl:col-span-4 2xl:col-start-3 flex flex-col xl:justify-end lg:px-20 order-2 md:order-1">
                        <p class="font-medium text-lg md:text-2xl 2xl:text-3xl pb-4 font-medium">Для блогов любой ниши!</p>
                        <p class="text-base md:text-lg 2xl:text-xl pb-10">Делюсь рабочими инструментами и личной стратегией <span class="opacity-50">быстрого роста</span> во всех соц.сетях <span class="opacity-50">через видеоконтент без вложений.</span></p>
                        <p class="ff-Montserrat">За 3 года «хакнул» соц.сети . Тысячи новых подписчиков каждый день.</p>
                    </div>
                    <div class="md:col-span-3 order-1 md:order-2">
                        <img src="{{ asset('template/images/7-1.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="flex flex-wrap justify-center">
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72  border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">450 000</p>
                                <p class="text-sm md:text-base text-center font-thin px-4"><span class="opacity-50">подписчиков за 3 месяца</span> через Reels в Instagram</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center overflow-hidden z-50">
                            <div>
                                <img src="{{ asset('template/images/insta.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">420 000</p>
                                <p class="text-sm md:text-base text-center font-thin px-4"><span class="opacity-50">подписчиков за год на</span> Youtube</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">238 000 000</p>
                                <p class="text-sm md:text-base text-center font-thin px-4"><span class="opacity-50">просмотров на</span> Youtube</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">3 300 000</p>
                                <p class="text-sm md:text-base text-center font-thin px-4"><span class="opacity-50">подписчиков в</span> TikTok</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center">1,8 млрд.</p>
                                <p class="text-sm md:text-base text-center font-thin px-4"><span class="opacity-50">просмотров в</span> TikTok</p>
                            </div>
                        </div>
                    </div>
                    <div class="w-full sm:w-1/2 md:w-1/3 lg:w-1/4 flex justify-center p-4 md:p-1 lg:p-0">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center overflow-hidden">
                            <div>
                                <img src="{{ asset('template/images/tiktok.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="md:grid grid-cols-5 pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight">Кому подойдут мои<br><span class="font-medium md:ml-40">видеоуроки</span></h2>
                    </div>
                </div>
                <div class="grid lg:grid-cols-3 gap-5 pb-24">
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center">Тем, <span class="opacity-50">кто хочет начать блог</span> и поделиться своими интересами и знаниями</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center"><span class="opacity-50">Студентам, выпускникам и профессионалам,</span> ищущим возможности в соц.сетях</p></div>
                    <div class="border border-white py-8 px-4 ff-Montserrat uppercase text-lg xl:text-xl 2xl:text-2xl"><p class="text-center"><span class="opacity-50">Предпринимателям,</span> желающим  продвигать свой бизнес</p></div>
                </div>
                <div class="xl:grid grid-cols-5 gap-10 pb-24">
                    <div class="col-span-2 2xl:col-span-1">
                        <p class="ff-Montserrat text-lg md:text-2xl pb-10 xl:pb-0">
                            5 видеоуроков по созданию рилс:
                        </p>
                    </div>
                    <div class="col-span-2">
                        <ul class="ff-Montserrat text-sm md:text-base">
                            <li class="pb-4">- Вся правда о <span class="opacity-50">рилс</span></li>
                            <li class="pb-4">- Виды <span class="opacity-50">контента</span> и формирования <span class="opacity-50">целевой аудитории</span></li>
                            <li class="pb-4">- Создание образа и <span class="opacity-50">позиционирование в соц сетях</span></li>
                            <li class="pb-4">- <span class="opacity-50">Топ стратегии</span> успешных рилс</li>
                            <li class="pb-4">- Работа со светом <span class="opacity-50">в кадре</span></li>
                        </ul>
                    </div>
                </div>
                <div class="grid xl:grid-cols-3 2xl:grid-cols-5 gap-4">
                    <div class="hidden xl:block 2xl:col-span-1">
                        <img src="{{ asset('template/images/8-1.jpg') }}" alt="">
                    </div>
                    <div class="border border-white xl:col-span-2 2xl:col-span-4">
                        <div class="p-8">
                            <div class="pb-16">
                                <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-light">Получить доступ</p>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-5 lg:col-span-4 lg:col-start-2">
                                        <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-medium">к видеоруководству</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="grid lg:grid-cols-5  pb-10">
                                    <div class="lg:col-span-2 lg:col-start-2">
                                        <p class="ff-Montserrat">Оставьте заявку и наши менеджеры свяжутся с вами в ближайшее время</p>
                                    </div> 
                                </div>
                                <div class="grid lg:grid-cols-5">
                                    <div class="col-span-4 lg:col-span-4 lg:col-start-2">
                                        <a class="ff-Montserrat text-center text-xs xs:text-sm lg:text-lg py-4 md:py-6 px-3 md:px-4 bg-accent leading-none justify-between" href="#"><span class="pr-2 sm:pr-4">Получить видеоруководство</span>
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
        <section>
            <div class="container">
                <div class="grid md:grid-cols-5 pb-16 md:pb-24 gap-36">
                    <div class="md:col-span-4 md:col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight">Консультация со мной</h2>
                    </div>
                </div>
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 2xl:grid-cols-5 pb-24 gap-12">
                    <div class="flex md:flex-col justify-center order-1 items-center">
                        <img src="{{ asset('template/images/9-1.png') }}" alt="">
                    </div>
                    <div class="sm:col-span-2 flex flex-col justify-center order-3 lg:order-2">
                        <p class="ff-Montserrat pb-20">Подойдёт для тех, кому достаточно разовой консультации о профессии моряка или о блогерстве</p>
                        <form id="contact-form">
                            <div class="pb-6">
                                <input name="phone" class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" type="text" placeholder="Имя">
                                <span class="text-red-600 text-sm invalid-feedback" id="name-error"></span>
                            </div>
                            <div class="pb-6">
                                <input name="phone" class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" type="phone" placeholder="Телефон">
                                <span class="text-red-600 text-sm invalid-feedback" id="phone-error"></span>
                            </div>
                            <div class="pb-6">
                                <textarea name="message" class="w-full pb-4 pt-2 bg-transparent border-b placeholder:opacity-50 ff-Montserrat focus:outline-none" name="" id="" rows="2" placeholder="Комментарий"></textarea>
                                <span class="text-red-600 text-sm invalid-feedback" id="message-error"></span>
                            </div>  
                            <div class="pb-12">
                                <label class="ff-Montserrat focus:outline-none">
                                    <input type="checkbox" 
                                        name="agree"
                                        class="appearance-none 
                                            absolute 
                                            bg-transparent 
                                            rounded-full h-5 w-5 
                                            cursor-pointer
                                            transition-all
                                            inline-flex 
                                            text-center 
                                            justify-center 
                                            border-2 
                                            bg-no-repeat
                                            items-center 
                                            opacity-50
                                            checked:after:border-b-[3px] 
                                            checked:after:border-white
                                            checked:after:border-r-[3px]
                                            checked:after:rotate-45
                                            checked:after:rounded-sm
                                            after:h-3 after:w-2
                                            after:absolute 
                                            after:text-xl 
                                            after:text-white"
                                    >
                                    <span class="opacity-50 inline-block relative pl-8">Отправляя заявку вы соглашаетесь с Политикой конфиденциальности</span></label>
                            </div>
                            <span class="text-red-600 text-sm invalid-feedback" id="agree-error"></span>
                            <div class="hidden" id="preloader">
                                <div role="status">
                                    <svg aria-hidden="true" class="mr-2 w-8 h-8 text-gray-200 animate-spin dark:text-gray-600 fill-primary-blue" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z" fill="currentColor"/>
                                        <path d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z" fill="currentFill"/>
                                    </svg>
                                    <span class="sr-only">Loading...</span>
                                </div>
                            </div>
                            <div class="response"></div> 
                            <div>
                                <button type="submit" class="ff-Montserrat text-center text-lg py-6 bg-accent leading-none px-4 justify-between" href="#"><span class="pr-4">Получить консультацию</span>
                                    <svg class="inline" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M15.9687 11.1881L15.9687 4.03116L12.3349 7.68389C13.6616 6.35013 15.9389 7.27978 15.9533 9.16098L15.9687 11.1881Z" fill="white"/>
                                        <path d="M15.9687 4.03116H11.1974H8.81176L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389L15.9687 4.03116Z" fill="white"/>
                                        <path d="M5.55424 14.4456L12.3349 7.68389M15.9687 4.03116L11.1974 4.03116L8.81176 4.03116M15.9687 4.03116L15.9687 11.1881M15.9687 4.03116L12.3349 7.68389M6.42612 4.03116L8.81176 4.03116M15.9687 13.5737L15.9687 11.1881M8.81176 4.03116L10.827 4.03845C12.7252 4.04532 13.6736 6.33819 12.3349 7.68389V7.68389M15.9687 11.1881L15.9533 9.16098C15.9389 7.27978 13.6616 6.35013 12.3349 7.68389V7.68389" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>   
                        </form>
                    </div>
                    <div class="2xl:col-start-5 flex flex-col justify-center items-center order-2 lg:order-3">
                        <div class="text-opacity-50 w-36 sm:w-48 h-36 sm:h-48 border border-white rounded-full flex justify-center items-center" style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-xl xl:text-2xl 3xl:text-4xl text-center pb-2">5 000<br>руб.</p>
                                <p class="text-sm md:text-base text-center font-thin px-4">стоимость<br>консультации</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <section class="ankor pb-20 md:pb-36" id="telegram"></section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="md:grid grid-cols-5 pb-16 md:pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight">Эксклюзивный<br><span class="font-medium md:ml-40">Telegram-канал</span></h2>
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6 pb-6 md:pb-36">
                    <div class="md:col-span-2">
                        <img class="w-full" src="{{ asset('template/images/10-1.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-lg xl:text-xl 2xl:text-2xl text-center pb-2 ff-Montserrat p-4">Избранные длинные видео в <span class="opacity-50">оригинальном качестве</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="md:col-start-2">
                        <img class="w-full" src="{{ asset('template/images/10-2.jpg') }}">
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-3.jpg') }}">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 pb-24">
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-4.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-lg xl:text-xl 2xl:text-2xl text-center pb-2 ff-Montserrat p-4">Авторские фото для заставки на <span class="opacity-50">ваши смартфоны</span></p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-5.jpg') }}">
                    </div>
                    <div class="lg:col-start-3">
                        <img class="w-full" src="{{ asset('template/images/10-6.jpg') }}">
                    </div>
                    <div>
                        <img class="w-full" src="{{ asset('template/images/10-7.jpg') }}">
                    </div>
                </div>
                <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 pb-6 md:pb-24">
                    <div class="order-1">
                        <img class="w-full" src="{{ asset('template/images/10-8.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center order-2">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-lg xl:text-xl 2xl:text-2xl text-center pb-2 ff-Montserrat p-4">Открытые комментарии для <span class="opacity-50">живого общения</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="order-3 md:order-4 lg:order-3">
                        <img class="w-full" src="{{ asset('template/images/10-9.jpg') }}">
                    </div>
                    <div class="flex flex-col justify-center items-center order-4 md:order-3 lg:order-4">
                        <div class="text-opacity-50 h-56 lg:h-56 2xl:h-60 3xl:h-72 w-56 lg:w-56 2xl:w-60 3xl:w-72 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                            <div>
                                <p class="text-lg xl:text-xl 2xl:text-2xl  text-center pb-2 ff-Montserrat p-4">Возможность подержать мои <span class="opacity-50">новые проекты для вас</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section >
            <div class="container">
                <div class="grid xl:grid-cols-3 2xl:grid-cols-5 gap-4 mb-8 md:mb-0">
                    <div class="hidden xl:block">
                        <img src="{{ asset('template/images/8-1.jpg') }}" alt="">
                    </div>
                    <div class="border border-white xl:col-span-2 2xl:col-span-4">
                        <div class="p-8">
                            <div class="pb-10">
                                <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-light">Получить доступ</p>
                                <div class="grid grid-cols-5">
                                    <div class="col-span-5 lg:col-span-4 lg:col-start-2">
                                        <p class="text-xl lg:text-3xl xl:text-4xl 2xl:text-[40px] uppercase font-medium">к видеоруководству</p>
                                    </div> 
                                </div>
                            </div>
                            <div class="flex flex-col">
                                <div class="grid lg:grid-cols-5 xl:grid-cols-2 2xl:grid-cols-5 gap-4">
                                    <div class="lg:col-span-3 xl:col-span-1 2xl:col-span-3 lg:col-start-2 xl:col-start-1 2xl:col-start-2 pb-10">
                                        <p class="ff-Montserrat">Оставьте заявку и наши менеджеры свяжутся с вами в ближайшее время</p>
                                    </div> 
                                    <div class="lg:col-span-1 lg:row-span-2 flex flex-col justify-center items-center">
                                        <div class="text-opacity-50 h-32 lg:h-40 2xl:h-40 3xl:h-40 w-32 lg:w-40 2xl:w-40 3xl:w-40 border border-white rounded-full flex justify-center items-center " style="background:radial-gradient(circle at 50% 50%, rgba(23, 61, 73, 1), rgba(23, 61, 73, .4)); box-shadow:0 0 40px 40px rgba(23, 61, 73, .4);">
                                            <div>
                                                <p class="text-lg md:text-2xl  3xl:text-3xl text-center pb-2">290 <span class="text-xl">руб.</span></p>
                                                <p class="text-sm md:text-base text-center font-thin px-4">стоимость<br>подписки</p>
                                            </div>
                                        </div>
                                    </div> 
                                    <div class="lg:col-span-3 xl:col-span-5 2xl:col-span-3  lg:col-start-2 xl:col-start-1 2xl:col-start-2">
                                        <a class="block ff-Montserrat text-center text-center text-xs xs:text-sm lg:text-lg py-4 md:py-6 px-3 md:px-4 bg-accent leading-none justify-between" href="#"><span class="pr-2 sm:pr-4">Получить видеоруководство</span>
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
        <section class="ankor pb-20 md:pb-36" id="shop"></section>
        <section class="pb-20 md:pb-36">
            <div class="container">
                <div class="md:grid grid-cols-5 pb-16 md:pb-24">
                    <div class="col-span-4 col-start-2">
                        <h2 class="text-xl md:text-2xl xl:text-4xl 3xl:text-6xl uppercase font-extralight relative">Эксклюзивный<br><span class="font-medium md:ml-40 xl:ml-60 3xl:ml-72">магазин</span><span class="hidden md:inline opacity-50 absolute ff-Montserrat font-medium bottom-10 lowercase text-base text-sm lg:text-base xl:text-lg 3xl:text-2xl">@papazzhuk</span></h2>
                    </div>
                </div>
                <div class="lg:grid grid-cols-5 pb-12 md:pb-20">
                    <div class="col-span-3 xl:col-span-2 col-start-2 xl:col-start-3">
                        <p class="text-base lg:text-base xl:text-lg 3xl:text-2xl">Неповторимый ассортимент <span class="opacity-50">одежды, аксессуаров и коллекционных предметов</span>, которые отражают стиль и уникальность моего блога</p>
                    </div>
                </div>
          
                <ul class="flex gap-4 pb-8 border-b tab-group-button">
                    <li role="presentation">
                        <button data-tab="child-shop" data-tab-group="shop-parent" class="custom-tab-item text-lg 2xl:text-xl font-medium ff-Montserrat px-6 md:px-8 2xl:px-10 py-3 md:py-4 2xl:py-5 border opacity-50 active"
                            type="button"
                            >
                            Для детей
                        </button>
                    </li>
                    <li role="presentation">
                        <button data-tab="all-shop" data-tab-group="shop-parent" class="custom-tab-item text-lg 2xl:text-xl font-medium ff-Montserrat px-6 md:px-8 2xl:px-10 py-3 md:py-4 2xl:py-5 border opacity-50"
                             type="button"
                            >
                            Для всех
                        </button>
                    </li>
                </ul>

                <div id="shop-parent-tabs-group">
                    <div data-tab-content="child-shop-tab" class="tab-content-block">
                        <div class="flex flex-wrap gap-4 pt-8 pb-24 tab-group-button">
                            <button data-tab="print-shop" data-tab-group="shop-child-1" class="custom-tab-item active text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Печатная продукция
                            </button>
                            <button data-tab="souvenir-shop" data-tab-group="shop-child-1" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Сувениры
                            </button>
                            <button data-tab="clothes-shop" data-tab-group="shop-child-1" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Одежда
                            </button>
                            <button data-tab="book-shop" data-tab-group="shop-child-1" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Книга
                            </button>
                        </div>
                        <div id="shop-child-1-tabs-group">
                            <x-products-list hidden="" tab_id="print-shop-tab" title="Печатная продукция" />
                            <x-products-list hidden="hidden" tab_id="souvenir-shop-tab" title="Сувенирная продукция" />
                            <x-products-list hidden="hidden" tab_id="clothes-shop-tab" title="Одежда" />
                            <x-products-list hidden="hidden" tab_id="book-shop-tab" title="Книжная продукция" />
                        </div>
                    </div>
                    <div data-tab-content="all-shop-tab" class="tab-content-block hidden">
                        <div class="flex flex-wrap gap-4 pt-8 pb-24 tab-group-button">
                            <button data-tab="print-shop" data-tab-group="shop-child-2" class="custom-tab-item active text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Общая печатная продукция
                            </button>
                            <button data-tab="souvenir-shop" data-tab-group="shop-child-2" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Общие сувениры
                            </button>
                            <button data-tab="clothes-shop" data-tab-group="shop-child-2" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Общая одежда
                            </button>
                            <button data-tab="book-shop" data-tab-group="shop-child-2" class="custom-tab-item text-sm md:text-base font-medium ff-Montserrat px-4 py-2 border opacity-50">
                                Общие книги
                            </button>
                        </div>
                        <div id="shop-child-2-tabs-group">
                            <x-products-list hidden="" tab_id="print-shop-tab" title="Общ Печатная продукция" />
                            <x-products-list hidden="hidden" tab_id="souvenir-shop-tab" title="Общ Сувенирная продукция" />
                            <x-products-list hidden="hidden" tab_id="clothes-shop-tab" title="Общ Одежда" />
                            <x-products-list hidden="hidden" tab_id="book-shop-tab" title="Общ Книжная продукция" />
                        </div>
                    </div>
                </div>
                <!-- <div class="flex justify-center ff-Montserrat">
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
                </div> -->
                

<!-- 
                <div class="mb-4 border-b border-gray-200 dark:border-gray-700">
                    <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 rounded-t-lg" id="profile-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Profile</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dashboard-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Dashboard</button>
                        </li>
                        <li class="mr-2" role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="settings-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Settings</button>
                        </li>
                        <li role="presentation">
                            <button class="inline-block p-4 border-b-2 border-transparent rounded-t-lg hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="contacts-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Contacts</button>
                        </li>
                    </ul>
                </div>
                <div id="myTabContent">
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">1This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="dashboard-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">2This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="settings-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">3This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                    <div class="hidden p-4 rounded-lg bg-gray-50 dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="contacts-tab">
                        <p class="text-sm text-gray-500 dark:text-gray-400">4This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
                    </div>
                </div> -->





            </div>
        </section>
    </main>
@endsection