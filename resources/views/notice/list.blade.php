@extends('layouts.app')
@section('section')
    @include('includes.breadcumb')

    <section class="container mx-auto py-8 px-4">
        <div class="relative overflow-hidden shadow-xl sm:rounded-xl">
            <table class="w-full text-sm text-left text-gray-600">
                <thead class="text-xs text-white uppercase bg-brand-green font-semibold">
                    <tr>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            ক্রমিক
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            বিষয়
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            তারিখ
                        </th>
                        <th scope="col" class="px-6 py-4 tracking-wider">
                            কার্যকলাপ
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($notices as $key => $item)
                        <!-- Here, the stripes use a light tint of the header color -->
                        <tr class="odd:bg-white even:bg-teal-50 hover:bg-teal-100 transition-colors duration-200">
                            <td class="px-6 py-4 font-bold text-teal-700">
                                {{ str_pad(++$key, 2, '0', STR_PAD_LEFT) }}
                            </td>
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $item->title }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $item->publish_date }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{ route('notice.show', $item->id) }}"
                                    class="inline-flex items-center px-4 py-2 text-xs font-medium text-white bg-brand-green rounded-md hover:bg-teal-700 transform hover:scale-105 transition-all duration-200">
                                    <!-- Eye Icon SVG -->
                                    <svg class="w-4 h-4 mr-1.5" fill="currentColor" viewBox="0 0 20 20"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z"></path>
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.022 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                    পুরোটা দেখুন
                                </a>
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
@endsection
