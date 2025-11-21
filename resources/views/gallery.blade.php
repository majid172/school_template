@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <section class="md:container md:mx-auto py-8">
        


        <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
            @foreach ($galleries as $item)
                <div>
                    <img class="h-auto max-w-full rounded-base"
                        src="{{ asset('assets/images/gallery/' . $item->image) }}" alt="{{ $item->title }}">
                </div>
            @endforeach
        </div>


    </section>
@endsection
