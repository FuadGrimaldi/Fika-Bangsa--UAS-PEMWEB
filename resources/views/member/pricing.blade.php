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

    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap");
    </style>

    <script src="{{ asset('stream/assets/script/tailwind-config.js') }}"></script>

    <style type="text/tailwindcss">
        @layer components{
            .li-benefits{
                @apply font-medium text-base text-stream-dark capitalize;
            }

            .pricing-card{
                @apply flex flex-col p-[30px] bg-white rounded-2xl w-full lg:w-[330px] md:max-w-max lg:max-w-[330px];
            }
        }
    </style>
</head>

<body class="bg-gradient-to-b from-stone-800 to-brown">

    <div class="relative">
        <div class="hidden lg:block fixed">
            <img src="{{ asset('stream/assets/images/banner2.jpg') }}" class="max-h-screen" alt="fika" />
        </div>
    </div>
    <div class="grid md:grid-cols-12 font-poppins relative pb-20">
        <div class="col-span-12 col-start-1 lg:col-start-2 xl:col-start-4">
            <div class="px-5 lg:px-[60px] pt-[30px] relative">
                    <a href="/" class="hidden lg:block right-0 absolute">
                    <img
                        src="{{ asset('stream/assets/images/fika.png') }}"
                        width="150px"
                        height="150px"
                        alt="fika"
                    />
                    </a>
                
                <div class="mt-[25px] flex flex-col items-center gap-5">
                    <div class="font-bold text-white text-4xl lg:text-[45px] text-center capitalize leading-snug">
                    Ayo Berlangganan!
                    </div>
                    <!-- Card Content -->
                    <div class="mt-[10px] flex justify-center gap-[40px] flex-wrap">
                        <!-- Card -->
                        <div class="pricing-card bg-black">
                            <p class="text-white font-medium text-base">
                                {{ ucwords($standard->name)}}
                            </p>
                            <div class="text-3xl text-white font-semibold my-1">
                                Rp {{number_format($standard->price)}}
                            </div>
                            <p class="text-sm text-stream-gray">
                                /bulan
                            </p>
                            <hr class="my-[30px]">

                            <!-- item benefits -->
                            <div class="flex flex-col gap-6">
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        {{ $standard -> max_users}} Users Limits
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        720 & 1080 full HD
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        TV & Laptop Streaming
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        180 Movies Available
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        24 Origin Countries
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                            </div>

                            <form action="{{route('member.transaction.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="package_id" value="{{ $standard->id }}">
                                <button type="submit" class="mt-10 m-auto py-3 px-10 block bg-[#D90000] rounded-md text-center">
                                    <span class="text-white text-base font-semibold">
                                        Subscribe
                                        Now
                                    </span>
                                </button>
                            </form>
                        </div>
                        <!-- Card -->
                        <div class="pricing-card bg-black">
                            <p class="text-white font-medium text-base">
                                {{ucwords($premium->name)}}
                            </p>
                            <div class="text-3xl text-white font-semibold my-1">
                                Rp {{number_format($premium->price)}}
                            </div>
                            <p class="text-sm text-white">
                                /bulan
                            </p>
                            <hr class="my-[30px]">

                            <!-- item benefits -->
                            <div class="flex flex-col gap-6">
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                    {{$premium->max_users}} Users Limits
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        Up to 8K Quality
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        All Platforms Streaming
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        900+ Movies Available
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                                <!-- benefits -->
                                <div class="flex items-center justify-between gap-3">
                                    <span class="li-benefits text-white">
                                        120 Origin Countries
                                    </span>
                                    <img src="{{ asset('stream/assets/images/ic_check.svg') }}" alt="fika" />
                                </div>
                            </div>

                            <form action="{{route('member.transaction.store')}}" method="POST">
                                @csrf
                                <input type="hidden" name="package_id" value="{{ $premium->id }}">
                                <button type="submit" class="mt-10 m-auto py-3 px-10 block bg-[#D90000] rounded-md text-center">
                                    <span class="text-white text-base font-semibold">
                                        Subscribe
                                        Now
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('stream/assets/script/script.js') }}"></script>
</body>

</html>