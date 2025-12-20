@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')
<section class="bg-slate-50 py-16">
        <div class="container mx-auto px-4">
            
            <!-- Main Profile Card -->
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12 flex flex-col md:flex-row gap-8 md:gap-12">
                <div class="md:w-1/3 flex-shrink-0">
                    
                    <img src="data:image/jpeg;base64,{{ base64_encode($teacher->photo) }}" class="rounded-2xl w-full h-full object-cover" alt="{{ $teacher->name_en}}">
                </div>

                <!-- Right Column: All Details -->
                <div class="md:w-2/3 flex flex-col space-y-2">
                    <div>
                        <h4 class="text-2xl font-bold text-gray-800">{{ $teacher->name_en}} ( {{ $teacher->name_bn }} )</h4>
                        <p class="text-lg text-gray-500 mt-1">( {{ $teacher->designation }} )</p>
                        <hr class="border-t border-green-400 my-5">
                    </div>

                    <!-- Info Grid: PDS ID, Joining Date, and Socials -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 pb-2">
                        <!-- Left Info -->
                        <div class="space-y-1">
                            <div class="flex items-center space-x-2">
                                <p class="text-md text-gray-500">শিক্ষক  আইডি:</p>
                                <p class="font-semi-bold text-gray-900 text-lg">{{ $teacher->employee_id }}</p>
                            </div>
                            <div class="flex items-baseline space-x-2"> 
                                <p class="text-md text-gray-500">যোগদান তারিখ:</p>
                                <p class="font-semi-bold text-gray-900 text-lg">{{ $teacher->joining_date }}</p>
                            </div>
                        </div>
                        <!-- Right Info (Contact) -->
                        <div>
                            <p class="text-sm text-gray-500">যোগাযোগ মাধ্যম:</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <!-- Phone -->
                                <a href="#" class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24c1.12.37 2.33.57 3.57.57c.55 0 1 .45 1 1V20c0 .55-.45 1-1 1c-9.39 0-17-7.61-17-17c0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1c0 1.25.2 2.45.57 3.57c.11.35.03.74-.25 1.02l-2.2 2.2z"></path></svg>
                                </a>
                                <!-- Email -->
                                <a href="#" class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"></path></svg>
                                </a>
                                <!-- Facebook -->
                                <a href="javascript:void(0)" class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.84 3.44 8.87 8 9.8V15H8v-3h2V9.5C10 7.57 11.57 6 13.5 6H16v3h-2c-.55 0-1 .45-1 1v2h3v3h-3v6.95c5.05-.5 9-4.76 9-9.95z"></path></svg>
                                </a>
                                <!-- LinkedIn -->
                                <a href="#" class="flex items-center justify-center h-8 w-8 bg-green-500 rounded-md hover:bg-green-600 transition-colors">
                                    <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19 3a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14m-7 8v5h-2v-5h2m-1-2a1.5 1.5 0 1 0-3 0a1.5 1.5 0 0 0 3 0m5 2v5h-2v-4.5c0-.83-.42-1.5-1-1.5s-1 .67-1 1.5V18h-2v-5h2v.83c.3-.58 1.08-1.33 2-1.33c1.93 0 3 1.27 3 3.5Z"></path></svg>
                                </a>
                            </div>
                        </div>
                    </div>

                    <!-- Biography Section -->
                    <div>
                        <h2 class="text-xl font-bold text-gray-800 mb-4">মন্তব্য:</h2>
                       
                        {!! $teacher->bio  !!}
                    </div>

                </div>
            </div>
        </div>
    </section>
@endsection
