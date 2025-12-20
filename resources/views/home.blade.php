@extends('layouts.app')
@section('section')
    <section class="container mx-auto px-4 pt-8">
        <div id="hero-carousel" class="relative w-full" data-carousel="slide">

            <div class="relative h-[350px] overflow-hidden rounded-2xl md:h-[500px]">
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
                </div>
            </div>


            <div class="absolute z-30 flex space-x-2 -translate-y-1/2 bottom-8 left-8">
                <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                    data-carousel-slide-to="0"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                    data-carousel-slide-to="1"></button>
                <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                    data-carousel-slide-to="2"></button>
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
                                <img src="{{ ($about && $about->image) ? 'data:image/jpeg;base64,' . base64_encode($about->image) : asset('assets/images/campus.jpg') }}" alt="School Building"
                                    class="w-full h-80 object-cover rounded-xl shadow-md">

                            </div>
                            <!-- Text Box -->
                            <div
                                class="w-full md:w-3/5 bg-white p-8 rounded-xl shadow-lg md:-ml-20 mt-[-40px] md:mt-0 relative z-10">
                                <h2 class="text-2xl font-bold text-gray-800 mb-4">{{ $about->title ?? 'About Our School' }}</h2>
                                <p class="text-gray-600 leading-relaxed text-sm mb-6">{{ $about->short_description ?? 'Welcome to our institution. We are dedicated to providing quality education and fostering potential in every child.' }}</p>
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
                                        <img src="{{ ($item && $item->image) ? 'data:image/jpeg;base64,' . base64_encode($item->image) : asset('assets/images/teachers/principle.jpg') }}"
                                            alt="{{ $item->name ?? 'Director' }}"
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
                            @foreach ($notices as $notice)
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
                            @endforeach
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


    <!-- Our Teachers Section -->
    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-800">আমাদের অভিজ্ঞ শিক্ষকবৃন্দ</h2>
                <p class="text-gray-500 mt-2">আমাদের নিবেদিতপ্রাণ শিক্ষকমণ্ডলী, যারা শিক্ষার্থীদের পথপ্রদর্শক।</p>
            </div>

            @foreach ($teachers as $item)
                <div class="grid grid-cols-1 md:grid-cols-4 gap-8 justify-center">
                    <div
                        class="bg-white rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 flex items-center justify-center gap-5 p-4 border border-gray-100">
                        <!-- Image -->
                        <div class="flex-shrink-0">
                            <img src="{{ asset('assets/images/teachers/teacher1.jpg') }}" alt="আব্দুল্লাহ আল নোমান"
                                class="w-28 h-32 md:w-32 md:h-36 object-cover rounded-lg">
                        </div>

                        <div class="flex flex-col h-full">
                            <div>
                                <h3 class="text-lg font-bold text-gray-900">{{ $item->name_en }}</h3>
                                <p class="text-sm text-gray-500 mb-3">({{ $item->designation }})</p>
                            </div>

                            <div class="flex items-center gap-2 mb-4">
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors"><svg
                                        class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.518.76a11.024 11.024 0 006.25 6.25l.76-1.518a1 1 0 011.06-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z">
                                        </path>
                                    </svg></a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors"><svg
                                        class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path
                                            d="M2.003 5.884L10 2.086l7.997 3.798A2 2 0 0018 7.682V18a2 2 0 01-2 2H4a2 2 0 01-2-2V7.682a2 2 0 00-.003-1.798zM12 11a2 2 0 10-4 0 2 2 0 004 0zM4 18V8.044l6-2.857 6 2.857V18H4z">
                                        </path>
                                    </svg></a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors"><svg
                                        class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M20 10c0-5.523-4.477-10-10-10S0 4.477 0 10c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V10h2.54V7.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V10h2.773l-.443 2.89h-2.33v6.988C16.343 19.128 20 14.991 20 10z"
                                            clip-rule="evenodd"></path>
                                    </svg></a>
                                <a href="#"
                                    class="bg-green-500 text-white p-2 rounded-md hover:bg-green-600 transition-colors"><svg
                                        class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.337 7.433a2.062 2.062 0 01-2.063-2.065 2.064 2.064 0 112.063 2.065zm1.336 8.905H4.002v-8.59h2.671v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z"
                                            clip-rule="evenodd"></path>
                                    </svg></a>
                            </div>

                            <div class="mt-auto">
                                <a href="{{ route('teacher.show',$item->id) }}"
                                    class="inline-block bg-teal-50 text-teal-700 font-semibold px-4 py-2 rounded-full text-sm hover:bg-teal-100 transition-colors group">
                                    বিস্তারিত <span
                                        class="inline-block transition-transform group-hover:translate-x-1">&rarr;</span>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            @endforeach

            <div class="text-center mt-8">
                <a href="{{ route('teachers.list') }}"
                    class="bg-green-100 text-brand-green px-6 py-2 rounded-md font-semibold hover:bg-green-200">সকল শিক্ষক
                    →</a>
            </div>
        </div>
    </section>
    <!-- Student Statistics -->
    <!-- STUDENT STATISTICS - OPTION 2: CLEAN & MINIMALIST -->
    <section class="py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-800">ছাত্র পরিসংখ্যান</h2>
                <p class="mt-3 max-w-2xl mx-auto text-gray-500">
                    আমাদের প্রতিটি শ্রেণীতে মোট শিক্ষার্থীর সংখ্যা।
                </p>
            </div>

            <!-- Statistics Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

                <!-- Stat Item 1: One -->
                <div
                    class="bg-white rounded-lg p-6 text-center border border-gray-200 transition-all duration-300 hover:border-brand-green hover:shadow-md">
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-6xl font-bold text-brand-green">3</span>
                        <p class="text-sm text-gray-500 -mt-1">Total Students</p>
                    </div>
                    <h5 class="mt-4 font-semibold text-gray-800 text-lg">Class One</h5>
                </div>

                <!-- Stat Item 2: Play -->
                <div
                    class="bg-white rounded-lg p-6 text-center border border-gray-200 transition-all duration-300 hover:border-brand-green hover:shadow-md">
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-6xl font-bold text-brand-green">2</span>
                        <p class="text-sm text-gray-500 -mt-1">Total Students</p>
                    </div>
                    <h5 class="mt-4 font-semibold text-gray-800 text-lg">Class Play</h5>
                </div>

                <!-- Stat Item 3: Two (Shows '0' state) -->
                <div
                    class="bg-white rounded-lg p-6 text-center border border-gray-200 transition-all duration-300 hover:border-gray-400 hover:shadow-md">
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-6xl font-bold text-gray-400">0</span>
                        <p class="text-sm text-gray-500 -mt-1">Total Students</p>
                    </div>
                    <h5 class="mt-4 font-semibold text-gray-800 text-lg">Class Two</h5>
                </div>

                <!-- Add other items similarly -->
                <div
                    class="bg-white rounded-lg p-6 text-center border border-gray-200 transition-all duration-300 hover:border-gray-400 hover:shadow-md">
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-6xl font-bold text-gray-400">0</span>
                        <p class="text-sm text-gray-500 -mt-1">Total Students</p>
                    </div>
                    <h5 class="mt-4 font-semibold text-gray-800 text-lg">Class Six</h5>
                </div>
                <div
                    class="bg-white rounded-lg p-6 text-center border border-gray-200 transition-all duration-300 hover:border-brand-green hover:shadow-md">
                    <div class="flex flex-col justify-center items-center">
                        <span class="text-6xl font-bold text-brand-green">2</span>
                        <p class="text-sm text-gray-500 -mt-1">Total Students</p>
                    </div>
                    <h5 class="mt-4 font-semibold text-gray-800 text-lg">Class Seven</h5>
                </div>

            </div>
        </div>
    </section>


    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">

            <!-- Header -->
            <div class="flex justify-between items-center mb-10">
                <h4 class="text-3xl font-extrabold text-gray-800">সেরা ছাত্র</h4>
            </div>

            <div class="grid sm:grid-cols-1 lg:grid-cols-4 xl:grid-cols-4 gap-6">

                <!-- Student Card -->
                <div
                    class="flex items-center gap-6 bg-white/80 backdrop-blur-xl border border-slate-100
                        p-6 rounded-3xl shadow-lg hover:shadow-2xl hover:-translate-y-1
                        transition-all duration-300">

                    <!-- Image -->
                    <img src="{{ asset('assets/images/students/student1.webp') }}"
                        class="w-28 h-28 object-cover rounded-2xl shadow-md">

                    <!-- Info -->
                    <div class="flex-1">
                        <h4 class="text-xl font-bold text-gray-900">Atikur Rahman</h4>
                        <p class="text-gray-500 text-sm">Class : Play</p>
                        <p class="text-gray-500 text-sm">Roll : 03</p>
                        <p class="text-gray-500 text-sm mb-4">Session : Jan 2025 - Dec 2025</p>

                        <!-- Buttons -->
                        <div class="flex items-center gap-3">

                            <!-- Mail Button -->
                            <a href="mailto:atikur@example.com"
                                class="flex items-center justify-center h-9 w-9 bg-emerald-100
                                  rounded-xl hover:bg-emerald-200 transition">
                                <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25
                                                                      0 01-2.25-2.25V6.75m19.5 0A2.25 2.25
                                                                      0 0019.5 4.5h-15a2.25 2.25 0 00-2.25
                                                                      2.25m19.5 0v.243a2.25 2.25 0 01-1.07
                                                                      1.916l-7.5 4.615a2.25 2.25 0
                                                                      01-2.36 0L3.32 8.91a2.25 2.25
                                                                      0 01-1.07-1.916V6.75" />
                                </svg>
                            </a>

                            <!-- Read More -->
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 bg-emerald-50
                                  text-emerald-700 font-semibold rounded-full text-sm
                                  hover:bg-emerald-100 transition">
                                আরও পড়ুন
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center gap-6 bg-white/80 backdrop-blur-xl border border-slate-100
                        p-6 rounded-3xl shadow-lg hover:shadow-2xl hover:-translate-y-1
                        transition-all duration-300">

                    <!-- Image -->
                    <img src="{{ asset('assets/images/students/student1.webp') }}"
                        class="w-28 h-28 object-cover rounded-2xl shadow-md">

                    <!-- Info -->
                    <div class="flex-1">
                        <h4 class="text-xl font-bold text-gray-900">Atikur Rahman</h4>
                        <p class="text-gray-500 text-sm">Class : Play</p>
                        <p class="text-gray-500 text-sm">Roll : 03</p>
                        <p class="text-gray-500 text-sm mb-4">Session : Jan 2025 - Dec 2025</p>

                        <!-- Buttons -->
                        <div class="flex items-center gap-3">

                            <!-- Mail Button -->
                            <a href="mailto:atikur@example.com"
                                class="flex items-center justify-center h-9 w-9 bg-emerald-100
                                  rounded-xl hover:bg-emerald-200 transition">
                                <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25
                                                                      0 01-2.25-2.25V6.75m19.5 0A2.25 2.25
                                                                      0 0019.5 4.5h-15a2.25 2.25 0 00-2.25
                                                                      2.25m19.5 0v.243a2.25 2.25 0 01-1.07
                                                                      1.916l-7.5 4.615a2.25 2.25 0
                                                                      01-2.36 0L3.32 8.91a2.25 2.25
                                                                      0 01-1.07-1.916V6.75" />
                                </svg>
                            </a>

                            <!-- Read More -->
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 bg-emerald-50
                                  text-emerald-700 font-semibold rounded-full text-sm
                                  hover:bg-emerald-100 transition">
                                আরও পড়ুন
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center gap-6 bg-white/80 backdrop-blur-xl border border-slate-100
                        p-6 rounded-3xl shadow-lg hover:shadow-2xl hover:-translate-y-1
                        transition-all duration-300">

                    <!-- Image -->
                    <img src="{{ asset('assets/images/students/student1.webp') }}"
                        class="w-28 h-28 object-cover rounded-2xl shadow-md">

                    <!-- Info -->
                    <div class="flex-1">
                        <h4 class="text-xl font-bold text-gray-900">Atikur Rahman</h4>
                        <p class="text-gray-500 text-sm">Class : Play</p>
                        <p class="text-gray-500 text-sm">Roll : 03</p>
                        <p class="text-gray-500 text-sm mb-4">Session : Jan 2025 - Dec 2025</p>

                        <!-- Buttons -->
                        <div class="flex items-center gap-3">

                            <!-- Mail Button -->
                            <a href="mailto:atikur@example.com"
                                class="flex items-center justify-center h-9 w-9 bg-emerald-100
                                  rounded-xl hover:bg-emerald-200 transition">
                                <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25
                                                                      0 01-2.25-2.25V6.75m19.5 0A2.25 2.25
                                                                      0 0019.5 4.5h-15a2.25 2.25 0 00-2.25
                                                                      2.25m19.5 0v.243a2.25 2.25 0 01-1.07
                                                                      1.916l-7.5 4.615a2.25 2.25 0
                                                                      01-2.36 0L3.32 8.91a2.25 2.25
                                                                      0 01-1.07-1.916V6.75" />
                                </svg>
                            </a>

                            <!-- Read More -->
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 bg-emerald-50
                                  text-emerald-700 font-semibold rounded-full text-sm
                                  hover:bg-emerald-100 transition">
                                আরও পড়ুন
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div
                    class="flex items-center gap-6 bg-white/80 backdrop-blur-xl border border-slate-100
                        p-6 rounded-3xl shadow-lg hover:shadow-2xl hover:-translate-y-1
                        transition-all duration-300">

                    <!-- Image -->
                    <img src="{{ asset('assets/images/students/student1.webp') }}"
                        class="w-28 h-28 object-cover rounded-2xl shadow-md">

                    <!-- Info -->
                    <div class="flex-1">
                        <h4 class="text-xl font-bold text-gray-900">Atikur Rahman</h4>
                        <p class="text-gray-500 text-sm">Class : Play</p>
                        <p class="text-gray-500 text-sm">Roll : 03</p>
                        <p class="text-gray-500 text-sm mb-4">Session : Jan 2025 - Dec 2025</p>

                        <!-- Buttons -->
                        <div class="flex items-center gap-3">

                            <!-- Mail Button -->
                            <a href="mailto:atikur@example.com"
                                class="flex items-center justify-center h-9 w-9 bg-emerald-100
                                  rounded-xl hover:bg-emerald-200 transition">
                                <svg class="w-5 h-5 text-emerald-700" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.8" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25
                                                                      0 01-2.25-2.25V6.75m19.5 0A2.25 2.25
                                                                      0 0019.5 4.5h-15a2.25 2.25 0 00-2.25
                                                                      2.25m19.5 0v.243a2.25 2.25 0 01-1.07
                                                                      1.916l-7.5 4.615a2.25 2.25 0
                                                                      01-2.36 0L3.32 8.91a2.25 2.25
                                                                      0 01-1.07-1.916V6.75" />
                                </svg>
                            </a>

                            <!-- Read More -->
                            <a href="#"
                                class="inline-flex items-center px-4 py-2 bg-emerald-50
                                  text-emerald-700 font-semibold rounded-full text-sm
                                  hover:bg-emerald-100 transition">
                                আরও পড়ুন
                                <svg class="w-4 h-4 ml-1" fill="none" viewBox="0 0 24 24" stroke-width="2"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.25 8.25L21 12l-3.75 3.75M21 12H3" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Copy the same structure for other students -->
            </div>
        </div>
    </section>
@endsection
