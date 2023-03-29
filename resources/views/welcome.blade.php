@extends('layouts.front')
@section('main')
	<!-- CAROUSEL -->
	<section class="py-7 md:py-[70px]">
		<div id="controls-carousel" class="relative" data-carousel="static">
			<div class="relative h-56 overflow-hidden md:h-[550px]">
				<!-- Item 1 -->
				<div class="hidden duration-700 ease-in-out" data-carousel-item="active">
					<img src="/assets/img-slide-2.jpg"
						class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 brightness-50" alt="..." />

						<!-- CALL TO ACTION -->
					<div class="absolute text-center top-1/4 right-1/2 translate-x-1/2 text-white font-raleway w-[800px]">
						<h1 class="font-bold md:text-[40px]">
							Selamat Datang di Website HMTI
						</h1>
						<h3 class="text-2xs md:text-xl">Himpunan Mahasiswa Teknik Informatika <br>Universitas Nusa Putra</h3>
						<a href="/about/"
							class="absolute right-1/2 translate-x-1/2 flex items-center text-center gap-2 md:py-2 md:px-6 px-3 py-1 bg-secondary rounded-full md:text-[15px] text-xs font-raleway font-medium text-gray-600 mt-10 hover:bg-blue-700 hover:text-white focus:bg-blue-700 focus:text-white duration-500">
							Selengkapnya<i class="fa-solid fa-chevron-right"></i>
						</a>
					</div>
				</div>
				<!-- Item 2 -->
				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<img src="/assets/img-slide-1.jpg"
						class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
				</div>
				<!-- Item 3 -->
				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<img src="/assets/img-slide-2.jpg"
						class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
				</div>
				<!-- Item 4 -->
				<div class="hidden duration-700 ease-in-out" data-carousel-item>
					<img src="/assets/img-slide-1.jpg"
						class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="..." />
				</div>
			</div>

			<!-- CAROUSEL CONTROL -->
			<button type="button"
				class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
				data-carousel-prev>
				<span class="inline-flex items-center justify-center">
					<svg aria-hidden="true" class="w-5 h-5 text-white md:w-10 md:h-10" fill="none" stroke="currentColor"
						viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7">
						</path>
					</svg>
					<span class="sr-only">Previous</span>
				</span>
			</button>
			<button type="button"
				class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group"
				data-carousel-next>
				<span class="inline-flex items-center justify-center">
					<svg aria-hidden="true" class="w-5 h-5 text-white md:w-10 md:h-10" fill="none" stroke="currentColor"
						viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
					</svg>
					<span class="sr-only">Next</span>
				</span>
			</button>
		</div>
	</section>

	<!------------------------------- DIVISI KEPENGURUSAN -------------------------->
	<section>
		<div class="w-full h-full py-10">
			<div class="container mx-auto">
				<div class="flex items-center justify-between">
					<h1 class="font-bold font-raleway text-[36px] text-three w-[100px]">
						Divisi Kepengurusan
					</h1>
					<div class="">
						<a href="/divisi/index.html"><button
								class="flex items-center gap-2 py-2 px-6 bg-secondary rounded-full text-[15px] font-raleway font-medium max-sm:hidden text-gray-600 hover:bg-blue-700 hover:text-white duration-500">
								Selengkapnya<i class="fa-solid fa-chevron-right"></i>
							</button></a>
					</div>
				</div>

				<div class="py-10">
					<div class="flex items-center justify-center gap-10">

						<!-- CARD 1 -->
						<div class="shadow-md w-[400px] h-[400px] rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
							<div class=""><img src="/assets/bph.svg" alt="" /></div>
							<h2 class="font-bold text-[20px] font-raleway py-6">
								Badan Pengurus Harian
							</h2>
							<p class="text-sm font-medium text-gray-500 font-raleway opacity-70">
								Lorem ipsum dolor sit amet consectetur. Morbi nec amet amet in
								justo arcu. <br />
								Isian..... <br />
								Isian..... <br />
								Isian..... <br />
								Isian.....
							</p>
							<div class="flex justify-end pt-8">
								<a href="" class="text-gray-700 duration-300 rounded-full bg-secondary lg:py-1 lg:px-5 lg:font-bold lg:text-2xl hover:bg-primary hover:text-white">
									<i class="fa-solid fa-chevron-right"></i>
								</a>
							</div>
						</div>

						<!-- CARD 2 -->
						<div class="shadow-md w-[400px] h-[400px] rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
							<div class=""><img src="/assets/danus.svg" alt="" /></div>
							<h2 class="font-bold text-[20px] font-raleway py-6">
								Dana Usaha
							</h2>
							<p class="text-sm font-medium text-gray-500 font-raleway opacity-70">
								Lorem ipsum dolor sit amet consectetur. Morbi nec amet amet in
								justo arcu. <br />
								Isian..... <br />
								Isian..... <br />
								Isian..... <br />
								Isian.....
							</p>
							<div class="flex justify-end pt-8">
								<a href="" class="text-gray-700 duration-300 rounded-full bg-secondary lg:py-1 lg:px-5 lg:font-bold lg:text-2xl hover:bg-primary hover:text-white">
									<i class="fa-solid fa-chevron-right"></i>
								</a>
							</div>
						</div>

						<!-- CARD 3 -->
						<div class="shadow-md w-[400px] h-[400px] rounded-[20px] p-10 hover:-translate-y-3 hover:shadow-2xl duration-500">
							<div class=""><img src="/assets/kader.svg" alt="" /></div>
							<h2 class="font-bold text-[20px] font-raleway py-6">
								Kaderisasi
							</h2>
							<p class="text-sm font-medium text-gray-500 font-raleway opacity-70">
								Lorem ipsum dolor sit amet consectetur. Morbi nec amet amet in
								justo arcu. <br />
								Isian..... <br />
								Isian..... <br />
								Isian..... <br />
								Isian.....
							</p>
							<div class="flex justify-end pt-8">
								<a href="" class="text-gray-700 duration-300 rounded-full bg-secondary lg:py-1 lg:px-5 lg:font-bold lg:text-2xl hover:bg-primary hover:text-white">
									<i class="fa-solid fa-chevron-right"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- ---------------TENTANG KAMI---------------- -->
	<section>
		<div class="w-full h-full py-14">
			<div class="container mx-auto">
				<div class="flex justify-center gap-[200px] items-center">
					<div class="h-[305px] w-[305px] flex justify-center items-center rounded-full shadow-2xl">
						<img class="h-[300px]" src="/assets/Logo-HMTI.png" alt="" />
					</div>
					<div class="w-[500px] h-[500px] font-raleway">
						<h1 class="font-bold text-2xl text-[#1E2748]">Tentang Kami</h1>
						<p class="text-[14px] py-6 text-[#1E2748] opacity-70">
							HMTI adalah Himpunan Mahasiswa Teknnik Informatika Universitas
							Nusa Putra yang berdiri pada tanggal 23 September 2013
						</p>
						<a href="/filosofi/index.html" target="_blank" rel="noopener noreferrer">
							<button
								class="flex items-center gap-2 Kontak py-2 px-6 bg-secondary rounded-full text-[15px] font-raleway font-medium max-sm:hidden text-gray-600 hover:bg-blue-700 hover:text-white duration-500">
								Selengkapnya<i class="fa-solid fa-chevron-right"></i>
							</button></a>
					</div>
				</div>
			</div>
		</div>
	</section>	


	<!-- ------------COUNT------------ -->
	<div class="w-full h-full py-14">
		<div class="container mx-auto">
			<div class="flex bg-secondary rounded-[20px] justify-items-center py-10">
				<img class="mx-auto" src="/assets/70.png" alt="" />
			</div>
		</div>
	</div>

	<!-- -------------BADAN PENGURUS HARIAN------------- -->
	<div class="w-full h-full py-14">
		<div class="container mx-auto">
			<div class="flex justify-center gap-10 mx-auto">
				<!-- CARD BPH 1 -->
				<div class="items-center duration-500 hover:-translate-y-5">
					<div class="border rounded-[20px] w-[400px] h-[400px]">
						<img src="/assets/Rectangle 66.png" alt="">
					</div>
					<div
						class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto hover:bg-secondary hover:text-four duration-500">
						<h2 class="font-bold">SAHRUL ISMAIL USMAN</h2>
						<h3 class="text-sm">Ketua Himpunan</h3>
					</div>
				</div>
				<!-- CARD BPH 2 -->
				<div class="items-center duration-500 hover:-translate-y-5">
					<div class="border rounded-[20px] w-[400px] h-[400px]">
						<img src="/assets/Rectangle 66.png" alt="">
					</div>
					<div
						class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto hover:bg-secondary hover:text-four duration-500">
						<h2 class="font-bold">M FADIL AMIN</h2>
						<h3 class="text-sm">Wakil Ketua Himpunan</h3>
					</div>
				</div>
				<!-- CARD BPH 3 -->
				<div class="items-center duration-500 hover:-translate-y-5">
					<div class="border rounded-[20px] w-[400px] h-[400px]">
						<img src="/assets/Rectangle 66.png" alt="">
					</div>
					<div
						class="relative -top-8 bg-four w-[300px] rounded-[20px] text-center text-white text-[#E8E8E8] py-3 font-raleway mx-auto hover:bg-secondary hover:text-four duration-500">
						<h2 class="font-bold">ANGGIA PUTRI WULAN S</h2>
						<h3 class="text-sm">Sekretaris Himpunan</h3>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection