@extends('member.layouts.base')

@section('title', 'Your Subscription')

@section('title-description', 'You are satisfied with our subscription')

@section('content')
<!-- Subscription Stat -->
<div class="bg-black py-[50px] rounded-2xl mx-[140px]">
    <div class="flex items-center gap-3 ml-[100px]">
        <img src="{{ asset('stream/assets/images/ic_subscription.svg') }}" alt="">
        <div class="flex flex-col gap-2">
            <div class="text-white text-[22px] font-semibold">
                {{ ucwords($user_premium->package->name) }} Package
            </div>
            <div class="flex items-center gap-[10px]">
                <div class="progress-bar w-[248px] h-[6px] bg-softpur rounded-full">
                    <div class="progress bg-[#22C58B] w-[113px] h-full rounded-full"></div>
                </div>
                <div class="text-stream-gray text-sm">
                    11 / 30 days
                </div>
            </div>
        </div>
    </div>
    <!-- /Subscription Stat -->
    
    <!-- Benefits -->
    @if(($user_premium->package->max_users) == 7)
    <div class="flex flex-col gap-6 font-medium text-base text-white ml-[150px] mt-[35px] px-[18px]">
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>{{ $user_premium->package->max_users }} Users Limits</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>Up to 8K Quality</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>All Platforms Streaming</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>900+ Movies Available</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>120 Origin Countries</span>
        </div>
    </div>
    @endif
    @if(($user_premium->package->max_users) == 2)
    <div class="flex flex-col gap-6 font-medium text-sm text-white ml-[150px] mt-[35px] px-[18px]">
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>{{ $user_premium->package->max_users }} Users Limits</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>720 & 1080 Full HD</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>TV & Laptop Streaming</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>180 Movies Available</span>
        </div>
        <div class="flex gap-4 items-center">
            <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
            <span>24 Origin Countries</span>
        </div>
    </div>
    @endif
    <!-- /Benefits -->
    
    <!-- Action Button -->
    <div class="flex flex-col gap-[14px] ml-[150px] mt-[20px] max-w-max">
        <form method="post" action="{{ route('member.transaction.store') }}">
            @csrf
            <input type="hidden" name="package_id" value="{{ $user_premium->package_id }}">
            <button 
                type="submit" 
                class="py-[13px] px-[58px] bg-[#5138ED] rounded-md text-center">
                <span class="text-white font-semibold text-base">
                    Make a Renewal
                </span>
            </button>
        </form>
        <a href="{{ route('pricing') }}"
            class="py-[13px] px-[58px] bg-[#5138ED] rounded-md text-center">
            <span class="text-white font-semibold text-base">
                Change Plan
            </span>
        </a>
    </div>
    <!-- /Action Button -->
</div>

<!-- Stop Subscribe -->
<div class="rounded-2xl bg-black p-[30px] m-auto w-max">
    <p class="font-medium text-sm text-white leading-[30px] max-w-[500px] mt-3 mb-[30px]">
        If you wish to stop subscribe our movies please continue
        by clicking the button below. Make sure that you have read our
        terms & conditions beforehand.
    </p>
    <form method="post" action="{{ route('member.user_premium.destroy', $user_premium->id) }}">
        @csrf
        @method('delete')
        <button 
            type="submit"
            class="px-[19px] py-[13px] bg-[#FE4848] rounded-md text-center">
            <span class="text-white font-semibold text-base">
                Stop Subscribe
            </span>
        </a>
    </form>
</div>
<!-- /Stop Subscribe -->
@endsection