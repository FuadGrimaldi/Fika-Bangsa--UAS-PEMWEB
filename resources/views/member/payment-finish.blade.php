<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fika | Finish Payment</title>

    <link
      rel="icon"
      href="{{ asset('stream/assets/images/fika.png') }}"
      type="image/icon type"
    />

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('stream/assets/script/tailwind-config.js') }}"></script>
</head>

<body class="bg-gradient-to-b from-stone-800 to-brown">

    <div class="font-poppins flex relative pt-5 px-3 h-screen">
        <div class="flex flex-col items-center m-auto pb-20">
            <img src="{{ asset('stream/assets/images/resting.png') }}" class="w-[360px] max-w-full" alt="stream" />
            <div class="text-white text-2xl font-semibold text-center mt-[20px]">
                Payment Finish
            </div>
            <p class="text-stream-gray text-base text-center leading-[30px] mb-10 mt-3">
                Time to enjoy yourself to watch great <br class="hidden md:block"> movies from around the world
            </p>
            <div>
                <a href="{{ route('member.dashboard') }}" class="py-3 px-[54px] text-center rounded-md bg-red">
                    <span class="text-white font-semibold text-base">
                        Watch Now
                    </span>
                </a>
            </div>
        </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>
</body>

</html>