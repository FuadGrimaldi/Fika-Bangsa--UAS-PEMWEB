@extends('member.layouts.base')

@section('title', 'Profile')

@section('title-description', 'This is your profile')

@section('content')
<div class="bg-black overflow-hidden shadow rounded-lg border-black lg:my-5 ">
    <div class="px-4 py-5 sm:px-6">
        <h3 class="text-lg leading-6 lg:font-medium text-base text-white">
            User Profile
        </h3>
        <p class="mt-1 max-w-2xl lg:text-sm text-xs text-white">
            This is some information about the user.
        </p>
    </div>
    <div class="border-t border-brown px-4 py-5 sm:p-0">
        <div class="py-1 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
                Full name
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ auth()->user()->name}}
            </dd>
        </div>
        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
                Email address
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ auth()->user()->email}}
            </dd>
        </div>
        <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
            <dt class="text-sm font-medium text-gray-500">
                Phone number
            </dt>
            <dd class="mt-1 text-sm text-white sm:mt-0 sm:col-span-2">
                {{ auth()->user()->phone_number}}
            </dd>
        </div>    
    </div>
    <div class="border-t border-brown px-4 py-5 sm:p-0">
            @foreach($users as $user)
                @if(($user->id) == (auth()->user()->id))
                <a href="{{route('member.profile.edit', $user->id)}}" class="float-right mr-5 my-5 lg:px-[19px] px-3 lg:py-[13px] py-[5px] bg-red rounded-[5px]">
                    <span class="text-white font-semibold text-base">
                        Edit Profile
                    </span>
                </a>
                @endif
            @endforeach
    </div>
</div>
<div class="lg:hidden bg-brown h-[320px]">

</div>
@endsection