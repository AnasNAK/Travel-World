@extends('layout')


@section('Content')

    @include('partials._hero')
    <div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">
        @unless (count($adventures) == 0)
            @foreach ($adventures as $adventure)
                <x-adventure-card :adventure="$adventure" />
            @endforeach
        @else
            <p>No adventures Found</p>
        @endunless

    </div>
@endsection
