<header class="container">
    <!-- NAVBAR START -->
    <nav
        class=" bg-gradient-to-r from-primary to-five px-2 sm:px-4 py-2.5 fixed w-full z-50 top-0 left-0 font-raleway shadow-xl">
        <div class="container flex flex-wrap items-center justify-between mx-auto">
            <a href="#" class="flex items-center">
                <img src="/assets/Logo-HMTI.png" class="h-10 mr-2 md:h-14 md:mr-3" alt="HMTI LOGO" />
                <span
                    class="self-center text-xl font-semibold text-white whitespace-nowrap dark:text-white">HMTI</span>
            </a>
            <div class="flex md:order-2">
                <a class="invisible lg:visible" href="/contact/index.html"><button type="button"
                        class="text-gray-600 rounded-full bg-yellow-400 font-semibold text-sm px-5 py-2.5 text-center mr-3 md:mr-0 hover:bg-blue-700 hover:text-white duration-500">
                        Kontak Kami
                    </button></a>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 text-sm text-white duration-300 rounded-lg md:hidden focus:bg-primary"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only"> Open main menu </span>
                    <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full text-white duration-300 bg-transparent md:flex md:w-auto md:order-1"
                id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 mt-4 bg-transparent rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-transparent">
                    <!-- Navbar Tentang -->
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white rounded hover:bg-secondary md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 md:w-auto">
                            Tentang
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar"
                            class="z-10 hidden font-medium bg-white divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/about/index.html"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Tentang
                                        Kami</a>
                                </li>
                                <li>
                                    <a href="/filosofi/index.html"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Penjelasan
                                        Logo</a>
                                </li>
                                <li>
                                    <a href="/visi/index.html"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Visi
                                        Misi</a>
                                </li>
                                <li>
                                    <a href="/divisi/index.html"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Struktur
                                        Organisasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <!-- Navbar Galeri -->
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar2"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white rounded hover:bg-secondary md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 md:w-auto">
                            Galeri
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar2"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="#"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Dokumentasi
                                        Kegiatan</a>
                                </li>
                                <li>
                                    <a href="/konten/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">HMTI
                                        Konten</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Navbar Galeri -->

                    <!-- Navbar Event -->
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar3"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white rounded hover:bg-secondary md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 md:w-auto">
                            Event
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar3"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="https://sentimeter.nusaputra.ac.id/" target="_blank"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">SENTIMETER</a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/p/CabkQD9BDSZ/?igshid=YmMyMTA2M2Y="
                                        target="_blank"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">HMTI
                                        E-Sport</a>
                                </li>
                                <li>
                                    <a href="https://techfest.org/" target="_blank"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Tech
                                        Fest</a>
                                </li>
                                <li>
                                    <a href="https://lummoshop.com/hmtistore" target="_blank"
                                        class="block px-4 py-2 hover:text-white hover:bg-blue-500">Danus</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Navbar Event -->

                    <!-- Navbar Informasi -->
                    <li>
                        <button id="dropdownNavbarLink" data-dropdown-toggle="dropdownNavbar5"
                            class="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-white rounded hover:bg-secondary md:hover:bg-transparent md:border-0 md:hover:text-yellow-200 md:p-0 md:w-auto">
                            Informasi
                            <svg class="w-5 h-5 ml-1" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownNavbar5"
                            class="z-10 hidden font-normal bg-white divide-y divide-gray-100 rounded shadow w-44 ">
                            <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownLargeButton">
                                <li>
                                    <a href="/berita/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Berita</a>
                                </li>
                                <li>
                                    <a href="/kegiatan/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Kegiatan</a>
                                </li>
                                <li>
                                    <a href="/lomba/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Lomba</a>
                                </li>
                                <li>
                                    <a href="/magang/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Magang</a>
                                </li>
                                <li>
                                    <a href="/prestasi/prestasi.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Prestasi</a>
                                </li>
                                <li>
                                    <a href="/konten/index.html"
                                        class="block px-4 py-2 hover:bg-g-whitext-white hover:text-white hover:bg-blue-500">Konten</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <!-- Navbar Informasi -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- NAVBAR END -->
</header>