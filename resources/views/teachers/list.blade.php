@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')


    <section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">

            <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-8">
                @foreach ($teachers as $item)
                    <!-- Teacher Profile Card -->
                    <div
                        class="bg-white rounded-xl shadow-lg flex overflow-hidden hover:shadow-xl transition-all duration-300">

                        <!-- Image Section -->
                        <div class="w-2/5 flex-shrink-0">
                            <img src="{{ asset('assets/images/teachers/teacher1.jpg') }}" class="w-full h-full object-cover"
                                alt="{{ $item->first_name }}">
                        </div>

                        <!-- Info Section -->
                        <div class="flex-1 p-6 flex flex-col space-y-3">
                            <h3 class="text-2xl font-bold text-gray-800">{{ $item->first_name . ' ' . $item->last_name }}
                            </h3>
                            <p class="text-gray-500">( {{ $item->designation }} )</p>

                            <!-- Social Icons -->
                            <div class="flex items-center space-x-2 pt-1">
                                <!-- Phone -->
                                <a href="javascript:void(0)"
                                    class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z">
                                        </path>
                                    </svg>
                                </a>
                                <!-- Email -->
                                <a href="mailto:{{ $item->email }}"
                                    class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z">
                                        </path>
                                    </svg>
                                </a>
                                <!-- Facebook -->
                                <a href="#"
                                    class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z">
                                        </path>
                                    </svg>
                                </a>
                                <!-- LinkedIn -->
                                <a href="#"
                                    class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                        fill="currentColor">
                                        <path
                                            d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-7 8v5h-2v-5h2m-1-2a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0m5 2v5h-2v-4.5c0-.83-.42-1.5-1-1.5s-1 .67-1 1.5V18h-2v-5h2v.83c.3-.58 1.08-1.33 2-1.33c1.93 0 3 1.27 3 3.5Z">
                                        </path>
                                    </svg>
                                </a>
                            </div>

                            <!-- Details Button -->
                            <div class="pt-2">
                                <a href="{{ route('teacher.show',$item->id) }}"
                                    class="inline-flex items-center px-6 py-2 bg-teal-50 text-teal-800 font-semibold rounded-full text-sm hover:bg-teal-100 transition-colors">
                                    বিস্তারিত
                                    <svg class="w-4 h-4 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2.5"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </section>
@endsection
