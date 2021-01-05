@extends('layouts.app')


@section('content')
    @include('partials.topbar')
    <hr>
    @include('partials.navbar')
    <hr>
    @include('partials.hero')
    <hr>
    @include('partials.content')
    <livewire:pricing-component />
    @include('partials.content2')

    {{-- share --}}
    <div class="bg-gray-200">
        <div class="container mx-auto px-6 xl:px-24 sm:flex  justify-between py-5 items-center">
            <a class="text-gray-600 font-semibold">Bagikan jika Anda menyukai halaman ini.</a>
            <div class="flex  space-x-3">
                <span class="flex items-center cursor-pointer  space-x-1 ">
                    <img src="{{asset('img/facebook.svg')}}" alt="" class="h-8">
                    <span class="border rounded px-4 py-1 text-gray-500 border-gray-400"> 80k</span>
                </span>
                <span class="flex items-center cursor-pointer  space-x-1">
                    <img src="{{asset('img/twitter.svg')}}" alt="" class="h-8">
                    <span class="border rounded px-4 py-1 text-gray-500 border-gray-400"> 450</span>
                </span>
                <span class="flex items-center cursor-pointer  space-x-1">
                    <img src="{{asset('img/google-plus.svg')}}" alt="" class="h-8">
                    <span class="border rounded px-4 py-1 text-gray-500 border-gray-400"> 1900</span>
                </span>
            </div>
        </div>
    </div>
    <div class="bg-blue-500">
        <div class="container mx-auto px-6 xl:px-24 lg:flex justify-between py-16 items-center">
            <h3 class="text-3xl text-white sm:text-left text-center">Perlu <strong>BANTUAN?</strong> Hubungi Kami : <strong>0274-5305505</strong></h3>
            <button class="border-2 border-white rounded-full px-6 py-2 text-white hover:bg-white hover:text-blue-500 font-bold flex mt-3 mx-auto">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6 ">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2v4l-4-4H9a1.994 1.994 0 01-1.414-.586m0 0L11 14h4a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2v4l.586-.586z" />
                  </svg>
                Live Chat
            </button>
        </div>
    </div>

    {{-- footer --}}
    <div class="bg-gray-800 ">
        @include('partials.footer')
        @include('partials.copyright')
    </div>


@endsection
