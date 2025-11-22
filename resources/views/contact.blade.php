@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <section class="relative py-20 ">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16">
                <!-- Left: Contact Form -->
                <div class="backdrop-blur-xl bg-white/80 p-10 rounded-3xl shadow-2xl">
                    <h2 class="text-2xl font-extrabold text-slate-800 mb-6 flex items-center gap-2">
                        <span class="w-2 h-8 bg-emerald-500 rounded-full"></span>
                        বার্তা পাঠান
                    </h2>

                    <form class="space-y-6">
                        <!-- Input -->
                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">আপনার নাম</label>
                            <input type="text"
                                class="w-full p-3 rounded-xl bg-slate-100 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition shadow-sm"
                                placeholder="আপনার পুরো নাম লিখুন">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">ইমেইল</label>
                            <input type="email"
                                class="w-full p-3 rounded-xl bg-slate-100 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition shadow-sm"
                                placeholder="you@example.com">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">বিষয়</label>
                            <input type="text"
                                class="w-full p-3 rounded-xl bg-slate-100 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition shadow-sm"
                                placeholder="আপনার বার্তার বিষয়">
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-slate-700 mb-1">বার্তা</label>
                            <textarea rows="5"
                                class="w-full p-3 rounded-xl bg-slate-100 border border-slate-200 focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition shadow-sm"
                                placeholder="আপনার বার্তা লিখুন..."></textarea>
                        </div>

                        <button
                            class="w-full py-3 bg-emerald-600 text-white font-semibold rounded-xl hover:bg-emerald-700 transition-all shadow-md hover:shadow-xl">
                            বার্তা পাঠান
                        </button>
                    </form>
                </div>

                <!-- Right: Info -->
                <div class="space-y-12">
                    <div>
                        <h2 class="text-2xl font-bold text-slate-900 leading-snug">আমাদের সাথে যোগাযোগ করুন</h2>
                        <div class="w-24 h-1 bg-emerald-500 mt-4 rounded-full"></div>
                        <p class="text-slate-600 mt-5 text-lg leading-relaxed">
                            যেকোনো প্রয়োজনে আমাদের সাথে যোগাযোগ করতে দ্বিধা করবেন না।
                            আমরা আপনাকে সর্বোচ্চ সহায়তা করার চেষ্টা করি।
                        </p>
                    </div>

                    <div class="space-y-10">

                        <!-- Address -->
                        <div class="flex items-start gap-5">
                            <div class="bg-emerald-100 p-4 rounded-xl shadow-inner">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M17.657 16.657L13.414 20.9a2 2 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-slate-800">ঠিকানা</h4>
                                <p class="text-slate-600">{{ $contact->address }}</p>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div class="flex items-start gap-5">
                            <div class="bg-emerald-100 p-4 rounded-xl shadow-inner">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11 11 0 005.516 5.515l1.13-2.257a1 1 0 011.21-.503l4.492 1.498a1 1 0 01.685.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-slate-800">ফোন</h4>
                                <p class="text-slate-600">{{ $contact->phone }}</p>
                            </div>
                        </div>

                        <!-- Email -->
                        <div class="flex items-start gap-5">
                            <div class="bg-emerald-100 p-4 rounded-xl shadow-inner">
                                <svg class="w-7 h-7 text-emerald-600" fill="none" stroke="currentColor" stroke-width="2"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="text-xl font-semibold text-slate-800">ইমেইল</h4>
                                <p class="text-slate-600">{{ $contact->email }}</p>
                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>
    </section>

    <section class="bg-slate-50 mb-10">
        <div class="container mx-auto px-4">

            <div class="text-center mb-12">
                <h2 class="text-2xl md:text-4xl font-extrabold text-slate-800">
                    আমাদের খুঁজুন
                </h2>
                <div class="w-24 h-1 bg-emerald-500 mx-auto mt-4"></div>
            </div>
            <div class="w-full rounded-2xl shadow-xl overflow-hidden">
               
                <div class="relative h-[450px]">
                    <iframe class="absolute top-0 left-0 w-full h-full"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.914228941215!2d90.41339607598836!3d23.78612148731508!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c783c5934335%3A0x8545814b353ded4f!2sSoftyfybD%20Limited%20(Gulshan%20Branch)!5e0!3m2!1sen!2sbd!4v1676458315183!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>

        </div>
    </section>
@endsection
