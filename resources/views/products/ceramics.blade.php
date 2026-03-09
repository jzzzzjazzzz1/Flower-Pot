@extends('layouts.app')

@section('title', 'Ceramic Pots')

@section('content')

<section class="relative text-white py-20 px-4 text-center overflow-hidden">
    <div class="absolute inset-0">
        <img src="{{ asset('images/ceramics/ceramics-large-pot6.webp') }}"
             class="w-full h-full object-cover" alt="Ceramic Pots">
        <div class="absolute inset-0 bg-green-900/75"></div>
    </div>
    <div class="relative z-10 max-w-3xl mx-auto">
        <p class="text-green-300 uppercase tracking-widest text-xs mb-3 font-semibold">Our Products</p>
        <h1 class="text-4xl md:text-5xl font-extrabold mb-4">Ceramic Pots</h1>
        <p class="text-green-100 text-lg max-w-2xl mx-auto">
            Beautifully crafted ceramic pots in various shapes and sizes.
        </p>
    </div>
</section>

<section class="py-12 px-4 bg-white">
    <div class="max-w-7xl mx-auto">
        @if(!empty($products) && count($products) > 0)
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
                @foreach($products as $item)
                    <x-product-card
                        :image="asset('images/' . $item['image'])"
                        :name="$item['name']"
                    />
                @endforeach
            </div>
        @else
            <p class="text-center text-stone-400 py-16">No ceramic pots available yet.</p>
        @endif
    </div>
</section>

@endsection
