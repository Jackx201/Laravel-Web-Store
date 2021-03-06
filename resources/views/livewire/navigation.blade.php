<header class="bg-gray-700 sticky top-0">
    {{-- The best athlete wants his opponent at his best. --}}
    
        <div class="container flex items-center h-16">

            <a class=" flex items-center justify-center px-4 flex-col h-16 flex-col bg-white opacity-75" href="#">
                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                    <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    {{-- <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" /> --}}
                </svg>
                <span>Container</span>
            </a>

            <a href="" class="mx-6">
                <x-jet-application-mark class="block h-9 w-auto"/>
            </a>
            @livewire('search')

        <!-- Settings Dropdown -->
        <div class="ml-3 relative">
        @auth
            <x-jet-dropdown align="right" width="48">
                <x-slot name="trigger">
                    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                        </button>
                    @else
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                {{ Auth::user()->name }}

                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    @endif
                </x-slot>

                <x-slot name="content">
                    <!-- Account Management -->
                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Account') }}
                    </div>

                    <x-jet-dropdown-link href="{{ route('profile.show') }}">
                        {{ __('Profile') }}
                    </x-jet-dropdown-link>

                    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                        <x-jet-dropdown-link href="{{ route('api-tokens.index') }}">
                            {{ __('API Tokens') }}
                        </x-jet-dropdown-link>
                    @endif

                    <div class="border-t border-gray-100"></div>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}" x-data>
                        @csrf

                        <x-jet-dropdown-link href="{{ route('logout') }}"
                                    @click.prevent="$root.submit();">
                            {{ __('Log Out') }}
                        </x-jet-dropdown-link>
                    </form>
                </x-slot>
            </x-jet-dropdown>
            @else
            <x-jet-dropdown allign="right" width="48">
                <x-slot name="trigger">
                    <i class = "fa fa-user-circle text-white text-4xl mx-1"></i>
                </x-slot>

                <x-slot name="content">
                    <x-jet-dropdown-link href="{{route('login')}}">
                        {{__('Login')}}
                    </x-jet-dropdown-link>
                    
                    <x-jet-dropdown-link href="{{route('register')}}">
                        {{__('Register')}} 
                    </x-jet-dropdown-link>
                </x-slot>


            </x-jet-dropdown>
        @endauth
        </div>
            <div class="px-4">
                @livewire('dropdown-cart')
            </div>

            <nav class="bg-gray-700 bg-opacity-25 w-full absolute" id="navigation-menu">

            </nav>
        </div>
</header>