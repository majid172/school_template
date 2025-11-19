@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <div class="container mx-auto px-4 py-16">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-12">
                <!-- About Section -->
                <section class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0 w-full md:w-1/2">
                        <div class="relative w-full h-100 rounded-3xl overflow-hidden">
                            <img src="{{ asset('assets/images/campus.jpg') }}" alt="School Building"
                                class="absolute w-full h-full object-cover">
                            {{-- <div class="absolute inset-0 bg-gray-800 bg-opacity-40"></div> --}}
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 border-l-4 border-brand-green pl-4 mb-4">
                            {{ $title }}</h2>
                        <p class="text-gray-600">{{ $objective->description }}</p>
                    </div>
                </section>

                <!-- Head Teacher's Message -->

            </div>

        </div>
    </div>


    <section class="bg-white py-20">
        <div class="container mx-auto px-4">
            <!-- Section Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl md:text-4xl font-extrabold text-slate-800">
                    সংস্থার পরিসংখ্যান
                </h2>
                <div class="w-24 h-1 bg-emerald-500 mx-auto mt-4"></div>
            </div>

            <!-- Statistics Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 justify-items-center">

                <!-- Stat Item 1 -->
                <div
                    class="group bg-white p-6 rounded-xl border-1 border-slate-200 hover:border-emerald-500 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center space-x-5">
                        <div>
                            <svg class="w-12 h-12 text-emerald-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-4xl font-extrabold text-emerald-500">131</p>
                            <p class="text-sm text-slate-500 font-medium">মোট শিক্ষার্থী</p>
                        </div>
                    </div>
                </div>

                <!-- Stat Item 2 -->
                <div
                    class="group bg-white p-6 rounded-xl border-2 border-slate-200 hover:border-sky-500 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center space-x-5">
                        <div>
                            <svg class="w-12 h-12 text-sky-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-4xl font-extrabold text-sky-500">24</p>
                            <p class="text-sm text-slate-500 font-medium">মোট শিক্ষক</p>
                        </div>
                    </div>
                </div>

                <!-- Stat Item 3 -->
                <div
                    class="group bg-white p-6 rounded-xl border-2 border-slate-200 hover:border-indigo-500 hover:shadow-lg transition-all duration-300">
                    <div class="flex items-center space-x-5">
                        <div>
                            <svg class="w-12 h-12 text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-4.67c.12-.24.232-.487.335-.737m-3.058 3.07A3.75 3.75 0 009.08 8.416M9.08 8.416a3.75 3.75 0 00-1.833-2.185M9.08 8.416v.003c0 1.113.285 2.16.786 3.07m3.072-6.142a3.75 3.75 0 00-3.072 6.142m3.072-6.142a3.75 3.75 0 01-3.072 6.142" />
                            </svg>
                        </div>
                        <div>
                            <p class="text-4xl font-extrabold text-indigo-500">4</p>
                            <p class="text-sm text-slate-500 font-medium">অফিস কর্মকর্তা</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>


    <div class="container mx-auto px-4 py-16">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-12">
                <!-- About Section -->
                <section class="flex flex-col md:flex-row items-center gap-8">
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 border-l-4 border-brand-green pl-4 mb-4">আমাদের মিশন
                        </h2>
                        <p class="text-gray-600">{{ $mission->description }}</p>
                    </div>

                    <div class="flex-shrink-0 w-full md:w-1/2">
                        <div class="relative w-full h-100 rounded-3xl overflow-hidden">
                            <img src="{{ asset('assets/images/campus.jpg') }}" alt="School Building"
                                class="absolute w-full h-full object-cover">
                            {{-- <div class="absolute inset-0 bg-gray-800 bg-opacity-40"></div> --}}
                        </div>
                    </div>

                </section>

                <!-- Head Teacher's Message -->

            </div>

        </div>
    </div>
    <div class="container mx-auto px-4 py-16">
        <div class="grid sm:grid-cols-1 lg:grid-cols-2 xl:grid-cols-2 gap-6">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-12">
                <!-- About Section -->
                <section class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0 w-full md:w-1/2">
                        <div class="relative w-full h-100 rounded-3xl overflow-hidden">
                            <img src="{{ asset('assets/images/campus.jpg') }}" alt="School Building"
                                class="absolute w-full h-full object-cover">
                            {{-- <div class="absolute inset-0 bg-gray-800 bg-opacity-40"></div> --}}
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 border-l-4 border-brand-green pl-4 mb-4">আমাদের ভিশন
                        </h2>
                        <p class="text-gray-600">{{ $vision->description }}</p>
                    </div>

                
                </section>

                <!-- Head Teacher's Message -->

            </div>

        </div>
    </div>
@endsection
