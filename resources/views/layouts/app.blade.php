@extends('layouts.base')

@push('meta')
    <meta name="robots" content="all, noindex, nofollow">
    <meta name="googlebot" content="all, noindex, nofollow">
@endpush

@section('body')
<div class="h-screen bg-gray-100 leading-none">
    <nav class="bg-blue-900 shadow mb-8 py-6">
        <div class="container mx-auto px-6 md:px-0">
            <div class="flex items-center justify-center">
                <div class="mr-6">
                    <a href="{{ url('/') }}" class="text-lg font-semibold text-gray-100 no-underline">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>
                <div class="flex-1 text-right">
                    @guest
                        <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('login') }}">{{ __('Login') }}</a>
                        @if (Route::has('register'))
                            <a class="no-underline hover:underline text-gray-300 text-sm p-3" href="{{ route('register') }}">{{ __('Register') }}</a>
                        @endif
                    @else
                        <span class="text-gray-300 text-sm pr-4">{{ Auth::user()->name }}</span>
                        <a href="{{ route('logout') }}" class="no-underline hover:underline text-gray-300 text-sm p-3"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }} <x-heroicon-o-logout class="inline ml-2 w-4 h-4 text-gray-200"/>
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">{{ csrf_field() }}</form>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <main class="flex-grow">
        @yield('content')
    </main>

    <footer>
    </footer>
</div>
@endsection
