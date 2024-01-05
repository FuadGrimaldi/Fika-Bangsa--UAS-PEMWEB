@extends('member.layouts.base')

@section('title', 'Your Subscription')

@section('title-description', 'You are satisfied with our subscription')

@section('content')
<!-- Subscription Stat -->
<div>
    <div class="lg:py-[50px] bg-black lg:rounded-2xl lg:mx-[140px] lg:my-3 ">
            <div class="flex items-center gap-3 lg:ml-[100px] lg:mx-0 mx-[40px] lg:my-0 py-6">
                <img src="{{ asset('stream/assets/images/ic_subscription.svg') }}" class="lg:h-[55px] lg:w-[55px] h-[30px] w-[30px]" alt="">
                <div class="flex flex-col gap-2">
                    <div class="text-white lg:text-[22px] text-base font-semibold">
                        {{ ucwords($user_premium->package->name) }} Package
                    </div>
                    <div class="flex items-center gap-[10px]">
                        <div class="progress-bar w-[200px] h-[6px] bg-softpur rounded-full">
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
            <div class="flex flex-col gap-6 font-medium lg:text-sm text-xs text-white lg:mt-[35px] lg:px-[18px] lg:ml-[100px] lg:mx-0 mx-6 mt-[20px] px-[18px]">
                <div class="flex gap-4 items-center">
                    <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
                    <span>{{ $user_premium->package->max_users }} Users Limits</span>
                </div>
                <div class="flex gap-4 items-center">
                    <img src="{{ asset('stream/assets/images/ic_check-dark.svg') }}" alt="">
                    <span>Up To 8K Quality</span>
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
            <div class="flex flex-col gap-6 font-medium lg:text-sm text-xs text-white lg:mt-[35px] lg:px-[18px] lg:ml-[100px] lg:mx-0 mx-6 mt-[20px] px-[18px]">
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
            <div class="flex flex-col gap-[14px] lg:ml-[100px] ml-[50px] lg:mt-[20px] lg:pb-0 pb-6 max-w-max">
                <!-- Button -->
                <div class="flex items-baseline mt-[10px] gap-5">
                    <form method="post" action="{{ route('member.transaction.store') }}">
                        @csrf
                        <input type="hidden" name="package_id" value="{{ $user_premium->package_id }}">
                        <button 
                            type="submit" 
                            class="lg:px-[19px] px-3 lg:py-[13px] mt-5 bg-[#225fa6] rounded-[5px]">
                            <span class="text-xs lg:text-base font-normal text-white hover:font-bold">
                                Make a Renewal
                            </span>
                        </button>
                    </form>
                    <a href="{{ route('pricing') }}"
                        class="lg:px-[19px] px-3 lg:py-[13px] mt-5 bg-[#225fa6] rounded-[5px]">
                        <span class="text-xs lg:text-base font-normal text-white hover:font-bold">
                            Change Plan
                        </span>
                    </a>
                </div>
            </div>
            <!-- /Action Button -->
    </div>
    
    <!-- Stop Subscribe -->
    <div class="lg:rounded-2xl lg:bg-[#28130a] p-[30px] lg:m-auto lg:w-max lg:my-[20px] lg:pb-0 mt-0 ml-5 pb-[170px]">
        <p class="font-medium lg:text-sm text-xs text-white leading-[30px] max-w-[500px] mt-3 lg:mb-[30px]">
            If you wish to stop subscribe our movies please continue
            by clicking the button below. Make sure that you have read our
            terms & conditions beforehand.
        </p>
        <form method="post" action="{{ route('member.user_premium.destroy', $user_premium->id) }}">
            @csrf
            @method('delete')
            <button 
                type="submit"
                class="lg:px-[19px] px-3 lg:py-[13px] mt-5 lg:mb-5 bg-red rounded-[5px]">
                <span class="text-xs lg:text-base font-normal text-white hover:font-bold">
                    Stop Subscribe
                </span>
            </a>
        </form>
    </div>
    <!-- /Stop Subscribe -->
</div>
@endsection