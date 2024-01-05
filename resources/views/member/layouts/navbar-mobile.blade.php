<nav class="py-5 relative">
            <div class="flex flex-col w-full lg:flex-row lg:items-center">
                <!-- Logo & Toggler Button here -->
                <div class="flex items-center justify-between block lg:hidden">
                    <!-- LOGO -->
                    <a href="/" class="w-full">
                        <img src="{{ asset('stream/assets/images/fika.png') }}" alt="fika" height="50px" width="100px"/>
                    </a>
                    <!-- RESPONSIVE NAVBAR BUTTON TOGGLER -->
                    <div>
                        <button class="p-1 outline-none mobile-menu-button mr-3" data-target="#navigation">
                            <svg class="text-white w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M4 8h16M4 16h16"></path>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="hidden w-full lg:block" id="navigation">
                    <div class="flex flex-col items-baseline mt-6 -ml-3">
                        <div class="flex flex-col w-full font-normal">
                            <a
                            href="{{ route('member.dashboard') }}"
                            class="side-link px-7 py-2 rounded-md text-xs font-extralight text-white hover:font-bold">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M2 17L12 22L22 17" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M2 12L12 17L22 12" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" />
                            </svg>
                            Watch Movie
                            </a>
                        </div>
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.categories') }}"
                            class="side-link px-7 py-2 rounded-md text-xs font-extralight text-white hover:font-bold">
                            <svg width="20" height="20" class="group" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2 12H22" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                    d="M12 2C14.5013 4.73835 15.9228 8.29203 16 12C15.9228 15.708 14.5013 19.2616 12 22C9.49872 19.2616 8.07725 15.708 8 12C8.07725 8.29203 9.49872 4.73835 12 2V2Z"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            categories
                            </a>
                        </div>
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.user_premium.index') }}"
                            class="side-link px-7 py-2 rounded-md text-xs font-extralight text-white hover:font-bold">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M21 4H3C1.89543 4 1 4.89543 1 6V18C1 19.1046 1.89543 20 3 20H21C22.1046 20 23 19.1046 23 18V6C23 4.89543 22.1046 4 21 4Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M1 10H23" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Subscription
                            </a>
                        </div>
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.profile') }}"
                            class="side-link px-7 py-2 rounded-md text-xs font-extralight text-white hover:font-bold">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                d="M20 21V19C20 17.9391 19.5786 16.9217 18.8284 16.1716C18.0783 15.4214 17.0609 15 16 15H8C6.93913 15 5.92172 15.4214 5.17157 16.1716C4.42143 16.9217 4 17.9391 4 19V21"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path
                                d="M12 11C14.2091 11 16 9.20914 16 7C16 4.79086 14.2091 3 12 3C9.79086 3 8 4.79086 8 7C8 9.20914 9.79086 11 12 11Z"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Account Setting
                            </a>
                        </div>
                        <div class="flex flex-col w-full font-normal lg:w-auto lg:gap-12 lg:items-center lg:flex-row">
                            <a
                            href="{{ route('member.logout') }}"
                            class="side-link px-7 py-2 rounded-md text-xs font-extralight text-white hover:font-bold">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18.36 6.64001C19.6184 7.8988 20.4753 9.50246 20.8223 11.2482C21.1693 12.994 20.9909 14.8034 20.3096 16.4478C19.6284 18.0921 18.4748 19.4976 16.9948 20.4864C15.5148 21.4752 13.7749 22.0029 11.995 22.0029C10.2151 22.0029 8.47515 21.4752 6.99517 20.4864C5.51519 19.4976 4.36164 18.0921 3.68036 16.4478C2.99909 14.8034 2.82069 12.994 3.16772 11.2482C3.51475 9.50246 4.37162 7.8988 5.63 6.64001"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M12 2V12" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Sign Out
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </nav>