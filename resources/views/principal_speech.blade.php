@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')
    <section class="container mx-auto px-4 py-10">
        <div class=" items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">পরিচালকের বার্তা</h2>
        </div>
        <!-- Wrapper Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- LEFT SIDE (2/3) -->
            <div class="md:col-span-2 space-y-6">
                <div class="bg-white p-8 rounded-lg shadow-md border border-gray-100">
                    <div class="flex flex-col md:flex-row gap-6">
                        <img src="{{ asset('assets/images/teachers/principle.jpg') }}" alt="Head Teacher"
                            class="w-32 h-32 rounded-full object-cover mx-auto md:mx-0">

                        <div class="text-center md:text-left">
                            <h3 class="text-xl font-bold text-gray-900">Head Teacher</h3>
                            <p class="text-md text-gray-600 mb-4">Md. Asad</p>

                            <p class="text-gray-600 leading-relaxed">
                                এটি দীর্ঘদিন ধরে প্রতিষ্ঠিত সত্য যে কোনও পাঠক যখন কোনও পৃষ্ঠার লেআউটটি দেখেন তখন তার
                                পাঠযোগ্য বিষয়বস্তু দ্বারা বিভ্রান্ত হন...
                            </p>

                            <a href="#"
                                class="inline-block mt-4 text-brand-green font-semibold border border-green-200 px-4 py-2 rounded-full hover:bg-green-50">
                                আরও পড়ুন →
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- RIGHT SIDE (1/3) -->
            <div class="md:col-span-1">

                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        Important links
                    </h3>

                    <ul class="space-y-3">

                        <!-- Link 1 -->
                        <li class="flex justify-between items-center text-sm p-2 border rounded-md">
                            <span class="flex items-center gap-2 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0l-1.5-1.5a2 2 0 112.828-2.828l1.5 1.5z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M6.5 12.5a2 2 0 012.828 0l1.5 1.5a2 2 0 010 2.828l-3 3a2 2 0 01-2.828-2.828l1.5-1.5a2 2 0 010-2.828z"
                                        clip-rule="evenodd" />
                                </svg>
                                Ministry of Education
                            </span>
                            <a href="#"
                                class="bg-green-100 text-brand-green px-4 py-1 rounded-full text-xs hover:bg-green-200">
                                Visit
                            </a>
                        </li>

                        <!-- Link 2 -->
                        <li class="flex justify-between items-center text-sm p-2 border rounded-md">
                            <span class="flex items-center gap-2 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0l-1.5-1.5a2 2 0 112.828-2.828l1.5 1.5z"
                                        clip-rule="evenodd" />
                                    <path fill-rule="evenodd"
                                        d="M6.5 12.5a2 2 0 012.828 0l1.5 1.5a2 2 0 010 2.828l-3 3a2 2 0 01-2.828-2.828l1.5-1.5a2 2 0 010-2.828z"
                                        clip-rule="evenodd" />
                                </svg>
                                Google
                            </span>
                            <a href="#"
                                class="bg-green-100 text-brand-green px-4 py-1 rounded-full text-xs hover:bg-green-200">
                                Visit
                            </a>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
    </section>
@endsection
