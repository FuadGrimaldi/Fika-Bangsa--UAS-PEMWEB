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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.css" rel="stylesheet" />
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
                    <a href="{{route('member.dashboard')}}" class="hidden lg:block right-0 absolute">
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
                    <!-- Modal toggle -->
                    <div class="flex flex-row">
                        <div class="block bg-white font-medium text-sm p-1 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M512 199.7c0 23.6-20.7 43.8-44.8 43.8h-99.9c16.3 17 18.3 49.8-6.3 70.9 14.3 22.8 2.1 53-16.5 62.3C353.6 425.9 322.7 448 272 448c-2.7 0-13.3-.2-16-.2-62 .2-76.9-31.1-123.7-38.3C120.6 407.7 112 397.6 112 385.8V214.3l0 0c0-18.4 10.6-35.9 28.5-43.8 28.9-13 95.4-49 107.5-77.3 7.8-18.2 21.4-29.1 40-29.1 34.2 0 57.8 35.1 44.1 66.9-3.6 8.4-8.3 16.7-14.2 24.9H467.2c23.5 0 44.8 20.5 44.8 43.8zM96 200v192c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V200c0-13.3 10.7-24 24-24h48c13.3 0 24 10.7 24 24zM68 368c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"/></svg>
                        </div>
                        <button data-modal-target="default-modal" data-modal-toggle="default-modal" class="block text-white font-medium text-sm px-2 py-1.2 text-center " type="button">
                                Klik disini sebelum berlangganan
                        </button>
                    </div>

                    <!-- Main modal -->
                    <div id="default-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-2xl max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-black    rounded-lg shadow dark:bg-[#28130a]">
                                <!-- Modal header -->
                                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        Terms of Service
                                    </h3>
                                    <button type="button" class="text-white bg-transparent hover:bg-[#28130a] hover:text-white rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-[#28130a] dark:hover:text-white" data-modal-hide="default-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-4 md:p-5 space-y-4">
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        Aplikasi Fika masih dalam tahap pengembangan, user dapat mengakses aplikasi dan melakukan subscription tetapi belum dapat mengakses movie.
                                    </p>
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        Berikut tahapan berlangganan sebagai testing aplikasi FIKA:
                                    </p>
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        1. Pilih Paket Berlangganan, klik subscribe now.
                                    </p>
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        2. Pilih Credit/Debit Card <br>
                                        Masukan 4811 1111 1111 1114 pada Card Number, sesuaikan tanggal e.'06/24', masukan 123 pada CVV.
                                    </p>
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        3. Masukan password 112233, klik Ok.
                                    </p>
                                    <p class="text-ms leading-relaxed text-white dark:text-white">
                                        4. Dan pembayaran berhasil dan akan diarahkan ke halaman payment success, anda mendapatkan akses menonton.
                                    </p>
                                </div>
                                <!-- Modal footer -->
                                <div class="flex items-center p-4 md:p-5 border-t border-red-200 rounded-b dark:border-gray-600">
                                    <button data-modal-hide="default-modal" type="button" class="text-white bg-red hover:bg-red focus:ring-2 focus:outline-none focus:ring-red-500 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-red dark:hover:bg-red-700 dark:focus:ring-red-700">Ok mengerti</button>
                                </div>
                            </div>
                        </div>
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
                                        {{ $standard -> max_user}} Users Limits
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
</body>

</html>