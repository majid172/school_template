@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')
    <section class="container mx-auto py-8 px-4">

        <!-- Header Bar with Navigation and Actions -->
        <header class="flex items-center justify-between mb-6">
            <a href="{{ route('notice.list') }}"
                class="flex items-center px-4 py-2 bg-white text-gray-800 text-sm font-semibold rounded-lg hover:bg-gray-200 border border-gray-200 transition-colors">
                <!-- Back Arrow Icon SVG -->
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
                নোটিশে ফিরুন
            </a>

            <h1 class="text-lg font-semibold text-gray-700 hidden md:block text-center">
                {{ $blog->title }}
            </h1>

        </header>

        <!-- Main Content Card -->
        <div class="bg-white p-6 md:p-10 rounded-xl shadow-lg border border-gray-200">
            <div class="space-y-6 text-gray-800">


                {!! $blog->content !!}

            </div>
        </div>

    </section>
@endsection
