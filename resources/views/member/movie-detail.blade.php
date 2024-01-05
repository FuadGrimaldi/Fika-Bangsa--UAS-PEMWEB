@extends('member.layouts.base')

@section('title', 'Watch Today')

@section('title-description', 'Our selected movies for your mood')

@section('content')
<!-- Details -->
<div class="flex lg:gap-14 gap-1 items-start lg:pb-0 pb-[200px]">
    <a href="{{route('member.dashboard')}}">
        <img src="{{ asset('stream/assets/images/ic_arrow-left-normal.svg') }}" alt="">
    </a>
    <div class="flex flex-col lg:gap-10 lg:pr-0 pr-5">
        <!-- Thumbnail -->
        <div class="lg:w-full relative overflow-hidden group lg:mt-0 mt-5">
            <img src="{{ asset('storage/thumbnail/'.$movie->large_thumbnail) }}" class="object-cover rounded-[5px] lg:w-[1300px] lg:h-[400px] h-[200px] w-[350px]" alt="">
            <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 z-20">
                <img src="{{ asset('stream/assets/images/ic_play.svg') }}" width="80" alt="">
            </div>
            <a href="{{ route('member.movie.watch', $movie->id) }}" class="inset-0 absolute z-50"></a>
        </div>

        <!-- Judul & Rating -->
        <div class="flex items-center justify-between lg:mt-5 mt-5">
            <div>
                <div class="text-white font-medium lg:text-[28px] text-xl capitalize">
                    {{ $movie->title}}
                </div>
                <p class="text-stream-gray lg:text-base text-xs mt-[6px]">
                {{ $movie->categories}} • Released at {{date('Y', strtotime($movie->release_date)) }}
                </p>
                <div class="inline-flex items-center gap-[6px] w-[10px]">
                    <img src="{{ asset('stream/assets/images/ic_star.svg') }}" alt="">
                    <img src="{{ asset('stream/assets/images/ic_star.svg') }}" alt="">
                    <img src="{{ asset('stream/assets/images/ic_star.svg') }}" alt="">
                    <img src="{{ asset('stream/assets/images/ic_star.svg') }}" alt="">
                    <img src="{{ asset('stream/assets/images/ic_star.svg') }}" alt="">
                    <div class="lg:text-base text-xs text-white ml-[6px] mt-1">
                        18,049
                    </div>
                </div>
            </div>
        </div>

        <div class="lg:mt-0 mt-3">
            <div class="lg:text-xl text-base text-white">Casts</div>
            <p class="max-w-[700px] mt-[10px] text-stream-gray lg:text-base text-xs leading-2">
                {{ $movie->casts }}
            </p>
        </div>
        <!-- Synopsis -->
        <div class="lg:mt-0 mt-3">
            <div class="lg:text-xl text-base text-white">About</div>
            <p class="max-w-[700px] mt-[10px] text-stream-gray lg:text-base text-xs leading-2">
                {{ $movie->about }}
            </p>
        </div>
    </div>
</div>
<!-- ./Details -->
@endsection                