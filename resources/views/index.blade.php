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

<body class="bg-gradient-to-b from-stone-800 to-brown">

    <header class="text-white font-poppins select-none h-full relative">
        <img src="{{ asset('stream/assets/images/red_radial.svg') }}" class="absolute right-0" alt="fika" />

        <nav class="container py-5 relative">
            <div class="flex flex-col w-full lg:flex-row lg:items-center">
                <!-- Logo & Toggler Button here -->
                <div class="flex items-center justify-between block lg:hidden">
                    <!-- LOGO -->
                    <a href="/" class="hidden w-full lg:block">
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
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.login') }}"
                            class="px-7 py-2 mt-3 bg-[#D90000] rounded-md lg:mt-0">
                            <span class="text-base font-extralight text-white hover:font-bold">Sign In</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <section class="py-[50px] flex flex-col items-center gap-5 px-3 relative">
            <div class="font-bold text-white text-4xl lg:text-[45px] text-center capitalize leading-snug">
            Mempersembahkan Film<br class="hidden md:block" />
            Karya Anak Bangsa
            </div>
            <p class="text-base text-stream-gray text-center leading-7">
            Film, Series Karya Anak Bangsa dan
            <br class="hidden lg:block" />
            masih banyak lagi
            </p>
            <p class="mt-5 text-base text-white font-bold text-center leading-7">
            Siap untuk menonton? Daftar disini!
            </p>
            <a href="{{ route('member.register') }}" class="-mt-5 bg-[#D90000] rounded-md text-center py-2 px-11 hover:font-bold">
                <span class="text-white font-weight-lighter text-base">Get Started ></span>
            </a>
        </section>

        <section class="px-4 relative max-w-[950px] overflow-hidden mx-auto" id="stream">
        <!-- modal button & modal background -->
            <div class="w-full relative flex">
                <img
                    src="{{ asset('stream/assets/images/device.png') }}"
                    class="object-fit-cover m-auto "
                    alt="stream"
                />
            </div>
        </section>


        <!-- Brand partner -->
        <section class="brands pb-[100px] pt-[50px] flex flex-wrap justify-center items-center gap-x-[70px] gap-y-10 px-2
            relative">
            <img src="{{ asset('stream/assets/images/logo-apple-tv.svg') }}" alt="stream" />
            <img src="{{ asset('stream/assets/images/logo-ipad-apple.svg') }}" alt="stream" />
            <img src="{{ asset('stream/assets/images/logo-android-wordmark.svg') }}" alt="stream" />
            <img src="{{ asset('stream/assets/images/logo-youtube-tv.svg') }}" alt="stream" />
        </section>
    </header>

    <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com --> 
    <!-- Footer container -->
    <footer
    class="bg-black text-center text-neutral-600  dark:text-neutral-200 lg:text-left">
    <div
        class="flex items-center justify-center border-b-2 border-neutral-200 p-4 dark:border-neutral-500 lg:justify-between">
        <div class="mr-12 hidden lg:block">
        <span>Get connected with us on social networks:</span>
        </div>
        <!-- Social network icons container -->
        <div class="flex justify-center">
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z" />
            </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
            </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-5 w-5"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M7 11v2.4h3.97c-.16 1.029-1.2 3.02-3.97 3.02-2.39 0-4.34-1.979-4.34-4.42 0-2.44 1.95-4.42 4.34-4.42 1.36 0 2.27.58 2.79 1.08l1.9-1.83c-1.22-1.14-2.8-1.83-4.69-1.83-3.87 0-7 3.13-7 7s3.13 7 7 7c4.04 0 6.721-2.84 6.721-6.84 0-.46-.051-.81-.111-1.16h-6.61zm0 0 17 2h-3v3h-2v-3h-3v-2h3v-3h2v3h3v2z"
                fill-rule="evenodd"
                clip-rule="evenodd" />
            </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
            </svg>
        </a>
        <a href="#!" class="mr-6 text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z" />
            </svg>
        </a>
        <a href="#!" class="text-neutral-600 dark:text-neutral-200">
            <svg
            xmlns="http://www.w3.org/2000/svg"
            class="h-4 w-4"
            fill="currentColor"
            viewBox="0 0 24 24">
            <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z" />
            </svg>
        </a>
        </div>
    </div>

    <!-- Main container div: holds the entire content of the footer, including four sections (TW elements, Products, Useful links, and Contact), with responsive styling and appropriate padding/margins. -->
    <div class="mx-6 py-4 text-center md:text-left">
        <div class="grid-1 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <!-- TW elements section -->
        <div class="">
            <h6
            class="mb-4 flex items-center justify-center font-semibold uppercase md:justify-start">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-4 w-4">
                <path
                d="M12.378 1.602a.75.75 0 00-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03zM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 00.372-.648V7.93zM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 00.372.648l8.628 5.033z" />
            </svg>
            About
            </h6>
            <p>
            Aplikasi Streaming Film Karya Anak Bangsa (FIKA Bangsa) diharapkan dapat menjadi solusi untuk mengatasi tantangan dengan Mewadahi Karya Film Anak Bangsa.
            </p>
        </div>
        <!-- Useful links section -->
        <div class="">
            <h6
            class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            links
            </h6>
            <p class="mb-2">
            <a href="{{route('pricing')}}" class="text-neutral-600 dark:text-neutral-200"
                >Pricing</a
            >
            </p>
            <p class="mb-2">
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
                >Settings</a
            >
            </p>
            <p>
            <a href="#!" class="text-neutral-600 dark:text-neutral-200"
                >Help</a
            >
            </p>
        </div>
        <!-- Contact section -->
        <div>
            <h6
            class="mb-4 flex justify-center font-semibold uppercase md:justify-start">
            Contact
            </h6>
            <p class="mb-2 flex items-center justify-center md:justify-start">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5">
                <path
                d="M11.47 3.84a.75.75 0 011.06 0l8.69 8.69a.75.75 0 101.06-1.06l-8.689-8.69a2.25 2.25 0 00-3.182 0l-8.69 8.69a.75.75 0 001.061 1.06l8.69-8.69z" />
                <path
                d="M12 5.432l8.159 8.159c.03.03.06.058.091.086v6.198c0 1.035-.84 1.875-1.875 1.875H15a.75.75 0 01-.75-.75v-4.5a.75.75 0 00-.75-.75h-3a.75.75 0 00-.75.75V21a.75.75 0 01-.75.75H5.625a1.875 1.875 0 01-1.875-1.875v-6.198a2.29 2.29 0 00.091-.086L12 5.43z" />
            </svg>
            Kosan Pak Bokir, Cikutra, Bandung
            </p>
            <p class="mb-2 flex items-center justify-center md:justify-start">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5">
                <path
                d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                <path
                d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
            </svg>
            kelompokFika@gmail.com
            </p>
            <p class="mb-2 flex items-center justify-center md:justify-start">
            <svg
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 24 24"
                fill="currentColor"
                class="mr-3 h-5 w-5">
                <path
                fill-rule="evenodd"
                d="M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z"
                clip-rule="evenodd" />
            </svg>
            +62 892 8343 1234
            </p>
        </div>
        </div>
    </div>

    <!--Copyright section-->
    <div class="bg-black p-6 text-center">
        <span>2023 </span>
        <strong>Copyright &copy; Kelompok PEMWEB FIKA</strong>
    </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/video.js/7.10.2/video.min.js"></script>

    <script>
        // videojs data-setup
        videojs('stream-video', {
            controls: true,
            autoplay: false,
            preload: 'auto',
            poster: '/assets/images/poster.png',
            disablePictureInPicture: true,
            noUITitleAttributes: true
        });

        // Open modal
        $("#stream-preview").click(function () {
            $("#openStream").removeClass('hidden')
            $("#stream-video").removeClass('hidden')
            $('body').addClass('overflow-y-hidden')
        })

        // Close modal
        $("#openStream").click(function () {
            $("#stream-video").addClass('hidden')
            $('body').removeClass('overflow-y-hidden')
            $("#openStream").addClass('hidden')
            $("#openStream").addClass('vjs-paused').removeClass('vjs-playing')
        })
    </script>
</body>

</html>