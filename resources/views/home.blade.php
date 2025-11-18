@extends('layouts.app')
@section('section')


<section class="container mx-auto px-4 pt-8">
    <div id="hero-carousel" class="relative w-full" data-carousel="slide">

        <div class="relative h-[350px] overflow-hidden rounded-2xl md:h-[500px]">
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                
                <div class="absolute block w-full h-full bg-cover bg-center"
                    style="background-image: url('{{ asset('assets/images/banner/banner1.jpg') }}');">
                    
                    <div class="absolute inset-0 bg-opacity-50 flex items-center">
                        <div class="w-full text-center px-4">
                            <h1 class="text-white text-3xl md:text-5xl font-bold leading-tight max-w-4xl mx-auto">
                                Quality education is about possibilities. It is about success in real life.
                            </h1>
                        </div>
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

    <!-- Main Content Area -->
    <div class="container mx-auto px-4 py-16">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10">
            <!-- Left Column -->
            <div class="lg:col-span-2 space-y-12">
                <!-- About Section -->
                <section class="flex flex-col md:flex-row items-center gap-8">
                    <div class="flex-shrink-0 w-full md:w-1/2">
                        <div class="relative w-full h-80 rounded-3xl overflow-hidden">
                            <img src="{{ asset('assets/images/campus.jpg') }}" alt="School Building"
                                class="absolute w-full h-full object-cover">
                            {{-- <div class="absolute inset-0 bg-gray-800 bg-opacity-40"></div> --}}
                        </div>
                    </div>
                    <div class="w-full md:w-1/2">
                        <h2 class="text-3xl font-bold text-gray-800 border-l-4 border-brand-green pl-4 mb-4">প্রতিষ্ঠান
                            সম্পর্কে</h2>
                        <p class="text-gray-600">It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it
                            has a more-or-less normal distribution of letters, as opposed to using 'Content here, content
                            here', making it look like readable English. Many desktop publishing packages and web page
                            editors now use 'Lorem Ipsum' as their default model text...</p>
                    </div>
                </section>

                <!-- Head Teacher's Message -->

            </div>

            <!-- Right Sidebar -->
            <aside class="space-y-8">
                <!-- Notice Board -->
                <div class="bg-white p-6 rounded-lg shadow-md border border-gray-100">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4 flex items-center gap-2">
                        <span class="text-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 12.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                            </svg>
                        </span>
                        নোটিস‌বোর্ড
                    </h3>
                    <ul class="space-y-3">
                        <li class="flex justify-between items-center text-sm">
                            <span class="flex items-center gap-2"><span
                                    class="text-red-500 bg-red-100 rounded-full p-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg></span> test notification</span>
                            <a href="#"
                                class="bg-green-100 text-brand-green px-3 py-1 rounded-full hover:bg-green-200">বিস্তারিত
                                দেখুন</a>
                        </li>
                        <li class="flex justify-between items-center text-sm">
                            <span class="flex items-center gap-2"><span
                                    class="text-red-500 bg-red-100 rounded-full p-1"><svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg></span> ফ্রি চক্ষু চিকিৎসা</span>
                            <a href="#"
                                class="bg-green-100 text-brand-green px-3 py-1 rounded-full hover:bg-green-200">বিস্তারিত
                                দেখুন</a>
                        </li>
                        <li class="flex justify-between items-center text-sm">
                            <span class="flex items-center gap-2"><span
                                    class="text-red-500 bg-red-100 rounded-full p-1"><svg
                                        xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 3.001-1.742 3.001H4.42c-1.53 0-2.493-1.667-1.743-3.001l5.58-9.92zM10 13a1 1 0 110-2 1 1 0 010 2zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z"
                                            clip-rule="evenodd" />
                                    </svg></span> একটি কারিকুলাম আ্যাক্টিভিটি ক্লাস</span>
                            <a href="#"
                                class="bg-green-100 text-brand-green px-3 py-1 rounded-full hover:bg-green-200">বিস্তারিত
                                দেখুন</a>
                        </li>

                    </ul>
                    <a href="#"
                        class="w-full mt-6 bg-brand-green text-white text-center block py-2 rounded-md font-semibold hover:bg-opacity-90">সমস্ত
                        বিস্তারিত দেখুন →</a>
                </div>

                <!-- Important Links -->

            </aside>
        </div>
    </div>

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


    <!-- Our Teachers Section -->
    <section class="container mx-auto px-4 py-16">
        <h2 class="text-3xl font-bold text-gray-800 text-center mb-8">আমাদের শিক্ষকরা</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">
            <!-- Teacher Card -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 text-center">
                <img src="{{ asset('assets/images/teachers/teacher1.jpg') }}" alt="Teacher"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-gray-800">Atikur</h4>
                <p class="text-sm text-gray-500 mb-3">(Assistant Teacher)</p>
                <a href="#"
                    class="inline-block text-brand-green font-semibold border border-green-200 px-4 py-1 rounded-full hover:bg-green-50 text-sm">আরও
                    পড়ুন →</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 text-center">
                <img src="{{ asset('assets/images/teachers/teacher2.jpg') }}" alt="Teacher"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-gray-800">Atikur</h4>
                <p class="text-sm text-gray-500 mb-3">(Assistant Teacher)</p>
                <a href="#"
                    class="inline-block text-brand-green font-semibold border border-green-200 px-4 py-1 rounded-full hover:bg-green-50 text-sm">আরও
                    পড়ুন →</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 text-center">
                <img src="{{ asset('assets/images/teachers/teacher3.jpg') }}" alt="Teacher"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-gray-800">Atikur</h4>
                <p class="text-sm text-gray-500 mb-3">(Assistant Teacher)</p>
                <a href="#"
                    class="inline-block text-brand-green font-semibold border border-green-200 px-4 py-1 rounded-full hover:bg-green-50 text-sm">আরও
                    পড়ুন →</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 text-center">
                <img src="{{ asset('assets/images/teachers/teacher4.jpg') }}" alt="Teacher"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-gray-800">Mst Halima khatun</h4>
                <p class="text-sm text-gray-500 mb-3">(Assistant Teacher)</p>
                <a href="#"
                    class="inline-block text-brand-green font-semibold border border-green-200 px-4 py-1 rounded-full hover:bg-green-50 text-sm">আরও
                    পড়ুন →</a>
            </div>
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-100 text-center">
                <img src="{{ asset('assets/images/teachers/teacher5.jpg') }}" alt="Teacher"
                    class="w-24 h-24 rounded-full mx-auto mb-4 object-cover">
                <h4 class="font-bold text-gray-800">Mst Halima khatun</h4>
                <p class="text-sm text-gray-500 mb-3">(Assistant Teacher)</p>
                <a href="#"
                    class="inline-block text-brand-green font-semibold border border-green-200 px-4 py-1 rounded-full hover:bg-green-50 text-sm">আরও
                    পড়ুন →</a>
            </div>
        </div>
        <div class="text-center mt-8">
            <a href="#"
                class="bg-green-100 text-brand-green px-6 py-2 rounded-md font-semibold hover:bg-green-200">সকল শিক্ষক
                →</a>
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


    <!-- Top Students Section -->
    <section class="container mx-auto px-4 py-16">
        <div class="flex justify-between items-center mb-12">
            <h2 class="text-4xl font-extrabold text-gray-900">সেরা ছাত্র</h2>
            <div class="flex space-x-3">
                <button
                    class="p-3 bg-white border border-gray-200 rounded-full shadow hover:bg-gray-100 hover:scale-110 transition transform">
                    &lt;
                </button>
                <button
                    class="p-3 bg-white border border-gray-200 rounded-full shadow hover:bg-gray-100 hover:scale-110 transition transform">
                    &gt;
                </button>
            </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Student Card -->
            <div
                class="bg-gradient-to-b from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-100 text-center hover:scale-105 transition transform">
                <img src="https://i.imgur.com/kKGWaDR.png" alt="Student"
                    class="w-28 h-28 rounded-full mx-auto mb-4 ring-4 ring-indigo-200 shadow-lg">
                <h4 class="font-bold text-xl text-gray-900 mb-1">md mdaassss</h4>
                <p class="text-sm text-indigo-500 mb-2">(Two)</p>
                <p class="text-sm text-gray-700 mt-1">Roll: <span class="font-semibold">1</span></p>
                <p class="text-xs text-gray-400">Session: Jan-2024-Dec-2024</p>
            </div>

            <div
                class="bg-gradient-to-b from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-100 text-center hover:scale-105 transition transform">
                <img src="https://i.imgur.com/rLd2jjt.png" alt="Student"
                    class="w-28 h-28 rounded-full mx-auto mb-4 ring-4 ring-indigo-200 shadow-lg">
                <h4 class="font-bold text-xl text-gray-900 mb-1">two three</h4>
                <p class="text-sm text-indigo-500 mb-2">(Two)</p>
                <p class="text-sm text-gray-700 mt-1">Roll: <span class="font-semibold">2</span></p>
                <p class="text-xs text-gray-400">Session: Jan-2024-Dec-2024</p>
            </div>

            <div
                class="bg-gradient-to-b from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-100 text-center hover:scale-105 transition transform">
                <img src="https://i.imgur.com/rLd2jjt.png" alt="Student"
                    class="w-28 h-28 rounded-full mx-auto mb-4 ring-4 ring-indigo-200 shadow-lg">
                <h4 class="font-bold text-xl text-gray-900 mb-1">Tareq Mahmud Emon</h4>
                <p class="text-sm text-indigo-500 mb-2">(Two)</p>
                <p class="text-sm text-gray-700 mt-1">Roll: <span class="font-semibold">3</span></p>
                <p class="text-xs text-gray-400">Session: Jan-2024-Dec-2024</p>
            </div>

            <div
                class="bg-gradient-to-b from-white to-gray-50 p-6 rounded-2xl shadow-lg border border-gray-100 text-center hover:scale-105 transition transform">
                <img src="https://i.imgur.com/rLd2jjt.png" alt="Student"
                    class="w-28 h-28 rounded-full mx-auto mb-4 ring-4 ring-indigo-200 shadow-lg">
                <h4 class="font-bold text-xl text-gray-900 mb-1">মাসুমা</h4>
                <p class="text-sm text-indigo-500 mb-2">(Six)</p>
                <p class="text-sm text-gray-700 mt-1">Roll: <span class="font-semibold">1</span></p>
                <p class="text-xs text-gray-400">Session: Jan-2024-Dec-2024</p>
            </div>
        </div>
    </section>
@endsection
