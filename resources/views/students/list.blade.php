@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <section class="container mx-auto py-8 px-4">
        <div class="relative overflow-hidden shadow-xl sm:rounded-xl">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-white uppercase bg-brand-green font-semibold">

                    <tr class="text-lg">
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            ক্রমিক
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            ক্লাস
                        </th>

                        <th scope="col" class="px-6 py-4 tracking-wider">
                            সেকশন
                        </th>
                        {{-- <th scope="col" class="px-6 py-4 tracking-wider">
                            বিভাগ
                        </th> --}}
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            ছাত্র
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            ছাত্রী
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            মুসলিম
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            হিন্দু
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            বৌদ্ধ
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            খ্রিষ্টান
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            সর্বমোট ছাত্র/ ছাত্রী
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($students as $key => $item)
                        <tr class="odd:bg-white even:bg-teal-50 hover:bg-teal-100 transition-colors duration-200 text-xl">
                            <td class="px-6 py-4 font-bold text-teal-700">
                                {{ str_pad(enToBn(++$key), 2, '0', STR_PAD_LEFT) }}
                            </td>
                            <td class="px-6 py-4 text-gray-900 whitespace-nowrap">
                                {{ $item->class_name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $item->section_name }}
                            </td>
                            <td class="px-6 py-4 text-md">
                                {{ enToBn($item->male_count) }}
                            </td>
                            <td class="px-6 py-4 text-xl">
                                {{ enToBn($item->female_count) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ enToBn($item->islam_count) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ enToBn($item->hindu_count) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ enToBn($item->buddhist_count) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ enToBn($item->christian_count) }}
                            </td>
                            <td class="px-6 py-4">
                                {{ enToBn($item->total_student) }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-gray-500 py-4">
                                কোন রেকর্ড পাওয়া যায়নি
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </section>


    <section class="container mx-auto py-8 px-4">
        <div class="bg-white shadow-lg rounded-lg p-8 mb-6 border border-gray-100">
            <div class="flex flex-col lg:flex-row items-center gap-6 lg:gap-10">

                <div class="flex-shrink-0">
                    <span class="bg-gray-800 text-white px-5 py-2.5 rounded text-sm font-bold tracking-wide shadow-sm">
                        সর্বমোট তথ্যাদি
                    </span>
                </div>

                <div class="flex-grow w-full">
                    <div
                        class="grid grid-cols-1 md:grid-cols-2 text-sm text-gray-800 font-medium divide-y md:divide-y-0 md:divide-x divide-gray-200">

                        <div class="px-0 md:px-6 py-4 md:py-0 space-y-3">
                            <div class="flex justify-between items-center">
                                <span>মোট শিক্ষার্থীর সংখ্যা</span>
                                <span class="font-bold">{{ enToBn($totals['total_students']) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>ছাত্র</span>
                                <span class="font-bold">{{ enToBn($totals['total_male']) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>ছাত্রী</span>
                                <span class="font-bold">{{ enToBn($totals['total_female']) }}</span>
                            </div>
                        </div>

                        <!-- Column 2: Religion Stats -->
                        <div class="px-0 md:px-6 py-4 md:py-0 space-y-3">
                            <div class="flex justify-between items-center">
                                <span>মুসলিম</span>
                                <span class="font-bold">{{ enToBn($totals['total_muslim']) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>হিন্দু</span>
                                <span class="font-bold">{{ enToBn($totals['total_hindu']) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>বৌদ্ধ</span>
                                <span class="font-bold">{{ enToBn($totals['total_buddhist']) }}</span>
                            </div>
                            <div class="flex justify-between items-center">
                                <span>খ্রিষ্টান</span>
                                <span class="font-bold">{{ enToBn($totals['total_christian']) }}</span>
                            </div>
                        </div>

                        <!-- Column 3: Special Categories -->
                       

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
