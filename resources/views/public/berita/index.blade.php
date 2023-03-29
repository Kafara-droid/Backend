@extends('layouts.front')
@section('main')
<section class="container">
    <div class="" id="berita" role="tabpanel" aria-labelledby="berita-tab">
        <div class="pt-10">
            <!-- NAVBAR 2 -->
            <div class="absolute items-center -translate-x-1/2 left-1/2 ">
                <ul class="flex justify-center gap-5 md:gap-10">
                    <li class="hover:border-b-4 border-[#FFD900] border-b-4">
                        <a href="/berita/index.html">Berita</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="/kegiatan/index.html">Kegiatan</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="/lomba/index.html">Lomba</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="/magang/index.html">Magang</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="/prestasi/prestasi.html">Prestasi</a>
                    </li>
                    <li class="hover:border-b-4 border-[#FFD900] duration-100">
                        <a href="/konten/index.html">Konten</a>
                    </li>
                </ul>
            </div>
            <!----------------------------    FILTER    ---------------------------->
        <div class="border rounded-lg md:w-[150px] w-[120px] flex justify-between items-center">
            <span class="pr-3 ml-3 font-medium border-r-2 md:pr-5 md:text-sm text-2xs">Tahun</span>
            <button id="dropdownActionButton" data-dropdown-toggle="dropdownAction"
                class="inline-flex items-center font-medium text-2xs md:text-sm px-3 py-1.5" type="button">
                <span class="mx-3 sr-only">Action button</span>
                <span class="flex items-center">2022
                    <i class="pl-2 font-extrabold text-yellow-500 fa-solid fa-chevron-down"></i>
                </span>
            </button>
            <div id="dropdownAction" class="z-50 hidden bg-white divide-y divide-gray-100 rounded shadow">
                <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownActionButton">
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">2022</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">2021</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">2020</a>
                    </li>
                    <li>
                        <a href="#" class="block px-4 py-2 hover:bg-primary hover:text-white">2019</a>
                    </li>
                </ul>
            </div>
        </div>
        </div>

        <div class="items-center py-10 mb-10">
            <figure class="relative transition-all duration-300">
                <a href="#">
                    <img class="rounded-lg shadow-md brightness-60 brightness-50 md:brightness-100 h-[550px] w-full"
                        src="/assets/img-slide-1.jpg" alt="image description" />
                </a>

                <figcaption class="absolute w-full px-2 text-white md:bottom-10 md:px-14 bottom-2">
                    <h1 class="text-base font-bold md:text-3xl">
                        HMTI E-Sport
                    </h1>
                    <p class="my-2 font-light md:text-base text-2xs md:my-3">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin
                        lacus, ut interdum tellus elit sed risus
                    </p>
                    <button
                        class="block px-3 py-1 font-medium text-center text-gray-600 duration-500 rounded-full md:w-auto text-2xs bg-secondary hover:bg-primary hover:text-white md:text-sm md:px-10 md:py-2"
                        type="button" data-modal-toggle="extralarge-modal">
                        Selengkapnya<i class="pl-3 fa-solid fa-chevron-right"></i>
                    </button>

                    <div id="extralarge-modal" tabindex="-1"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-7xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">
                                        Extra Large modal
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                </div>

                                <!-- Modal footer -->
                                <div
                                    class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600">
                                    <button data-modal-toggle="extralarge-modal" type="button"
                                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        I accept
                                    </button>
                                    <button data-modal-toggle="extralarge-modal" type="button"
                                        class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">
                                        Decline
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>

        <div class="grid grid-cols-1 gap-6 lg:grid-cols-2">
            <!-- CARD 1 -->
            <figure class="relative duration-300 hover:-translate-y-2 hover:shadow-xl ">
                <a href="#">
                    <img class="transition-all duration-200 rounded-lg brightness-50" src="/assets/img-slide-2.jpg"
                        alt="image description" />
                </a>
                <figcaption class="absolute w-full px-2 text-white md:bottom-5 md:px-5 bottom-2">
                    <h1 class="text-base font-bold md:text-xl">
                        HMTI E-Sport
                    </h1>
                    <p class="mb-4 font-light md:text-base text-2xs">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a.
                    </p>
                    <button
                        class="block px-3 py-1 font-medium text-center text-gray-600 duration-500 rounded-full md:w-auto text-2xs bg-secondary hover:bg-primary hover:text-white md:text-sm md:px-10 md:py-2"
                        type="button" data-modal-toggle="extralarge-modal">
                        Selengkapnya<i class="pl-3 fa-solid fa-chevron-right"></i>
                    </button>

                    <!-- Main modal -->
                    <div id="extralarge-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-7xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        HMTI E-Sport
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <a href="#">
                                        <img class="rounded-lg cursor-pointer" src="/assets/img-slide-2.jpg"
                                            alt="image description" />
                                    </a>
                                    <p class="text-base leading-relaxed text-gray-500">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>

            <!-- CARD 2 -->
            <figure class="relative duration-300 hover:-translate-y-2 hover:shadow-xl ">
                <a href="#">
                    <img class="transition-all duration-200 rounded-lg cursor-pointer filter brightness-50"
                        src="/assets/img-slide-2.jpg" alt="image description" />
                </a>
                <figcaption class="absolute w-full px-2 text-white md:bottom-5 md:px-5 bottom-2">
                    <h1 class="text-base font-bold md:text-xl">
                        HMTI E-Sport
                    </h1>
                    <p class="mb-4 font-light md:text-base text-2xs">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a.
                    </p>
                    <button
                        class="block px-3 py-1 font-medium text-center text-gray-600 duration-500 rounded-full md:w-auto text-2xs bg-secondary hover:bg-primary hover:text-white md:text-sm md:px-10 md:py-2"
                        type="button" data-modal-toggle="extralarge-modal">
                        Selengkapnya<i class="pl-3 fa-solid fa-chevron-right"></i>
                    </button>

                    <!-- Main modal -->
                    <div id="extralarge-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-7xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        HMTI E-Sport
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <a href="#">
                                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                            src="/assets/img-slide-2.jpg" alt="image description" />
                                    </a>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>

            <!-- CARD 3 -->
            <figure class="relative duration-300 lg:mb-6 hover:-translate-y-2 hover:shadow-xl ">
                <a href="#">
                    <img class="transition-all duration-200 rounded-lg cursor-pointer filter brightness-50"
                        src="/assets/img-slide-2.jpg" alt="image description" />
                </a>
                <figcaption class="absolute w-full px-2 text-white md:bottom-5 md:px-5 bottom-2">
                    <h1 class="text-base font-bold md:text-xl">
                        HMTI E-Sport
                    </h1>
                    <p class="mb-4 font-light md:text-base text-2xs">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a.
                    </p>
                    <button
                        class="block px-3 py-1 font-medium text-center text-gray-600 duration-500 rounded-full md:w-auto text-2xs bg-secondary hover:bg-primary hover:text-white md:text-sm md:px-10 md:py-2"
                        type="button" data-modal-toggle="extralarge-modal">
                        Selengkapnya<i class="pl-3 fa-solid fa-chevron-right"></i>
                    </button>

                    <!-- Main modal -->
                    <div id="extralarge-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-7xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        HMTI E-Sport
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <a href="#">
                                        <img class="transition-all duration-200 rounded-lg cursor-pointer filter brightness-50"
                                            src="/assets/img-slide-2.jpg" alt="image description" />
                                    </a>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>

            <!-- CARD 4 -->
            <figure class="relative mb-6 duration-300 hover:-translate-y-2 hover:shadow-xl">
                <a href="#">
                    <img class="transition-all duration-200 rounded-lg cursor-pointer filter brightness-50"
                        src="/assets/img-slide-2.jpg" alt="image description" />
                </a>
                <figcaption class="absolute w-full px-2 text-white md:bottom-5 md:px-5 bottom-2">
                    <h1 class="text-base font-bold md:text-xl">
                        HMTI E-Sport
                    </h1>
                    <p class="mb-4 font-light md:text-base text-2xs">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum
                        est a.
                    </p>
                    <button
                        class="block px-3 py-1 font-medium text-center text-gray-600 duration-500 rounded-full md:w-auto text-2xs bg-secondary hover:bg-primary hover:text-white md:text-sm md:px-10 md:py-2"
                        type="button" data-modal-toggle="extralarge-modal">
                        Selengkapnya<i class="pl-3 fa-solid fa-chevron-right"></i>
                    </button>

                    <!-- Main modal -->
                    <div id="extralarge-modal" tabindex="-1" aria-hidden="true"
                        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                        <div class="relative w-full h-full max-w-7xl md:h-auto">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow ">
                                <!-- Modal header -->
                                <div
                                    class="flex items-start justify-between p-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                                        HMTI E-Sport
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor"
                                            viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <div class="p-6 space-y-6">
                                    <a href="#">
                                        <img class="transition-all duration-300 rounded-lg cursor-pointer filter grayscale hover:grayscale-0"
                                            src="/assets/img-slide-2.jpg" alt="image description" />
                                    </a>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        With less than a month to go before the European Union
                                        enacts new consumer privacy laws for its citizens,
                                        companies around the world are updating their terms of
                                        service agreements to comply.
                                    </p>
                                    <p class="text-base leading-relaxed text-gray-500 dark:text-gray-400">
                                        The European Union’s General Data Protection
                                        Regulation (G.D.P.R.) goes into effect on May 25 and
                                        is meant to ensure a common set of data rights in the
                                        European Union. It requires organizations to notify
                                        users as soon as possible of high-risk data breaches
                                        that could personally affect them.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </figcaption>
            </figure>
        </div>
        <div class="grid mb-4 place-content-center">
            <nav aria-label="Page navigation example">
                <ul class="inline-flex items-center -space-x-px">
                    <li>
                        <a href="#" aria-current="page" class="px-3 py-2 leading-tight text-primary">1</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500">2</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500">3</a>
                    </li>
                    <li>
                        <a href="#" class="px-3 py-2 leading-tight text-gray-500">4</a>
                    </li>
                    <li>
                        <a href="#" class="block px-3 py-2 leading-tight text-gray-500 rounded-r-lg">
                            <span class="sr-only">Next</span>
                            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</section>
@endsection