  @extends('layouts.app')
  @section('section')
      @include('includes.breadcumb')

      <section class="bg-slate-50 py-16">
          <div class="container mx-auto px-4">
              <div class="flex flex-wrap justify-center gap-8">
                  @forelse ($blogs as $item)
                      <div
                          class="w-full max-w-sm bg-white rounded-lg overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                          <div class="h-56 overflow-hidden">
                              <img src="data:image/jpeg;base64,{{ base64_encode($item->image) }}" alt="Student studying"
                                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                          </div>
                          <div class="p-6 flex flex-col flex-grow">
                              <div class="flex justify-between items-center text-sm text-gray-500 mb-3">
                                  <span class="font-medium">Post by: <span
                                          class="text-slate-800 font-semibold">{{ $item->author }}</span></span>
                                  <span>Date: {{ $item->created_at }}</span>
                              </div>
                              <h3 class="text-xl font-bold text-teal-700 mb-6 leading-snug flex-grow">
                                 <a href="{{ route('blog.show', [$item->id, $item->slug]) }}">{{ $item->title }}</a> 
                              </h3>
                              <div>
                                  <a href="{{ route('blog.show', [$item->id, $item->slug]) }}"
                                      class="inline-flex items-center bg-emerald-50 text-emerald-700 px-4 py-2 rounded font-semibold text-sm hover:bg-emerald-100 transition-colors">
                                      আরো দেখুন
                                      <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 ml-2" fill="none"
                                          viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                              d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                      </svg>
                                  </a>
                              </div>
                          </div>
                      </div>
                  @empty
                      <div
                          class="w-full max-w-sm bg-white rounded-lg overflow-hidden border border-gray-100 shadow-sm hover:shadow-md transition-shadow duration-300 flex flex-col">
                          <div class="h-56 overflow-hidden">
                              <img src="https://images.unsplash.com/photo-1517486808906-6ca8b3f04846?q=80&w=1000&auto=format&fit=crop"
                                  alt="Student studying"
                                  class="w-full h-full object-cover hover:scale-105 transition-transform duration-500">
                          </div>
                          <div class="p-6 flex flex-col flex-grow">

                              <h3 class="text-xl font-bold text-slate-800 mb-6 leading-snug flex-grow">
                                  কোনো সংবাদ / ব্লগ পাওয়া যায়নি
                              </h3>

                          </div>
                      </div>
                  @endforelse


              </div>
          </div>
      </section>
  @endsection
