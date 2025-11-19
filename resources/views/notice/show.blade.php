@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')
    <section class="container mx-auto py-8 px-4">

        <!-- Header Bar with Navigation and Actions -->
        <header class="flex items-center justify-between mb-6">
            <a href="{{ route('notice.list') }}"
                class="flex items-center px-4 py-2 bg-white text-gray-800 text-sm font-semibold rounded-lg hover:bg-gray-200 border border-gray-200 transition-colors">
                <!-- Back Arrow Icon SVG -->
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"></path>
                </svg>
                নোটিশে ফিরুন
            </a>

            <h1 class="text-lg font-semibold text-gray-700 hidden md:block text-center">
                {{ $notice->title }}
            </h1>

            <a href="#"
                class="flex items-center px-4 py-2 bg-brand-green text-white text-sm font-semibold rounded-lg hover:bg-green-600 transition-colors shadow shadow-green-500/30">
                <!-- Download Icon SVG -->
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3">
                    </path>
                </svg>
                ডাউনলোড করুন
            </a>
        </header>

        <!-- Main Content Card -->
        <div class="bg-white p-6 md:p-10 rounded-xl shadow-lg border border-gray-200">
            <div class="space-y-6 text-gray-800">

                <h2 class="text-center text-xl font-bold text-gray-900">বিশেষ বিজ্ঞপ্তি!</h2>

                <p><span class="font-semibold">বিষয়:</span> {{ $notice->title }}</p>

                <p class="leading-relaxed">
                    অত্র বিদ্যালয়ের সকল শ্রেণীর প্রথম সাময়িক পরীক্ষা ২০২০ আগামী ২০২৩ সালের ২২ সেপ্টেম্বর থেকে শুরু হবে।
                    পরীক্ষা চলবে ২০২৩ সালের ২৮ সেপ্টেম্বর পর্যন্ত। পরীক্ষার সময়সূচি নিম্নরূপ:
                </p>

                <!-- Embedded Table for Schedule -->
                <div class="overflow-x-auto">
                    <table class="w-full min-w-[400px] border-collapse">
                        <thead class="bg-teal-50 text-teal-800 text-sm">
                            <tr>
                                <th class="px-4 py-3 font-semibold text-center rounded-tl-lg">শ্রেণী</th>
                                <th class="px-4 py-3 font-semibold text-center">তারিখ</th>
                                <th class="px-4 py-3 font-semibold text-center rounded-tr-lg">সময়</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-center">১০ম</td>
                                <td class="px-4 py-3 text-center">০১ মার্চ, ২০২০</td>
                                <td class="px-4 py-3 text-center">সকাল ৯টা থেকে ১২টা</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-center">৯ম</td>
                                <td class="px-4 py-3 text-center">০১ মার্চ, ২০২০</td>
                                <td class="px-4 py-3 text-center">দুপুর ১২টা থেকে ৩টা</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-center">৮ম</td>
                                <td class="px-4 py-3 text-center">০১ মার্চ, ২০২০</td>
                                <td class="px-4 py-3 text-center">সকাল ৯টা থেকে ১২টা</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-center">৭ম</td>
                                <td class="px-4 py-3 text-center">০১ মার্চ, ২০২০</td>
                                <td class="px-4 py-3 text-center">সকাল ১২টা থেকে ৩টা</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="px-4 py-3 text-center rounded-bl-lg">৬ষ্ঠ</td>
                                <td class="px-4 py-3 text-center">০১ মার্চ, ২০২০</td>
                                <td class="px-4 py-3 text-center rounded-br-lg">সকাল ৯টা থেকে ১২টা</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Instructions Section -->
                <div>
                    <h3 class="font-bold text-gray-900 mb-2">পরীক্ষার্থীদের নির্দেশাবলী:</h3>
                    <ul class="list-disc list-inside space-y-1 text-gray-700">
                        <li>পরীক্ষার হলে অবশ্যই নির্ধারিত সময়ের পূর্বে উপস্থিত হতে হবে।</li>
                        <li>পরীক্ষার হলে কোন প্রকার মোবাইল ফোন, ক্যালকুলেটর, ইত্যাদি অনুমোদিত নয়।</li>
                        <li>পরীক্ষার হলে কোন প্রকার অসদাচরণ করা যাবে না।</li>
                    </ul>
                </div>

                <p class="leading-relaxed">
                    পরীক্ষার সময়সূচি অনুযায়ী পরীক্ষায় অংশগ্রহণ করার জন্য সকল পরীক্ষার্থীদের নির্দেশ দেওয়া হল।
                </p>

                <!-- Signature Section -->
                <div class="pt-4">
                    <p class="font-semibold">প্রধান শিক্ষক,</p>
                    <p>এক্সওয়াইজেড স্কুল এবং কলেজ</p>
                </div>

            </div>
        </div>

    </section>
@endsection
