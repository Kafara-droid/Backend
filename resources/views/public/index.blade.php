<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mangcoding Store</title>
    <link rel="icon" type="image/x-icon" href="/assets/favicon.ico">
    @vite('resources/css/app.css')
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio,line-clamp"></script>
    <style type="text/tailwindcss">
      @layer utilities {
        .container {
          @apply max-w-[90%] mx-auto;
        }
  
        .btn {
          @apply bg-[#212121] text-white px-5 py-3 text-center;
        }  
  
        .btn.rounded {
          @apply rounded-full;
        }
  
        .home::before {
        }
  
        .active {
          @apply block;
        }
      }
    </style>
    </head>
  <body>
    <!-- Header Start -->
    <header class="">
      <nav class="container relative flex items-center justify-between py-5">
        <a href="#home">
          <img src="./assets/logo.svg" alt="">
        </a>
  
        <div class="flex-1 hidden ml-12 space-x-4 md:block">
          <a href="">Home</a>
          <a href="">About Us</a>
          <a href="">Shop</a>
          <a href="">Contact</a>
        </div>
  
        <div class="flex items-center hidden space-x-5 md:flex">
          <a href="">
            <img src="./assets/cart.svg" alt="">
          </a>
          <a href="">
            <img src="./assets/search.svg" alt="">
          </a>
          @if (Route::has('login'))
          @auth
          <a href="{{ url('/dashboard') }}" class="btn">Dasboard</a>
          @else
            <a href="{{ route('login') }}" class="btn">Login</a>
              @if (Route::has('register'))
              <a href="{{ route('register') }}" class="btn">Registration</a>
              @endif
          @endauth
          @endif
        </div>
  
        <a href="#" class="hamburger md:hidden">
          <img src="./assets/hamburger.svg" alt="">
        </a>
  
        <div
          class="absolute inset-x-0 z-40 hidden p-4 bg-white border border-gray-300 rounded-lg shadow-lg popup top-10 right-12 md:hidden">
          <div class="flex space-x-5">
            <div class="flex items-center w-full h-full px-3 mb-4 space-x-1 border border-gray-400 rounded-full">
              <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="8.36556" cy="8.36458" r="7.03353" stroke="#070D13" stroke-width="2" />
                <rect x="13.8848" y="13" width="6.56463" height="1.25023" rx="0.625113" transform="rotate(45 13.8848 13)"
                  fill="#070D13" />
              </svg>
              <input type="text" class="w-full border-none" placeholder="Search ..." />
            </div>
            <a href="">
              <img src="./assets/cart.svg" alt="">
            </a>
          </div>
  
          <div class="flex flex-col space-y-4">
            <a href="">Home</a>
            <a href="">About Us</a>
            <a href="">Shop</a>
            <a href="">Contact</a>
          </div>
  
          <div class="flex flex-col mt-4">
            <a href="" class="btn">Registration</a>
          </div>
        </div>
      </nav>
    </header>
    <!-- Header End -->

    <!-- Hero Section Start -->
    <section id="home" class="pt-36 ">
      <div class="container">
        <div class="flex flex-wrap">
          <div class="self-center w-full px-4 lg:w-1/2">
            <button class="px-8 py-2 text-white transition duration-300 ease-in-out rounded-full bg-[#212121] hover:bg-primary hover:shadow-lg">Mangcoding Store</button>
            <h1 class="block mt-1 text-base text-4xl font-semibold font-bold text-[#212121] md:text-xl lg:text-5xl">Get the right Furniture For your Home</h1>
            <p class="mb-10 font-medium leading-relaxed text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero repellat in, optio similique sapiente explicabo molestiae soluta excepturi.</span></p>

            <a href="#" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out bg-[#212121] hover:bg-primary hover:shadow-lg">Shop Now</a>
          </div>
          <div class="self-end w-full px-4 lg:w-1/2">
            <div class="relative mt-10 lg:right-0 lg:mt-9">
              <img src="./assets/image 16.png" alt="Furniture" class="relative z-10 max-w-full mx-auto" />
              <span class="absolute bottom-0 -translate-x-1/2 left-1/2 md:scale-125">
              </span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Hero Section End -->

    <!-- Jaminan Section Start -->
    <section id="Jaminan" class="pt-10 pb-10 bg-[#212121]">
      <div class="container">
        <div class="w-full px-4">
          <div class="flex flex-wrap items-center justify-center gap-3">
            <div class="mx-4 grid grid-rows-2 grid-flow-col  h-[83px] w-[277px] items-center justify-center  border text-slate-300 hover:border-primary hover:bg-primary hover:text-white py-4 transition duration-500 hover:opacity-100 lg:mx-6 xl:mx-8">
              <div class="row-span-2">
                <img src="./assets/Group 1843.svg" alt="">
              </div>
              <div class="ml-6">
                <h4 class="text-lg font-semibold">High Quality</h4>
              </div>
              <div class="ml-6">
                <p class="text-xs "> Material Strong</p>
              </div>
            </div>
            <div class="mx-4 grid grid-rows-2 grid-flow-col gap-3 mr-3 h-[83px] w-[277px] items-center justify-center  border text-slate-300 hover:border-primary hover:bg-primary hover:text-white py-4 transition duration-500 hover:opacity-100 lg:mx-6 xl:mx-8">
              <div class="row-span-2 ">
                <img src="" alt="">
              </div>
              <div>
                <h4 class="text-lg font-semibold">Warranty Protection</h4>
              </div>
              <div>
                <p class="text-xs "> Over 3 years</p>
              </div>
            </div>
            <div class="mx-4 grid grid-rows-2 grid-flow-col gap-3 mr-3 h-[83px] w-[277px] items-center justify-center  border text-slate-300 hover:border-primary hover:bg-primary hover:text-white py-4 transition duration-500 hover:opacity-100 lg:mx-6 xl:mx-8">
              <div class="row-span-2 ">
                <img src="" alt="">
              </div>
              <div>
                <h4 class="text-lg font-semibold">Free Shipping</h4>
              </div>
              <div>
                <p class="text-xs ">Order 100$</p>
              </div>
            </div>
            <div class="mx-4 grid grid-rows-2 grid-flow-col gap-3 mr-3 h-[83px] w-[277px] items-center justify-center border text-slate-300 hover:border-primary hover:bg-primary hover:text-white py-4 transition duration-500 hover:opacity-100 lg:mx-6 xl:mx-8">
              <div class="row-span-2 ">
                <img src="./assets/support.svg " alt="">
              </div>
              <div>
                <h4 class="text-lg font-semibold">24 / Support</h4>
              </div>
              <div>
                <p class="text-xs ">Dedicated support</p>
              </div>
            </div>
          </div>
        </div>
    </section>
    <!-- Jaminan Section End -->

    <!-- About Section Start -->
    <section id="about" class="pb-32 pt-36 ">
      <div class="container">
        <div class="flex flex-wrap ">
          <div class="w-full px-4 py-4 lg:w-1/2">
            <div class="bg-[#BEDDE2] flex pt-5 pb-10">
            <div>
            <img src="./assets/image 19.png" alt="">
            </div>
            <div class="pt-5 ">
            <h2 class="max-w-md mb-5 text-2xl font-bold text-[#212121] dark:text-white lg:text-4xl">Ruang Tamu</h2>
            <p class="max-w-xl pb-10 text-base font-medium text-secondary lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id temporibus maiores sequi vitae saepe iusto deleniti!</p>
            <a href="#" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out bg-[#212121] hover:bg-primary hover:shadow-lg">Buy Now</a>
          </div>
          </div>
          </div>
          <div class="w-full px-4 py-4 lg:w-1/2">
            <div class="bg-[#DEEFE9] flex pt-5 pb-10">
            <div>
              <img src="./assets/image 19.png" alt="">
              </div>
              <div class="pt-5 ">
              <h2 class="max-w-md mb-5 text-2xl font-bold text-[#212121] dark:text-white lg:text-4xl">Ruang Kerja</h2>
              <p class="max-w-xl pb-10 text-base font-medium text-secondary lg:text-lg">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id temporibus maiores sequi vitae saepe iusto deleniti!</p>
              <a href="#" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-in-out bg-[#212121] hover:bg-primary hover:shadow-lg">Buy Now</a>
            </div>
          </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Product Section Start -->
    <section id="" class="container py-20">
      <span class="text-xl text-yellow-500">Post List</span>
      <div class="flex items-center justify-between w-full">
        <h3 class="text-5xl font-semibold">
          Our Best Seller Product
        </h3>
        <a href="" class="inline-block btn">See More</a>
      </div>
  
      <div class="grid grid-cols-1 mt-10 md:grid-cols-2 lg:grid-cols-4 gap-y-28 gap-x-10">
        <div class="relative">
          <img src="./assets/image-1.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="relative">
          <img src="./assets/image-2.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="">
          <img src="./assets/image-3.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="">
          <img src="./assets/image-4.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
  
        <div class="">
          <img src="./assets/image-5.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="">
          <img src="./assets/image-6.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="">
          <img src="./assets/image-7.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
        <div class="">
          <img src="./assets/image-8.png" class="w-full h-full" alt="">
          <div class="mt-3 space-y-2">
            <div class="flex justify-between">
              <p class="text-xl font-bold">Meja Kerja ( Kantoran )</p>
              <span class="text-xl font-bold">$1000</span>
            </div>
            <div class="flex justify-between">
              <p class="text-lg text-gray-500">Best Quality</p>
              <p class="flex text-gray-500">
                <img width="15" src="./assets/star.svg" class="mr-1" alt="">
                (2,1)
              </p>
            </div>
          </div>
        </div>
  
  
      </div>
    </section>
    <!-- Product Section Start -->

    <!-- Product Section Start -->
    <section class="container flex flex-col items-center py-20 space-y-5 lg:flex-row lg:space-x-10 lg:space-y-0">
      <img src="./assets/workspace.png" class="flex-1 w-full" alt="">
      <div class="flex-1 space-y-6">
        <h2 class="text-6xl font-bold">Simple Wooden Table</h2>
        <p class="text-gray-500">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque harum quaerat animi ipsa blanditiis repellat
          nesciunt similique! Tenetur, dolorum nihil facere voluptate sunt aliquam eligendi dolorem non culpa,
          exercitationem ducimus.
        </p>
  
        <div class="flex items-center justify-between">
          <a href="" class="inline-block btn"> Buy Now</a>
          <p class="text-3xl font-bold">$1,300</p>
        </div>
      </div>
    </section>
    <!-- Product Section Start -->

    <!-- Product Section Start -->
    <section class="banner container relative mt-5 mb-20 bg-[#DEEFE9] min-h-[400px] flex items-center justify-center">
      <img src="./assets/lamp.png" alt="" class="absolute top-0 left-0">
  
      <img src="./assets/curly.png" class="absolute" alt="">
  
      <div class="relative z-40 flex flex-col items-center justify-center p-6 space-y-3">
        <h2 class="text-4xl font-bold">Find Furniture Now</h2>
        <p class="text-lg text-gray-500">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor erat sapien
          faucibus lectus,
        </p>
        <a href="" class="inline-block btn">Order Now</a>
      </div>
  
      <img src="./assets/chair-left.png" alt="" class="absolute bottom-0 right-0">
  
    </section>
    <!-- Product Section Start -->

    <!-- Footer Start -->
    <footer class="pt-24 pb-12 bg-[#212121]">
      <div class="container">
        <div class="flex">
          <div class="w-full px-4 mb-12 font-medium text-slate-300 md:w-1/3">
            <section class="flex items-center gap-5 mb-5">
              <img src="./assets/Group 1.svg" alt="" width="150">
            </section>
            <p class="mt-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam mollis, justo nec porttitor auctor, erat sapien faucibus lectus, vel tempor dolor augue et lectus. </p>
            <p></p>
            <p></p>
            <div class="flex items-center mt-10 ">
              <!-- Facebook -->
              <a
                href="https://facebook.com"
                target="_blank"
                class="flex items-center justify-center mr-3 border rounded-full h-9 w-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Facebook</title>
                  <path
                  d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                </svg>
              </a>
              <!-- Twitter -->
              <a
                href="https://twitter.com"
                target="_blank"
                class="flex items-center justify-center mr-3 border rounded-full h-9 w-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Twitter</title>
                  <path
                    d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"
                  />
                </svg>
              </a>
              <!-- LinkedIn -->
              <a
                href="https://linkedin.com"
                target="_blank"
                class="flex items-center justify-center mr-3 border rounded-full h-9 w-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>LinkedIn</title>
                  <path
                    d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"
                  />
                </svg>
              </a>
              <!-- Instagram -->
              <a
                href="https://instagram.com"
                target="_blank"
                class="flex items-center justify-center mr-3 border rounded-full h-9 w-9 border-slate-300 text-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg role="img" width="20" class="fill-current" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>
            </div>
          </div>
          <!-- <div class="flex flex-wrap"> -->
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Navigation</h3>
            <ul class="gap-5 text-slate-300">
              <li>
                <a href="#categories" class="inline-block mb-3 text-base hover:text-primary">Categories</a>
              </li>
              <li>
                <a href="#product" class="inline-block mb-3 text-base hover:text-primary">Best Product</a>
              </li>
              <li>
                <a href="#cart" class="inline-block mb-3 text-base hover:text-primary">Cart</a>
              </li>
              <li>
                <a href="#wishlish" class="inline-block mb-3 text-base hover:text-primary">Wishlist</a>
              </li>
              <li>
                <a href="#contact" class="inline-block mb-3 text-base hover:text-primary">Contact</a>
              </li>
            </ul>

            <h3 class="mt-10 mb-5 text-xl font-semibold text-white">Payment method</h3>
            <ul class="gap-5 text-slate-300">
              <li>
                <a href="#Credit" class="inline-block mb-3 text-base hover:text-primary">Credit card</a>
              </li>
              <li>
                <a href="#Paypal" class="inline-block mb-3 text-base hover:text-primary">Paypal</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Shop</h3>
            <ul class="gap-5 text-slate-300">
              <li>
                <a href="#RuangTamu" class="inline-block mb-3 text-base hover:text-primary">Ruang Tamu</a>
              </li>
              <li>
                <a href="#RumahMakan" class="inline-block mb-3 text-base hover:text-primary">Ruang Makan</a>
              </li>
              <li>
                <a href="#RuangKerja" class="inline-block mb-3 text-base hover:text-primary">Ruang Kerja</a>
              </li>
              <li>
                <a href="#RuangTidur" class="inline-block mb-3 text-base hover:text-primary">Ruang Tidur</a>
              </li>
              <li>
                <a href="#furniture" class="inline-block mb-3 text-base hover:text-primary">Furniture</a>
              </li>
            </ul>

            <h3 class="mt-10 mb-5 text-xl font-semibold text-white">Setting</h3>
            <ul class="gap-5 text-slate-300">
              <li>
                <a href="#account" class="inline-block mb-3 text-base hover:text-primary">My Acount</a>
              </li>
              <li>
                <a href="#order" class="inline-block mb-3 text-base hover:text-primary">Order</a>
              </li>
              <li>
                <a href="#address" class="inline-block mb-3 text-base hover:text-primary">Address</a>
              </li>
              <li>
                <a href="#password" class="inline-block mb-3 text-base hover:text-primary">Password</a>
              </li>
            </ul>
          </div>
          <div class="w-full px-4 mb-12 md:w-1/3">
            <h3 class="mb-5 text-xl font-semibold text-white">Product</h3>
            <ul class="text-slate-300">
              <li>
                <a href="#chair" class="inline-block mb-3 text-base hover:text-primary">Chair</a>
              </li>
              <li>
                <a href="#table" class="inline-block mb-3 text-base hover:text-primary">Table</a>
              </li>
              <li>
                <a href="#wardrobe" class="inline-block mb-3 text-base hover:text-primary">Wardrobe</a>
              </li>
            </ul>
            
            <h3 class="mt-10 mb-5 text-xl font-semibold text-white">Contact</h3>
            <ul class="text-slate-300">
              <li class="">
                <a href="#" class="flex inline-block gap-3 mb-3 text-base hover:text-primary"><img src="./assets/Vector4.png" alt="">Lokasimu di Jakarta Barat</a>
              </li>
              <li>
                <a href="#" class="flex inline-block gap-3 mb-3 text-base hover:text-primary"><img src="./assets/Vector2.png" alt="" class="flex">furniture@gmail.com</a>
              </li>
              <li class="">
                <a href="#" class="flex inline-block gap-3 mb-3 text-base hover:text-primary"><img src="./assets/Vector3.png" alt="" class="">0897 8998 8976</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      </div>
    </footer>
    <!-- Footer End -->

    <!-- Back to top Start -->
    <a href="#home" class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse" id="to-top">
      <span class="block w-4 h-4 mt-2 rotate-45 border-t-2 border-l-2"></span>
    </a>
    <!-- Back to top End -->

    <script src="./js/home.js"></script>
  </body>
</html>
