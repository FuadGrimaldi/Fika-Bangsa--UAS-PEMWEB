<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fika | @yield('title')</title>
    <script type="text/javascript"src="../node_modules/tw-elements/dist/js/tw-elements.umd.min.js"></script>
    <link
    rel="icon"
    href="{{ asset('stream/assets/images/fika.png') }}"
    type="image/icon type"/>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css" />
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('stream/assets/script/tailwind-config.js') }}"></script>

    <style type="text/tailwindcss">
        @layer components{
            .side-link{
                @apply flex items-center font-normal text-stream-gray text-base w-full p-4 rounded-2xl gap-[10px] transition-all;
            }
            .side-link.active{
                @apply bg-softpur font-semibold text-white;
            }
        }
    </style>
</head>

<body class="font-poppins">
    <!-- Desktop Only -->
    <div class="mx-auto bg-gradient-to-b from-stone-800 to-brown hidden lg:block">
        @include('member.layouts.sidebar')
        <!-- START: Content -->
        <div class="ml-[376px] pr-[50px] overflow-hidden">
            <div class="py-[30px] flex flex-col gap-[50px]">
                @include('member.layouts.navbar')

                @yield('content')
            </div>
        </div>
        <!-- END: Content -->
    </div>

    <div class="ml-[301px] max-w-screen hidden lg:block overflow-hidden">
        @include('member.layouts.footer')
    </div>


    <div class="md block lg:hidden">
        <div class="bg-gradient-to-b from-stone-800 to-brown outline outline-white">
            @include('member.layouts.navbar-mobile')
        </div>
        <div class="bg-brown">
            @yield('content')
        </div>
        <!-- <div class="text-white text-2xl text-center leading-snug font-medium">
            Sorry gan ini ga support hp, buka nya pake laptop 
        </div> -->
    </div>
    <div class="lg:hidden max-w-screen block overflow-hidden">
        @include('member.layouts.footer')
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.watched-movies').removeClass('hidden').flickity({
                // options
                "cellAlign": "left",
                "contain": true,
                "groupCells": 1,
                "wrapAround": false,
                "pageDots": false,
                "prevNextButtons": false,
                "draggable": ">1"
            });
        })
    </script>
</body>

</html>