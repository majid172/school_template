<header class="bg-white sticky top-0 z-50 shadow-sm">
    <nav class="container mx-auto px-4 py-3 flex justify-between items-center">
        <!-- Logo and Site Name -->
        <div class="flex items-center space-x-2">
            <img src="https://i.imgur.com/rS25gB4.png" alt="Logo" class="h-10">
            <span class="font-bold text-lg text-gray-800">ABC </span>
        </div>

        <!-- Desktop Navigation Menu -->
        <div class="hidden lg:flex items-center space-x-8 text-gray-700 font-medium">
            <a href="{{ url('/') }}" class="bg-brand-green text-white px-4 py-2 rounded-full">মূলপাতা</a>

            <!-- Dropdown 1: পরিচিতি -->
            <div class="relative group">
                <a href="#" class="hover:text-brand-green flex items-center gap-1">
                    <span>পরিচিতি</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    <a href="{{ url('/about') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">আমাদের সম্পর্কে</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">ইতিহাস</a>
                    <a href="{{ url('principal-speech') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">পরিচালকের বার্তা </a>
                </div>
            </div>

            <!-- Dropdown 2: শিক্ষার্থী -->
            <div class="relative group">
                <a href="#" class="hover:text-brand-green flex items-center gap-1">
                    <span>শিক্ষার্থী</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">ছাত্রছাত্রীর তথ্য</a>
                    
                </div>
            </div>

            <div class="relative group">
                <a href="#" class="hover:text-brand-green flex items-center gap-1">
                    <span>জনশক্তি</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    <a href="{{ route('teachers.list') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">শিক্ষকগণ</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">পরিচালনা কমিটি</a>
                   
                </div>
            </div>

            <!-- Dropdown 3: একাডেমিক -->
            <div class="relative group">
                <a href="#" class="hover:text-brand-green flex items-center gap-1">
                    <span>একাডেমিক</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    
                    <a href="{{ route('notice.list') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">নোটিশ</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">রুটিন</a>
                    <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">একাডেমিক ক্যালেন্ডার</a>
                </div>
            </div>
            
            <div class="relative group">
                <a href="#" class="hover:text-brand-green flex items-center gap-1">
                    <span>গ্যালারি</span>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </a>
                <!-- Dropdown Menu -->
                <div class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    <a href="{{ route('gallery.list') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">ফটো গ্যালারি</a>
                    {{-- <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">ভিডিও গ্যালারি</a> --}}
                </div>
            </div>

            <!-- Contact Link -->
            <a href="{{ url('contact') }}" class="hover:text-brand-green">যোগাযোগ</a>
        </div>
        
        <!-- Login Button -->
        <a href="javascript:void(0)" class="bg-brand-green text-white px-6 py-2 rounded-md font-semibold flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
            </svg>
            <span>Login</span>
        </a>
    </nav>
</header>