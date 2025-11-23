<header class="bg-white sticky top-0 z-50 shadow-sm">
    <nav class="container mx-auto px-4 py-3 flex justify-between items-center">

        <!-- Logo and Site Name -->
        <div class="flex items-center space-x-2">
            <img src="" alt="Logo" class="h-10">
            <span class="font-bold text-lg text-gray-800"></span>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex items-center space-x-8 text-gray-700 font-medium">

            {{-- Home --}}
            <a href="{{ route('home') }}"
                class="{{ request()->routeIs('home') ? 'bg-teal-600 text-white' : 'hover:text-brand-green' }} px-4 py-2 rounded-full">
                মূলপাতা
            </a>

            {{-- পরিচিতি (Dropdown) --}}
            <div class="relative group">
                <a href="#"
                    class="flex items-center gap-1 {{ request()->routeIs('about') || request()->routeIs('speech') ? 'text-brand-green font-bold' : 'hover:text-brand-green' }}">
                    <span>পরিচিতি</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">

                    <a href="{{ route('about') }}"
                        class="block px-4 py-2 text-sm {{ request()->routeIs('about') ? 'text-brand-green font-bold bg-gray-100' : 'text-gray-700 hover:bg-gray-100 hover:text-brand-green' }}">
                        আমাদের সম্পর্কে
                    </a>

                    <a href="{{ route('speech') }}"
                        class="block px-4 py-2 text-sm {{ request()->routeIs('speech') ? 'text-brand-green font-bold bg-gray-100' : 'text-gray-700 hover:bg-gray-100 hover:text-brand-green' }}">
                        পরিচালকের বার্তা
                    </a>
                </div>
            </div>

            {{-- শিক্ষার্থী --}}
            <div class="relative group">
                <a href="#"
                    class="flex items-center gap-1 hover:text-brand-green">
                    <span>শিক্ষার্থী</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">
                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">
                        ছাত্রছাত্রীর তথ্য
                    </a>
                </div>
            </div>

            {{-- জনশক্তি --}}
            <div class="relative group">
                <a href="#"
                    class="flex items-center gap-1 {{ request()->routeIs('teachers.list') || request()->routeIs('teacher.show') ? 'text-brand-green font-bold' : 'hover:text-brand-green' }}">
                    <span>জনশক্তি</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">

                    <a href="{{ route('teachers.list') }}"
                        class="block px-4 py-2 text-sm {{ request()->routeIs('teachers.list') || request()->routeIs('teacher.show') ? 'text-brand-green font-bold bg-gray-100' : 'text-gray-700 hover:bg-gray-100 hover:text-brand-green' }}">
                        শিক্ষকগণ
                    </a>

                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">
                        পরিচালনা কমিটি
                    </a>
                </div>
            </div>

            {{-- একাডেমিক --}}
            <div class="relative group">
                <a href="#"
                    class="flex items-center gap-1 {{ request()->routeIs('notice.list') || request()->routeIs('notice.show') ? 'text-brand-green font-bold' : 'hover:text-brand-green' }}">
                    <span>একাডেমিক</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">

                    <a href="{{ route('notice.list') }}"
                        class="block px-4 py-2 text-sm {{ request()->routeIs('notice.list') || request()->routeIs('notice.show') ? 'text-brand-green font-bold bg-gray-100' : 'text-gray-700 hover:bg-gray-100 hover:text-brand-green' }}">
                        নোটিশ
                    </a>

                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">
                        রুটিন
                    </a>

                    <a href="#"
                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-brand-green">
                        একাডেমিক ক্যালেন্ডার
                    </a>
                </div>
            </div>

            {{-- গ্যালারি --}}
            <div class="relative group">
                <a href="#"
                    class="flex items-center gap-1 {{ request()->routeIs('gallery.list') ? 'text-brand-green font-bold' : 'hover:text-brand-green' }}">
                    <span>গ্যালারি</span>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-4 w-4 transition-transform duration-300 group-hover:rotate-180"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M19 9l-7 7-7-7" />
                    </svg>
                </a>

                <div
                    class="absolute top-full left-1/2 -translate-x-1/2 mt-2 w-48 bg-white rounded-md shadow-lg py-1 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300 z-10 border border-gray-100">

                    <a href="{{ route('gallery.list') }}"
                        class="block px-4 py-2 text-sm {{ request()->routeIs('gallery.list') ? 'text-brand-green font-bold bg-gray-100' : 'text-gray-700 hover:bg-gray-100 hover:text-brand-green' }}">
                        ফটো গ্যালারি
                    </a>
                </div>
            </div>

            {{-- Contact --}}
            <a href="{{ route('contact') }}"
                class="{{ request()->routeIs('contact') ? 'text-brand-green font-bold' : 'hover:text-brand-green' }}">
                যোগাযোগ
            </a>
        </div>

        <!-- Login Button -->
        <a href="#" class="bg-teal-600 text-white px-6 py-2 rounded-md font-semibold flex items-center space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                fill="currentColor">
                <path fill-rule="evenodd"
                    d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                    clip-rule="evenodd" />
            </svg>
            <span>Login</span>
        </a>
    </nav>
</header>
