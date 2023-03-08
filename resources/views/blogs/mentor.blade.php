<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Blog Mentor') }}
        </h2>
    </x-slot>
    
    <div class="rounded-md bg-white bg-[url('/gambar/courses-1.png')] bg-center bg-cover overflow-hidden">
        <a href="">
          <div class="flex p-5 min-h-[220px] flex-col items-start bg-gradient-to-b from-transparent to-black">
            <div class="flex w-full">
              <span class="bg-white rounded-3xl py-3 px-5 text-[#FF994F] text-sm mr-auto"><b>$25</b>/Course</span>
              <span class="flex rounded-3xl bg-[#00000066] py-3 px-5 text-sm ml-auto">
                <img src="./gambar/star.svg" alt="">
                <p class="ml-2 text-white"> (2.1k) </p>
              </span>
            </div>
            <div class="mt-auto">
              <h5 class="text-lg font-bold text-white">{{ $blog->title }}</h5>
            </div>
            <div class="flex w-full mt-2">
              <div class="flex mr-auto text-sm">
                <img src="./gambar/user-1.png" class="max-h-[24px] max-w-[24px]" alt=""/>
                <div class="pl-3 text-white">
                  <span class="block text-sm">Raphael</span>
                  <span class="text-xs">Teacher</span>
                </div>
              </div>
              <div class="flex ml-auto text-sm">
                <span class="h-[22px] w-[22px] bg-gray-300 rounded-full flex text-white justify-center items-center">
                  <img src="./gambar/Polygon 1.svg" alt="">
                </span>
                <div class="pl-3 text-white">
                  <span class="block text-sm">{!! $blog->content !!}</span>
                </div>
              </div>
            </div>
          </div>
        </a>
      </div>
      <img src="{{ asset($blog->image) }}" class="w-60 h-60"alt="{{ asset($blog->image) }}">
</x-app-layout>