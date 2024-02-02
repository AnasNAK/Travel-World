@props(['adventure'])

<x-card>
    <div class="flex">
        <img class="hidden w-48 mr-6 md:block" src="{{ asset('images/logo.png') }}" alt="" />
        <div>
            <h3 class="text-2xl underline my-2">
                <a href="/home/{{ $adventure->id }}">{{ $adventure->title }}</a>
            </h3>

            <ul class="flex">
                <li
                    class="flex items-center justify-center bg-black text-white rounded-xl py-1 px-3 mr-2 text-xs">
                    <a href="#">Laravel</a>
                </li>

            </ul>
            <div class="text-lg mt-4">
                <i class="fa-solid fa-location-dot"></i> Boston,
                MA
            </div>
            <div class="text-xl font-ms mb-4 text-end">Date : {{ $adventure->updated_at }}</div>
        </div>
    </div>
</x-card>