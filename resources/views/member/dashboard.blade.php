@extends('member.layouts.base')

@section('title', 'Watch Today')

@section('title-description', 'Our selected movies for your mood')

@section('content')
                
<!-- Featured -->
<div class="block lg:hidden bg-[#28130a] pb-3">
    <div class="font-semibold text-[22px] text-white py-3 px-6">Trending Now</div>
    @php $featuredDisplayed = false; @endphp
    @foreach ($movies as $movie)
    @if (($movie->title) == 'Petualangan Bersama Asep' && !$featuredDisplayed)
    @php $featuredDisplayed = true; @endphp
    <div class="grid grid-cols-2 gap-5 xl:gap-12">
        <div class="col-span-1 relative overflow-hidden group">
            <img src="{{ asset('storage/thumbnail/'.$movie->small_thumbnail) }}" class="object-cover rounded-[7px] ml-6 h-[180px] w-[130px]" alt="">
            <div class="absolute bottom-0 left-0 right-0 rounded-bl-[10px] rounded-br-[10px] z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                <div class="px-7 pb-7">
                    <div class="lg:font-medium lg:text-xl text-xs text-white"></div>
                    <p class="mb-0 text-stream-gray lg:text-base text-xs mt-[10px]"></p>
                </div>
            </div>
            <div class="absolute top-1/2 lg:left-1/2 left-1 lg:ml-0 ml-[70px] -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500">
                <img src="{{ asset('stream/assets/images/ic_play.svg') }}" class="lg:w-[80px] w-[40px]" alt="">
            </div>
            <a href="{{ route('member.movie.detail', $movie->id)}}" class="inset-0 absolute z-50"></a>
        </div>
        <div class="col-span-1 -ml-[40px] mr-3 relative overflow-hidden group">
            <div class="font-bold text-xs text-white">{{ $movie->title }}</div>
            <p class="mb-0 text-stream-gray lg:text-base text-xs mt-[10px]">{{date('Y', strtotime($movie->release_date)) }}</p>
            <p class="mb-0 text-white lg:text-base text-[9px] mt-[10px]">{{ $movie->about }}</p>
            <div class="flex flex-col items-baseline mt-6">
                <div class="flex flex-col font-normal">
                    <a
                    href="{{ route('member.movie.detail', $movie->id)}}"
                    class="px-5 mt-5 bg-red rounded-[5px]">
                    <span class="text-xs font-normal text-white hover:font-bold">Watch</span>
                    </a>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </div>
</div>
<div class="min-[320px]:hidden lg:contents">
    <div class="font-semibold text-[22px] text-white lg:py-0">Movie Trending</div>
    <div class="grid lg:grid-cols-2 grid-cols-3 gap-5 xl:gap-12">
        @foreach ($movies as $movie)
        @if (($movie->featured) == 1)
        <div class="lg:col-span-1 relative overflow-hidden group">
            <img src="{{ asset('storage/thumbnail/'.$movie->small_thumbnail) }}" class="object-cover lg:rounded-[30px] rounded-[10px] lg:h-[400px] lg:w-[400px] h-[100px] w-[100px]" alt="">
            <div class="absolute bottom-0 left-0 right-0 lg:bg-gradient-to-t from-black lg:rounded-bl-[28px] lg:rounded-br-[28px] rounded-bl-[10px] rounded-br-[10px]  z-10 translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent">
                <div class="px-7 lg:pb-7 ">
                    <div class="lg:font-medium lg:text-xl text-xs text-white">{{ $movie->title }}</div>
                    <p class="mb-0 text-stream-gray lg:text-base text-xs mt-[10px]">{{date('Y', strtotime($movie->release_date)) }}</p>
                </div>
            </div>
            <div class="absolute top-1/2 left-1/2 -translate-y-[500px] group-hover:-translate-y-1/2
            -translate-x-1/2 z-20 transition ease-in-out duration-500">
            <img src="{{ asset('stream/assets/images/ic_play.svg') }}" class="" width="80" alt="">
        </div>
        <a href="{{ route('member.movie.detail', $movie->id)}}" class="inset-0 absolute z-50"></a>
        <div class="lg:hidden lg:font-medium lg:text-xl text-xs text-white">{{ $movie->title }}</div>
    </div>
    @endif
    @endforeach
    </div>
</div>
<!-- /Featured -->

<!-- Movie -->
<div>
    <div class="font-semibold text-[22px] text-white lg:py-0 py-3 lg:mb-[40px] lg:ml-0 ml-6">Movie</div>
        <div class="watched-movies">
            <div class="grid lg:grid-cols-3 grid-cols-3 lg:gap-5 xl:gap-12 lg:mr-[30px] lg:ml-0 ml-6">
                @foreach ($movies as $movie)
                @if (($movie->featured) == 0 && $featuredDisplayed)
                <!-- Movies 1 -->
                <div class="relative group overflow-hidden lg:mb-1 mb-[25px]">
                    <img src="{{ asset('storage/thumbnail/'.$movie->small_thumbnail) }}" class="object-cover lg:rounded-[30px] rounded-[10px] lg:h-[300px] lg:w-[240px] h-[100px] w-[100px]" alt="">
                    <div
                        class="absolute bottom-0 left-0 right-0 from-black rounded-bl-[28px] rounded-br-[28px] translate-y-0 group-hover:translate-y-[300px] transition ease-in-out duration-500 group-hover:bg-transparent overflow-hidden">
                        <div class="px-7 pb-7">
                            <div class="font-medium text-xl text-white"></div>
                            <p class="mb-0 text-stream-gray text-base mt-[10px]"></p>
                        </div>
                    </div>
                    <div class="absolute top-1/2 lg:left-1/2 left-1 lg:ml-0 ml-[50px] -translate-y-[500px] group-hover:-translate-y-1/2 -translate-x-1/2 z-20 transition ease-in-out duration-500">
                        <img src="{{ asset('stream/assets/images/ic_play.svg') }}" class="lg:w-[80px] w-[40px]" alt="">
                    </div>
                    <a href="{{ route('member.movie.detail', $movie->id)}}" class="inset-0 absolute z-50"></a>
                    <div class="mt-1 font-medium lg:text-sm text-[12px] text-white">{{$movie->title}}</div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection