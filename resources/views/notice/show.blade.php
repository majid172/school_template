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
                {{ $notice->title }}
            </h1>

            <a href="{{ route('notice.download-file',$notice->id) }}"
                class="flex items-center px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-lg hover:bg-green-600 transition-colors shadow shadow-green-500/30" target="_blank">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3">
                    </path>
                </svg>
                ডাউনলোড করুন
            </a>
        </header>

        <!-- Main Content Card -->
        <div class="bg-white p-6 md:p-10 rounded-xl shadow-lg border border-gray-200">
            <div class="space-y-6 text-gray-800">

                <h2 class="text-center text-xl font-bold text-gray-900">বিশেষ বিজ্ঞপ্তি!</h2>

                <p><span class="font-semibold">বিষয়: </span> {{ $notice->title }}</p>
                {!! $notice->description !!}
     
            </div>
        </div>

    </section>
@endsection
