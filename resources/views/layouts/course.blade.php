
  <div class="grid lg:grid-cols-3 sm:grid-cols-1 mt-7 gap-7">
    {{-- <div class="">
        <div class="flex flex-1 hidden lg:flex lg:items-center lg:justify-center">
            <img class="w-full" src="Frame 1597882777.png">
        </div>
        <a href="">
        <div class="flex flex-col items-start mt-5">
          <div class="mt-auto">
            <h1 class="text-xl font-bold">Creating a Web Login and Todolist Using Laravel</h1>
            <p class="text-[#969696] text-sm mt-5">Lörem ipsum mögunde seråpp pos. Faplasade jer och titeck </p>
          </div>
          <div class="flex w-full mt-5">
            <div class="text-sm mr-auto flex">
              <div class="">
                <div class="flex gap-2">
                    <div class="flex ">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    </div>
                    <p class="text-[#969696] text-lg">(4.2)</p>
                </div>
                <div class="text-sm ml-auto flex mt-2">
                    <span class="h-[22px] w-[22px] rounded-full flex text-white justify-center items-center">
                      <img src="ant-design_play-circle-outlined.svg" alt="">
                    </span>
                    <div class="pl-3 ">
                      <span class="block text-sm text-[#969696]">8 Video</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="text-3xl ml-auto mr-10">
                <h1 class="text-[#5C50E3] font-semibold">$35</h1>
            </div>
          </div>
        </div>
      </a>
    </div> --}}
    @foreach ($blogs as $blog)
    <div class="">
        <div class="flex flex-1 hidden lg:flex lg:items-center lg:justify-center">
            <img class="w-full" src="{{ asset($blog->image) }}" alt="{{ asset($blog->image) }}">
        </div>
        <a href="">
        <div class="flex flex-col items-start mt-5">
          <div class="mt-auto">
            <h1 class="text-xl font-bold">{{$blog->title}}</h1>
            <p class="text-[#969696] text-sm mt-5">{{$blog->content}}</p>
          </div>
          <div class="flex w-full mt-5">
            <div class="text-sm mr-auto flex">
              <div class="">
                <div class="flex gap-2">
                    <div class="flex ">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    </div>
                    <p class="text-[#969696] text-lg">(4.2)</p>
                </div>
                <div class="text-sm ml-auto flex mt-2">
                    <span class="h-[22px] w-[22px] rounded-full flex text-white justify-center items-center">
                      <img src="ant-design_play-circle-outlined.svg" alt="">
                    </span>
                    <div class="pl-3 ">
                      <span class="block text-sm text-[#969696]">8 Video</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="text-3xl ml-auto mr-10">
                <h1 class="text-[#5C50E3] font-semibold">$20</h1>
            </div>
          </div>
        </div>
      </a>
    </div>
    @endforeach

    {{-- <div class="">
                <div class="flex flex-1 hidden lg:flex lg:items-center lg:justify-center">
                    <img class="w-full" src="page 3.png">
                </div>
        <a href="">
        <div class="flex flex-col items-start mt-5">
          <div class="mt-auto">
            <h1 class="text-xl font-bold">Build a CMS Website With Laravel and Nuxt Js</h1>
            <p class="text-[#969696] text-sm mt-5">Lörem ipsum mögunde seråpp pos. Faplasade jer och titeck </p>
          </div>
          <div class="flex w-full mt-5">
            <div class="text-sm mr-auto flex">
              <div class="">
                <div class="flex gap-2">
                    <div class="flex ">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    <img class="p-1" src="Star 1.png">
                    </div>
                    <p class="text-[#969696] text-lg">(4.2)</p>
                </div>
                <div class="text-sm ml-auto flex mt-2">
                    <span class="h-[22px] w-[22px] rounded-full flex text-white justify-center items-center">
                      <img src="ant-design_play-circle-outlined.svg" alt="">
                    </span>
                    <div class="pl-3 ">
                      <span class="block text-sm text-[#969696]">8 Video</span>
                    </div>
                </div>
              </div>
            </div>
            <div class="text-3xl ml-auto mr-10">
                <h1 class="text-[#5C50E3] font-semibold">$40</h1>
            </div>
          </div>
        </div>
      </a>
    </div> --}}
</div>
<div class="w-full justify-center mt-7 flex">
    <button class="bg-[#5C50E3] py-3 px-8 text-white rounded-full hover:bg-opacity-50 mb-5">See course</button>
</div>