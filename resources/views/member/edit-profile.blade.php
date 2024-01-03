@extends('member.layouts.base')

@section('title', 'Profile')

@section('title-description', 'This is your profile')

@section('content')
{{-- Alert Here --}}
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $errors)
            <li>{{ $errors }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <a href="{{route('member.profile')}}">
        <img src="{{ asset('stream/assets/images/ic_arrow-left-normal.svg') }}" width="30px" height="30px" alt="">
    </a>
        <div class="bg-black overflow-hidden shadow rounded-lg border-black -mt-5">
            <div class="px-4 py-5 sm:px-6">
                <h3 class="text-lg leading-6 font-medium text-white">
                    Edit Profile
                </h3>
                <p class="mt-1 max-w-2xl text-sm text-white">
                    This is some information about the user.
                </p>
            </div>
            <form enctype="multipart/form-data" method="POST" action="{{route('member.profile.update', $user->id)}}">
                @csrf
                @method('PUT')
                <div class="border-t border-brown px-4 py-5 sm:p-0">
                    <div class="py-1 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <div>
                                <input type="text" id="name" name="name" class="border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $user->name }}">
                            </div>
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <div>
                                <input type="text" id="email" name="email" class="bg-dark border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $user->email }}">
                            </div>
                        </dd>
                    </div>
                    <div class="py-3 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Phone number
                        </dt>
                        <dd class="mt-1 sm:mt-0 sm:col-span-2">
                            <div>
                                <input type="text" id="phone_number" name="phone_number" class="bg-dark border border-black text-black text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5  dark:border-gray-600 dark:placeholder-gray-400 dark:focus:ring-blue-500 dark:focus:border-blue-500" value="{{ $user->phone_number }}">
                            </div>
                        </dd>
                    </div>
                    <div class="border-t border-brown px-4 py-5 sm:p-0">
                        <button type="submit" class="float-right mr-5 my-5 px-[30px] py-[10px] bg-[#FE4848] rounded-md text-center">
                        <span class="text-white font-semibold text-base">
                            Save
                        </span>
                    </div>
                </div>
            </form>
    </div>
@endsection