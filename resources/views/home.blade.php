@extends('layouts.app')
@section('section')
    <section class="container mx-auto px-4 pt-8">
        <div id="hero-carousel" class="relative w-full" data-carousel="slide">

            <div class="relative h-[350px] overflow-hidden rounded-2xl md:h-[500px]">
                @forelse ($banners as $item)
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-full">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('data:image/jpeg;base64,{{ base64_encode($item->image) }}');">
                            </div>
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}
                            <div class="absolute inset-0 flex items-center justify-center px-4">
                                <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-4xl text-center">
                                    {{ $item->title }}
                                </h1>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                        <div class="relative w-full h-full">
                            <!-- Background Image -->
                            <div class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{ asset('assets/images/banner/banner1.jpg') }}');">
                            </div>
                            {{-- <div class="absolute inset-0 bg-black bg-opacity-50"></div> --}}
                            <div class="absolute inset-0 flex items-center justify-center px-4">
                                <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-4xl text-center">
                                    Quality education is about possibilities. It is about success in real life.
                                </h1>
                            </div>
                        </div>
                    </div>
                @endforelse

                {{--

                <!-- Item 2 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-full h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/images/banner/banner2.jpg') }}');">

                        <div class="absolute inset-0  bg-opacity-50 flex items-center">
                            <div class="w-full text-center px-4">
                                <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-4xl mx-auto">
                                    Discovering the potential within every child.
                                </h1>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Item 3 -->
                <div class="hidden duration-700 ease-in-out" data-carousel-item>
                    <div class="absolute block w-full h-full bg-cover bg-center"
                        style="background-image: url('{{ asset('assets/images/banner/banner3.jpg') }}');">

                        <div class="absolute inset-0  bg-opacity-50 flex items-center">
                            <div class="w-full text-center px-4">
                                <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-4xl mx-auto">
                                    Building a foundation for a brighter future.
                                </h1>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>


            <div class="absolute z-30 flex space-x-2 -translate-y-1/2 bottom-8 left-8">
                @foreach ($banners as $key => $item)
                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                        data-carousel-slide-to="{{ ++$key }}"></button>
                @endforeach
                {{-- <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button> --}}
            </div>


            <div class="absolute z-30 flex space-x-2 bottom-6 right-8">
                <button type="button"
                    class="flex items-center justify-center h-10 w-10 rounded-md bg-brand-green hover:bg-opacity-80 transition"
                    data-carousel-prev>
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m15 19-7-7 7-7" />
                    </svg>
                    <span class="sr-only">Previous</span>
                </button>
                <button type="button"
                    class="flex items-center justify-center h-10 w-10 rounded-md bg-brand-green hover:bg-opacity-80 transition"
                    data-carousel-next>
                    <svg class="w-5 h-5 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m9 5 7 7-7 7" />
                    </svg>
                    <span class="sr-only">Next</span>
                </button>
            </div>

        </div>
    </section>

    <div class="bg-slate-50">
        <div class="container mx-auto px-4 py-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
                <div class="lg:col-span-2 space-y-12">
                    <!-- About Section -->
                    <section>
                        <div class="relative flex flex-col md:flex-row items-center">

                            <div class="w-full md:w-3/5 flex-shrink-0">
                                <img src="data:image/jpeg;base64,{{ base64_encode($about->image) }}" alt="School Building"
                                    class="w-full h-80 object-cover rounded-xl shadow-md">

                            </div>
                            <!-- Text Box -->
                            <div
                                class="w-full md:w-3/5 bg-white p-8 rounded-xl shadow-lg md:-ml-20 mt-[-40px] md:mt-0 relative z-10">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $about->title }}</h2>
                                <p class="text-gray-600 leading-relaxed text-sm mb-6">{{ $about->short_description }}</p>
                                <a href="{{ route('about') }}"
                                    class="inline-block bg-teal-50 text-teal-600 font-semibold px-5 py-2 rounded-full text-sm hover:bg-teal-100 transition-colors">
                                    বিস্তারিত পড়ুন
                                </a>
                            </div>
                        </div>
                    </section>

                    <section>
                        <!-- Section Header -->
                        <div class="flex justify-between items-center mb-6">
                            <h2 class="text-2xl font-bold text-gray-800 flex items-center gap-3">
                                <svg class="w-7 h-7 text-teal-600" fill="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5-10-5-10 5z" />
                                </svg>
                                পরিচালকদের বাণী
                            </h2>

                            <div class="flex items-center gap-2">
                                <button
                                    class="p-2 rounded-full border border-gray-300 text-gray-500 hover:bg-gray-100 transition">&lt;</button>
                                <button
                                    class="p-2 rounded-full border border-gray-300 text-gray-500 hover:bg-gray-100 transition">&gt;</button>
                            </div>

                        </div>

                        <!-- Message Cards -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            @foreach ($messages as $item)
                                <div class="bg-white p-6 rounded-xl border border-gray-200">
                                    <div class="flex gap-4">
                                        <img src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}"
                                            alt="{{ $item->name }}"
                                            class="w-24 h-24 rounded-full object-cover flex-shrink-0" />

                                        <div class="relative">
                                            <span
                                                class="absolute -top-2 left-0 text-6xl font-serif text-teal-600 opacity-50">”</span>
                                            <h3 class="text-lg font-bold text-gray-800 pt-5">
                                                {{ $item->designation == 'Principal' ? 'অধ্যক্ষের' : 'উপাধ্যক্ষের ' }} বাণী
                                            </h3>
                                            <p class="text-sm font-semibold text-gray-600">{{ $item->name }}</p>
                                        </div>
                                    </div>
                                    <p class="text-sm text-gray-600 mt-4 leading-relaxed line-clamp-4">
                                        {{ $item->short_message }}
                                    </p>

                                    <a href="{{ route('speech') }}"
                                        class="inline-block bg-teal-50 text-teal-600 font-semibold px-5 py-2 rounded-full text-sm hover:bg-teal-100 transition-colors mt-2">
                                        বিস্তারিত পড়ুন
                                    </a>
                                </div>
                            @endforeach


                        </div>
                    </section>
                </div>


                <aside class="space-y-8">
                    <!-- Notice Board -->
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
                            <svg class="w-6 h-6 text-red-500" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 12.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z">
                                </path>
                            </svg>
                            নোটিশ বোর্ড
                        </h3>
                        <ul class="space-y-3">
                            @forelse ($notices as $notice)
                                <li
                                    class="flex justify-between items-center text-sm p-2 border-b border-gray-100 last:border-b-0">
                                    <span class="flex items-center gap-3 text-gray-700">
                                        <span class="flex-shrink-0 bg-red-100 text-red-600 rounded-full p-1.5">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        {{ $notice->title }}
                                    </span>
                                    <a href="{{ route('notice.show', $notice->id) }}"
                                        class="flex-shrink-0 bg-teal-50 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold hover:bg-teal-100 transition">
                                        বিস্তারিত
                                    </a>
                                </li>

                                @empty
                                <li
                                    class="flex justify-between items-center text-sm p-2 border-b border-gray-100 last:border-b-0">
                                    <span class="flex items-center gap-3 text-gray-700">
                                        <span class="flex-shrink-0 bg-red-100 text-red-600 rounded-full p-1.5">
                                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path fill-rule="evenodd"
                                                    d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                                    clip-rule="evenodd"></path>
                                            </svg>
                                        </span>
                                        No notice found
                                    </span>
                                    <a href="javascript:void(0)"
                                        class="flex-shrink-0 bg-teal-50 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold hover:bg-teal-100 transition">
                                        বিস্তারিত
                                    </a>
                                </li>
                            @endforelse
                        </ul>
                        <a href="{{ route('notice.list') }}"
                            class="w-full mt-6 bg-teal-600 text-white text-center block py-2 rounded-md font-semibold hover:bg-teal-700 transition-colors">
                            সকল নোটিশ →
                        </a>
                    </div>

                    <!-- Important Links -->
                    <div class="bg-white p-6 rounded-xl border border-gray-200">
                        <h3 class="text-xl font-bold text-gray-800 mb-5 flex items-center gap-2">
                            <svg class="w-6 h-6 text-teal-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                            </svg>
                            গুরুত্বপূর্ণ লিঙ্ক সমূহ
                        </h3>
                        <ul class="space-y-3">

                            <li
                                class="flex justify-between items-center text-sm p-2 border-b border-gray-100 last:border-b-0">
                                <span class="flex items-center gap-3 text-gray-700">
                                    <span class="flex-shrink-0 text-red-500">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1">
                                            </path>
                                        </svg>
                                    </span>
                                    ffdsa
                                </span>
                                <a href="#"
                                    class="flex-shrink-0 bg-teal-50 text-teal-600 px-3 py-1 rounded-full text-xs font-semibold hover:bg-teal-100 transition">
                                    ভিজিট করুন
                                </a>
                            </li>

                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>

    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">আমাদের অভিজ্ঞ শিক্ষকবৃন্দ</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-emerald-500 to-teal-400 mx-auto rounded-full mt-3"></div>
                <p class="text-gray-500 mt-2">আমাদের নিবেদিতপ্রাণ শিক্ষকমণ্ডলী, যারা শিক্ষার্থীদের পথপ্রদর্শক।</p>
            </div>

            <div class="flex flex-wrap justify-center gap-8">
                @foreach ($teachers as $item)
                    <div
                        class="w-full md:w-96 bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center justify-center gap-5 p-4 border border-gray-100">

                        <div class="flex-shrink-0">
                            <img src="data:image/jpeg;base64,{{ base64_encode($item->photo) }}"
                                alt="{{ $item->name_en }}" class="w-28 h-32 md:w-32 md:h-36 object-cover rounded-lg">
                        </div>

                        <div class="flex flex-col h-full w-full">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">
                                    {{ $item->name_en }} ( {{ $item->name_bn }})
                                </h3>
                                <p class="text-sm text-gray-500 mb-3">({{ $item->designation }})</p>
                            </div>

                            <div class="flex items-center gap-2 mb-4">
                                <!-- Social Icons (Kept as is) -->
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.518.76a11.024 11.024 0 006.25 6.25l.76-1.518a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 2.086l7.997 3.798A2 2 0 0018 7.682V18a2 2 0 01-2 2H4a2 2 0 01-2-2V7.682a2 2 0 00-.003-1.798zM12 11a2 2 0 10-4 0 2 2 0 004 0zM4 18V8.044l6-2.857 6 2.857V18H4z">
                                        </path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.336 8.905H4.002v-8.59h2.671v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </a>
                            </div>

                            <div class="mt-auto">
                                <a href="{{ route('teacher.show', $item->id) }}"
                                    class="inline-block bg-teal-50 text-teal-700 font-semibold px-4 py-2 rounded-full text-sm hover:bg-teal-100 transition-colors group">
                                    বিস্তারিত <span
                                        class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div class="text-center mt-8">
                <a href="{{ route('teachers.list') }}"
                    class="bg-green-100 text-brand-green px-6 py-2 rounded-md font-semibold hover:bg-green-200">সকল শিক্ষক
                    →</a>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-100 relative overflow-hidden" id="stats-section">

        <div
            class="absolute top-0 left-0 w-64 h-64 bg-emerald-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob">
        </div>
        <div
            class="absolute top-0 right-0 w-64 h-64 bg-blue-100 rounded-full mix-blend-multiply filter blur-3xl opacity-30 animate-blob animation-delay-2000">
        </div>

        <div class="container mx-auto px-4 relative z-10">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">ছাত্র পরিসংখ্যান</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-emerald-500 to-teal-400 mx-auto rounded-full mt-3"></div>
                <p class="mt-4 max-w-2xl mx-auto text-gray-500">
                    আমাদের প্রতিটি শ্রেণীতে মোট শিক্ষার্থীর সংখ্যা।
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @forelse ($classWiseStudent as $item)
                    <div
                        class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div
                            class="absolute -top-6 -right-6 w-24 h-24 bg-emerald-50 rounded-full group-hover:bg-emerald-100 transition-colors duration-300">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 mx-auto bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.499 5.24 50.552 50.552 0 00-2.658.814m-15.482 0A50.55 50.55 0 0112 13.489a50.55 50.55 0 0112-4.02" />
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <span class="counter text-5xl font-extrabold text-gray-800 tracking-tight"
                                    data-target="{{ $item->enrollments_count }}">{{ $item->enrollments_count }}</span>
                            </div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                            <h5
                                class="text-lg font-bold text-emerald-700 bg-emerald-50 py-2 rounded-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                                Class {{ $item->class_name }}</h5>
                        </div>
                    </div>
                @empty
                    <div
                        class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                        <div
                            class="absolute -top-6 -right-6 w-24 h-24 bg-emerald-50 rounded-full group-hover:bg-emerald-100 transition-colors duration-300">
                        </div>
                        <div class="relative z-10">
                            <div
                                class="w-14 h-14 mx-auto bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.499 5.24 50.552 50.552 0 00-2.658.814m-15.482 0A50.55 50.55 0 0112 13.489a50.55 50.55 0 0112-4.02" />
                                </svg>
                            </div>
                            <div class="flex items-center justify-center">
                                <span class="counter text-5xl font-extrabold text-gray-800 tracking-tight"
                                    data-target="500">500</span>
                            </div>
                            <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                            <h5
                                class="text-lg font-bold text-emerald-700 bg-emerald-50 py-2 rounded-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                               Empty Class </h5>
                        </div>
                    </div>
                @endforelse
                <!-- Item 1: Class One -->


                {{-- <!-- Item 2: Class Play -->
                <div
                    class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-blue-50 rounded-full group-hover:bg-blue-100 transition-colors duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mx-auto bg-blue-100 text-blue-600 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.182 15.182a4.5 4.5 0 01-6.364 0M21 12a9 9 0 11-18 0 9 9 0 0118 0zM9.75 9.75c0 .414-.168.75-.375.75S9 10.164 9 9.75 9.168 9 9.375 9s.375.336.375.75zm-.375 0h.008v.015h-.008V9.75zm5.625 0c0 .414-.168.75-.375.75s-.375-.336-.375-.75.168-.75.375-.75.375.336.375.75zm-.375 0h.008v.015h-.008V9.75z" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="counter text-5xl font-extrabold text-gray-800 tracking-tight"
                                data-target="200">200</span>
                        </div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                        <h5
                            class="text-lg font-bold text-blue-700 bg-blue-50 py-2 rounded-lg group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                            Class Play</h5>
                    </div>
                </div>

                <!-- Item 3: Class Two (Zero State) -->
                <div
                    class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden opacity-90">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-gray-50 rounded-full group-hover:bg-gray-100 transition-colors duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mx-auto bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="counter text-5xl font-extrabold text-gray-300 tracking-tight"
                                data-target="0">0</span>
                        </div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                        <h5
                            class="text-lg font-bold text-gray-600 bg-gray-50 py-2 rounded-lg group-hover:bg-gray-600 group-hover:text-white transition-colors duration-300">
                            Class Two</h5>
                    </div>
                </div>

                <!-- Item 4: Class Six -->
                <div
                    class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-md hover:shadow-xl transition-all duration-300 relative overflow-hidden opacity-90">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-gray-50 rounded-full group-hover:bg-gray-100 transition-colors duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mx-auto bg-gray-100 text-gray-400 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="counter text-5xl font-extrabold text-gray-300 tracking-tight"
                                data-target="0">0</span>
                        </div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                        <h5
                            class="text-lg font-bold text-gray-600 bg-gray-50 py-2 rounded-lg group-hover:bg-gray-600 group-hover:text-white transition-colors duration-300">
                            Class Six</h5>
                    </div>
                </div>

                <!-- Item 5: Class Seven -->
                <div
                    class="group bg-white rounded-2xl p-6 text-center border border-gray-100 shadow-lg hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 relative overflow-hidden">
                    <div
                        class="absolute -top-6 -right-6 w-24 h-24 bg-emerald-50 rounded-full group-hover:bg-emerald-100 transition-colors duration-300">
                    </div>
                    <div class="relative z-10">
                        <div
                            class="w-14 h-14 mx-auto bg-emerald-100 text-emerald-600 rounded-full flex items-center justify-center mb-4 text-2xl group-hover:scale-110 transition-transform duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div class="flex items-center justify-center">
                            <span class="counter text-5xl font-extrabold text-gray-800 tracking-tight"
                                data-target="2">0</span>
                        </div>
                        <p class="text-xs font-bold text-gray-400 uppercase tracking-widest mt-1 mb-4">Students</p>
                        <h5
                            class="text-lg font-bold text-emerald-700 bg-emerald-50 py-2 rounded-lg group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                            Class Seven</h5>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>


    @if ($galleries->count() > 0)
        <section class="md:container md:mx-auto py-10 px-4 overflow-hidden">

            <div class="flex justify-between items-end mb-6 border-b border-gray-200 pb-2">
                <h2 class="text-2xl font-bold text-gray-800">ছবি এবং ভিডিও গ্যালারী</h2>
            </div>

            <!-- Slider Container -->
            <div class="flex overflow-hidden relative group">

                <!-- Sliding Track -->
                <!-- Note: We put both loops inside ONE div -->
                <div class="flex gap-6 animate-loop-scroll w-max hover:cursor-grab">

                    <!-- LOOP 1: Original Data -->
                    @foreach ($galleries as $item)
                        <div class="relative h-80 w-80 flex-shrink-0 overflow-hidden rounded-lg shadow-lg">
                            <img class="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
                                src="data:image/jpeg;base64,{{ base64_encode($item->image) }}"
                                alt="{{ $item->title }}">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 pointer-events-none">
                            </div>

                            <div class="absolute bottom-0 w-full p-6 text-center pointer-events-none">
                                <h3 class="text-lg font-bold text-white drop-shadow-md leading-tight">
                                    {{ $item->title }}
                                </h3>
                                @if (isset($item->description))
                                    <p class="text-sm text-gray-200 mt-1">{{ $item->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                    <!-- LOOP 2: Duplicate Data (REQUIRED for no blank space) -->
                    @foreach ($galleries as $item)
                        <div class="relative h-80 w-80 flex-shrink-0 overflow-hidden rounded-lg shadow-lg">
                            <img class="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
                                src="data:image/jpeg;base64,{{ base64_encode($item->image) }}"
                                alt="{{ $item->title }}">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/40 to-transparent opacity-90 pointer-events-none">
                            </div>

                            <div class="absolute bottom-0 w-full p-6 text-center pointer-events-none">
                                <h3 class="text-lg font-bold text-white drop-shadow-md leading-tight">
                                    {{ $item->title }}
                                </h3>
                                @if (isset($item->description))
                                    <p class="text-sm text-gray-200 mt-1">{{ $item->description }}</p>
                                @endif
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>

            <!-- Footer Button -->
            <div class="flex justify-center mt-10">
                <a href="{{ route('gallery.list') }}"
                    class="bg-emerald-50 text-emerald-700 font-medium px-6 py-2 rounded hover:bg-emerald-100 transition flex items-center gap-2">
                    আরো দেখুন
                    <span>&rarr;</span>
                </a>
            </div>

        </section>
    @endif




    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">
            <div class="mb-8">
                <h2 class="text-3xl text-center font-bold text-slate-800">সংবাদ/ব্লগ</h2>
                <div class="w-24 h-1.5 bg-gradient-to-r from-emerald-500 to-teal-400 mx-auto rounded-full mt-3"></div>
            </div>


            <div class="flex flex-wrap justify-center gap-8">
                @forelse ($blogs as $item)
                    <div
                        class="w-full max-w-sm bg-white rounded-lg overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <div class="h-56 overflow-hidden">
                            <img src="data:image/jpeg;base64,{{ base64_encode($item->image) }}" alt="Student studying"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">
                            <div class="flex justify-between items-center text-sm text-gray-500 mb-3">
                                <span class="font-medium">Post by: <span
                                        class="text-slate-800 font-semibold">{{ $item->author }}</span></span>
                                <span>Date: {{ $item->created_at }}</span>
                            </div>
                            <h3 class="text-xl font-bold text-teal-700 mb-6 leading-snug flex-grow">
                                <a href="{{ route('blog.show', [$item->id, $item->slug]) }}">{{ $item->title }}</a>
                            </h3>
                            <div>
                                <a href="{{ route('blog.show', [$item->id, $item->slug]) }}"
                                    class="inline-flex items-center bg-emerald-50 text-emerald-700 px-4 py-2 rounded-full font-semibold text-sm hover:bg-emerald-100 transition-colors">
                                    বিস্তারিত পড়ুন
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div
                        class="w-full max-w-sm bg-white rounded-lg overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                        <div class="h-56 overflow-hidden">
                            <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?q=80&w=1000&auto=format&fit=crop"
                                alt="Student studying"
                                class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="p-6 flex flex-col flex-grow">

                            <h3 class="text-xl font-bold text-slate-800 mb-6 leading-snug flex-grow">
                                কোনো সংবাদ / ব্লগ পাওয়া যায়নি
                            </h3>

                        </div>
                    </div>
                @endforelse


            </div>

            <div class="text-center mt-8">
                <a href="{{ route('blogs.list') }}"
                    class="bg-teal-100 text-teal-700 px-6 py-2 rounded-md font-semibold hover:bg-green-200">সকল ব্লগ →</a>
            </div>
        </div>
    </section>

    <style>
        @keyframes loop-scroll {
            from {
                transform: translateX(0);
            }

            to {
                /* We change this to -50% because we have 2 sets of data.
                                   When we move 50%, the second set is exactly where the first set started. */
                transform: translateX(-50%);
            }
        }

        .animate-loop-scroll {
            /* Adjust time here (e.g. 40s) for speed */
            animation: loop-scroll 40s linear infinite;
        }

        .group:hover .animate-loop-scroll {
            animation-play-state: paused;
        }
    </style>
@endsection
@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const counters = document.querySelectorAll('.counter');

            // Initialize counters to 0 if their data-target > 0
            counters.forEach(c => {
                const target = Number(c.getAttribute('data-target')) || 0;
                c.textContent = target > 0 ? '0' : '0'; // show 0 for all; zero-target will stay 0
            });

            // easing function (easeOutQuad)
            const easeOutQuad = t => t * (2 - t);

            const animateCounter = (counter) => {
                const target = Number(counter.getAttribute('data-target')) || 0;
                if (target === 0) {
                    counter.textContent = '0';
                    return;
                }

                // duration in ms (you can tweak this)
                const duration = Math.min(2500, Math.max(800, target * 6));

                let startTime = null;

                function step(timestamp) {
                    if (!startTime) startTime = timestamp;
                    const elapsed = timestamp - startTime;
                    const progress = Math.min(elapsed / duration, 1);
                    const eased = easeOutQuad(progress);
                    const current = Math.floor(eased * target);

                    counter.textContent = current.toLocaleString(); // optional: adds thousands separators

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        // ensure final value exactly matches target
                        counter.textContent = target.toLocaleString();
                    }
                }

                requestAnimationFrame(step);
            };

            // Intersection Observer: animate when element is at least 50% visible
            const observer = new IntersectionObserver((entries, obs) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        obs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.5
            });

            counters.forEach(c => observer.observe(c));
        });
    </script>
@endpush
