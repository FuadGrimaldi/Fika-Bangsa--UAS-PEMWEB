<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fika</title>
    <link
      rel="icon"
      href="{{ asset('stream/assets/images/fika.png') }}"
      type="image/icon type"
    />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="{{ asset('stream/assets/script/tailwind-config.js') }}"></script>
    <style type="text/tailwindcss">
        @layer components{
            .nav-link-item {
                @apply py-3 font-normal text-stream-gray transition-all cursor-pointer lg:py-0 hover:text-white;
            }
        }

        .frame-video{
            @apply rounded-[28px];
            filter: drop-shadow(0px 32px 52px rgba(140, 135, 162, 0.18))
        }
    </style>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video-js.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('stream/assets/css/videojs.css') }}">

</head>

<body class="">
    <header class="text-white font-poppins select-none h-full relative bg-center bg-cover bg-no-repeat bg-[url({{ asset('stream/assets/images/landing.jpg') }})] shadow-[0_40px_50px_5px_rgba(0,0,0,1)] lg:h-screen">
        <nav class="container py-5 relative ">
            <div class="flex flex-col w-full lg:flex-row lg:items-center">
                <!-- Logo & Toggler Button here -->
                <div class="flex items-center justify-between block lg:hidden">
                    <!-- LOGO -->
                    <a href="/" class="lg:w-full lg:block w-[80px] md:h-[40px]">
                        <img src="{{ asset('stream/assets/images/fika.png') }}" alt="fika" />
                    </a>
                    <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
                    <div>
                        <button class="p-1 outline-none mobile-menu-button" data-target="#navigation">
                            <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8h16M4 16h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="hidden w-full lg:block" id="navigation">
                    <div class="flex flex-col items-baseline lg:justify-between mt-6 lg:flex-row lg:items-center lg:mt-0">
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a href="/" class="hidden lg:block ml-2">
                            <img src="{{ asset('stream/assets/images/fika.png') }}" width="150px" height="150px" alt="fika" />
                            </a>
                        </div>
                        <div class="lg:hidden flex flex-col w-full font-normal">
                            <a
                            href="/"
                            class="px-3 py-1.5 mt-2 bg-brown rounded-md hover:bg-[#D90000] ">
                            <span class="text-base font-extralight text-white hover:font-bold">Home</span>
                            </a>
                        </div>
                        <div class="lg:hidden flex flex-col w-full font-normal">
                            <a
                            href="{{ route('pricing') }}"
                            class="px-3 py-1.5 mt-2 bg-brown rounded-md hover:bg-[#D90000]">
                            <span class="text-base font-extralight text-white hover:font-bold">Subscription</span>
                            </a>
                        </div>
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.login') }}"
                            class="lg:px-7 lg:py-2 px-3 py-1.5 mt-2 lg:bg-[#D90000] bg-brown hover:bg-[#D90000] rounded-md lg:mt-0">
                            <span class="text-base font-extralight text-white hover:font-bold">Sign In</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="lg:py-[50px] py-[25px] flex flex-col items-center gap-5 px-3 relative">
            <div class="font-bold text-white text-3xl lg:text-[45px] text-center capitalize lg:leading-snug">
            Mempersembahkan Film<br class="hidden md:block" />
            Karya Anak Bangsa
            </div>
            <p class="text-base text-stream-gray text-center leading-7">
            Film, Series Karya Anak Bangsa dan
            <br class="hidden lg:block" />
            masih banyak lagi
            </p>
            <p class="hidden lg:contents lg:mt-5 text-base text-white font-bold text-center leading-7">
            Siap untuk menonton? Daftar disini!
            </p>
            <a href="{{ route('member.register') }}" class="lg:-mt-5 bg-[#D90000] rounded-md text-center py-2 px-11 hover:font-bold">
                <span class="text-white font-weight-lighter text-base">Get Started ></span>
            </a>
        </section>
    </header>
    <div class="bg-gradient-to-b from-stone-800 to-brown">
        <section class="lg:py-[50px] lg:pt-[35px] pt-[40px] flex flex-col items-center gap-5 px-3 relative">
            <div class="font-bold text-white text-[25px] lg:text-[35px] text-center capitalize leading-snug">
            Nikmati tayangan di<br class="hidden md:block" />
            TV berlayar lebih lebar
            </div>
            <p class="text-base text-stream-gray text-center leading-7">
            Kompatibel dengan Smart Tv,
            <br class="hidden lg:block" />
            Chromecast, Apple TV dan lain-lain.
        </section>
        <section class="px-4 relative max-w-[950px] overflow-hidden mx-auto" id="stream">
            <div class="w-full relative flex lg:-mt-[50px]">
                <img
                    src="{{ asset('stream/assets/images/device.png') }}"
                    class="object-fit-cover m-auto"
                    alt="stream"
                    />
            </div>
        </section>
    
        <!-- Brand partner -->
        <section class="brands pb-[100px] flex flex-wrap justify-center items-center lg:gap-x-[70px] gap-x-[20px] gap-y-10 px-2
            relative">
            <img src="{{ asset('stream/assets/images/logo-apple-tv.svg') }}" class="lg:w-[60px] w-[45px]" alt="stream"/>
            <img src="{{ asset('stream/assets/images/logo-ipad-apple.svg') }}" class="lg:w-[80px] w-[60px]" alt="stream" />
            <img src="{{ asset('stream/assets/images/logo-android-wordmark.svg') }}" class="lg:w-[140px] w-[100px]" alt="stream" />
            <img src="{{ asset('stream/assets/images/logo-youtube-tv.svg') }}" class="lg:w-[140px] w-[100px]" alt="stream" />
        </section>
    </div>
    <!-- footer -->
    @extends('member.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js"></script>
</body>

</html>