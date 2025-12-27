
    <footer class="bg-gray-800 text-gray-300">
        <div class="container mx-auto px-4 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Other Links -->
                <div>
                    <h5 class="text-lg font-semibold text-white border-l-4 border-brand-green pl-3 mb-4">অন্যান্য লিঙ্ক</h5>
                    <ul class="space-y-2 text-sm">
                        <li><a href="javascript:void(0)" class="hover:text-brand-green flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1" /></svg> অনলাইন ভর্তি</a></li>
                        <li><a href="javascript:void(0)" class="hover:text-brand-green flex items-center gap-2"><svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" /></svg> মেইল লগইন</a></li>
                    </ul>
                </div>
                <!-- Important Links -->
                <div class="md:col-span-2">
                    <h5 class="text-lg font-semibold text-white border-l-4 border-brand-green pl-3 mb-4">গুরুত্বপূর্ণ লিঙ্ক</h5>
                    <div class="grid grid-cols-2 gap-x-8 gap-y-2 text-sm">
                        <a href="{{ url('/contact') }}" class="hover:text-brand-green">যোগাযোগ</a>
                        <a href="javascript:void(0)" class="hover:text-brand-green">ইনস্টিটিউট পরিচালনা কমিটি</a>
                        <a href="{{ route('about') }}" class="hover:text-brand-green">প্রতিষ্ঠান সম্পর্কে</a>
                        <a href="{{ route('gallery.list') }}" class="hover:text-brand-green">গ্যালারি</a>
                       <a href="{{ route('teachers.list') }}" class="hover:text-brand-green">আমাদের শিক্ষকরা</a>
                       <a href="{{ route('blogs.list') }}" class="hover:text-brand-green">ব্লগ </a>
                        <a href="{{ route('student.list') }}" class="hover:text-brand-green">চলমান শিক্ষার্থীরা</a>

                        <a href="{{ route('notice.list') }}" class="hover:text-brand-green">নোটিশ</a>
                    </div>
                </div>
                <!-- Contact Info -->
                 <div>
                    <h5 class="text-lg font-semibold text-white border-l-4 border-brand-green pl-3 mb-4">যোগাযোগ</h5>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-start gap-3">
                           <div class="bg-gray-700 p-2 rounded-md mt-1">
                            <i class="fa-solid fa-map-pin text-brand-green"></i>
                           </div>
                            <span>{{ settings()->address }}</span>
                        </li>
                         <li class="flex items-start gap-3">
                           <div class="bg-gray-700 p-2 rounded-md">
                            <i class="fa-solid fa-phone-flip text-brand-green"></i>
                           </div>
                            <span>{{ settings()->phone }}</span>
                        </li>
                         <li class="flex items-start gap-3">
                           <div class="bg-gray-700 p-2 rounded-md">
                            <i class="fa-regular fa-envelope text-brand-green h-5 w-5"></i>
                           </div>
                            <span>{{ settings()->email }}</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <div class="bg-gray-900 py-4">
            <div class="container mx-auto px-4 text-center text-sm text-gray-400">
                &copy; {{ date('Y') }} <a href="javascript:void(0)" class="text-brand-green font-semibold">EMS</a>. All right reserved.
                Designed by: <a href="javascript:void(0)" class="text-brand-green font-semibold">FL</a>
            </div>
        </div>
    </footer>
