@extends('member.layouts.base')

@section('title', 'Categories')

@section('title-description', 'Our selected movies for your mood')

@section('content')
<div class="lg:-mt-[35px] pb-[300px]">
    <div class="flex items-center justify-center py-4 flex-wrap">
        <a href="{{route('member.categories')}}" class="text-blue-700 hover:text-white border border-blue-600 bg-white hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 rounded-[7px] lg:rounded-[12px] lg:text-base font-medium px-5 lg:py-1.5 py-1 text-center me-3 mb-3 dark:border-blue-500 dark:text-blue-500 dark:hover:text-white dark:hover:bg-black dark:bg-gray-900 dark:focus:ring-blue-800">All categories</a>
        <a href="{{route('member.categories.action')}}" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-black dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-[7px] lg:rounded-[12px] text-base font-medium px-5 lg:py-1.5 py-1 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Action</a>
        <a href="{{route('member.categories.horror')}}" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-black dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-[7px] lg:rounded-[12px] text-base font-medium px-5 lg:py-1.5 py-1 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Horror</a>
        <a href="{{route('member.categories.anime')}}" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-black dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-[7px] lg:rounded-[12px] text-base font-medium px-5 lg:py-1.5 py-1 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Anime</a>
        <a href="{{route('member.categories.survival')}}" class="text-gray-900 border border-white hover:border-gray-200 dark:border-gray-900 dark:bg-black dark:hover:border-gray-700 bg-white focus:ring-4 focus:outline-none focus:ring-gray-300 rounded-[7px] lg:rounded-[12px] text-base font-medium px-5 lg:py-1.5 py-1 text-center me-3 mb-3 dark:text-white dark:focus:ring-gray-800">Survival</a>
    </div>
    <!-- Movie -->
    <div>
        <div class="font-semibold text-[22px] text-white lg:mb-[18px] lg:ml-0 ml-3 lg:-mt-0 -mt-5">Movie</div>
            <div class="watched-movies">
                <div class="grid lg:grid-cols-3 grid-cols-3 lg:gap-5 xl:gap-12 lg:mr-[30px] lg:ml-0 ml-3 ">
                    @foreach ($movies as $movie)
                    @if (($movie -> categories) == 'Action')
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
</div>
@endsection