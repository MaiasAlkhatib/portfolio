@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-6">Showroom</h1>

    <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
        @foreach ($cars as $car)
            <div class="bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition cursor-pointer"
                 onclick="window.location='{{ route('contact') }}'">
                 
                <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $car['name'] }} - {{ $car['model'] }}</h2>
                </div>

                <img src="{{ asset($car['image']) }}" 
                     alt="{{ $car['name'] }} {{ $car['model'] }}" 
                     class="w-full h-48 object-cover">

                <div class="p-4 flex justify-between items-center">
                    <span class="font-bold text-blue-600">
                        €{{ number_format($car['price'], 0, ',', '.') }}
                    </span>

                    {{-- Alleen zichtbaar op desktop --}}
                    <a href="{{ route('contact') }}" 
                       class="hidden md:inline-block bg-blue-500 text-white px-3 py-1 rounded-lg hover:bg-blue-600">
                        Bekijk details
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
