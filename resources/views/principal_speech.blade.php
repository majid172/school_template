@extends('layouts.app')

@section('section')
    @include('includes.breadcumb')

    @foreach ($messages as $item)
        <section class="container mx-auto px-4 py-4">
            <div class="max-w-6xl mx-auto bg-white p-8 md:p-10 shadow-lg rounded-lg">
                <div class="flex flex-col md:flex-row md:gap-12 lg:gap-16">
                    <div class="md:w-1/4 flex-shrink-0 text-center md:text-left">
                        <img src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}" alt="{{ $item->name }}"
                            class="w-32 h-32 object-cover rounded-full mx-auto md:mx-0 ring-4 ring-teal-100">

                        <!-- Name and Designation -->
                        <div class="mt-5">
                            <h3 class="text-2xl font-bold text-gray-800">{{ $item->name }}</h3>
                            <p class="text-md text-gray-500">{{ $item->designation }}</p>
                        </div>
                    </div>

                    <div class="w-full mt-8 md:mt-0">

                        <!-- Title -->
                        <h2 class="text-2xl font-bold text-gray-800">
                            {{ $item->designation == 'Principal' ? 'অধ্যক্ষের' : 'উপাধ্যক্ষের' }} বাণী
                        </h2>

                        @if ($item->short_message)
                            <blockquote class="mt-4 border-l-4 border-teal-500 pl-6 text-gray-600 italic leading-relaxed">
                                <p>"{{ $item->short_message }}"</p>
                            </blockquote>
                        @endif
                    </div>

                </div> 

                <hr class="my-8 border-gray-300">

                <div class="text-gray-700 leading-relaxed">
                    {!! $item->long_message !!}
                </div>

                <div class="mt-12 text-right">
                    <p class="text-lg font-bold text-gray-800">{{ $item->name }}</p>
                    <p class="text-sm text-gray-500">{{ $item->designation }}</p>
                </div>

            </div>
        </section>
    @endforeach
@endsection
