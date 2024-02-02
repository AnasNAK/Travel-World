@extends('layout')

@section('Content')
    <a href="/" class="inline-block text-black ml-4 mb-4"><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <div class="mx-4">
        <x-card class="p-10">
            <div class="flex flex-col items-center justify-center text-center">
                <img class="w-48 mr-6 mb-6" src="{{ asset('images/logo.png') }}" alt="" />

                <h3 class="text-2xl mb-2">{{ $adventure->title }}</h3>

                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Laravel</a>
                    </li>

                </ul>
                <div class="text-lg my-4">
                    <i class="fa-solid fa-location-dot"></i> Daytona, FL
                </div>
                <ul class="flex">
                    <li class="bg-black text-white rounded-xl px-3 py-1 mr-2">
                        <a href="#">Laravel</a>
                    </li>

                </ul>
                <div class="border border-gray-200 w-full mb-6"></div>
                <div>
                    <h3 class="text-3xl font-bold mb-4">
                        Travel Description
                    </h3>
                    <div class="text-lg space-y-6">
                        <p>
                            {{ $adventure->description }}
                        </p>
                        <h3 class="text-3xl font-bold mb-4">
                            Advice
                        </h3>
                        <p>
                            {{ $adventure->advice }}
                        </p>
                        <div class="text-xl font-ms mb-4">Date : {{ $adventure->updated_at }}</div>

               
                    </div>
                </div>

            </div>

        </x-card>
    </div>
@endsection
