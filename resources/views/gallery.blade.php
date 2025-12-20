@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <section class="md:container md:mx-auto py-8 px-4">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 justify-center">
            @foreach ($galleries as $item)
                <div class="group relative h-80 w-full overflow-hidden rounded-xl shadow-lg cursor-pointer">
                    <img class="h-full w-full object-cover transition-transform duration-500 group-hover:scale-110" 
                         src="data:image/jpeg;base64,{{ base64_encode($item->image) }}"
                         alt="{{ $item->title }}">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90"></div>
                    <div class="absolute bottom-0 w-full p-4 text-center">
                        <h3 class="text-lg font-bold text-white drop-shadow-md">
                            {{ $item->title }}
                        </h3>
                    </div>

                </div>
            @endforeach
        </div>
    </section>
@endsection