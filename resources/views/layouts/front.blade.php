<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>HMTI</title>
	<link rel="icon" type="image/x-icon" href="/assets/favicon.png" />
	<link rel="preconnect" href="https://fonts.googleapis.com" />
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
	<link
		href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap"
		rel="stylesheet" />
	<script src="https://cdn.tailwindcss.com"></script>
	<script
			src="https://kit.fontawesome.com/c748089771.js"
			crossorigin="anonymous"
		></script>
	<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.4/dist/flowbite.min.css" />
	<script src="/tailwind.config.js"></script>
	<link rel="stylesheet" href="/asstes/css/icofonts.css" />
	<style type="text/tailwindcss">
		@layer utilities {
				body {
					overflow-x: hidden;
				}

				.submenu {
					@apply absolute m-0 py-1 bg-primary invisible opacity-0 transition-all ease-in-out;
				}

				.submenu a {
					@apply text-white min-w-[135px] w-full block py-1 px-4 hover:bg-secondary hover:text-white;
				}

				.has-child:hover .submenu {
					@apply visible opacity-100;
				}

				.has-child {
					@apply relative cursor-pointer;
				}
				.has-child > span.caret {
					@apply absolute h-[26px] w-[12px] -right-0 top-1/2 transform -translate-y-1/2;
					content: url('data:image/svg+xml;charset=UTF-8, <svg width="9" height="6" viewBox="0 0 9 6" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.666992 0.666748L4.33366 4.66675L8.00033 0.666748" stroke="white"/></svg>');
				}
				.bgc {
					background: linear-gradient(
						90.33deg,
						#1746f9 -0.22%,
						#1a3ab3 82.88%,
						#1e2748 113.74%
					);
				}

				.slides .slide {
					display: none;
				}

				.slides .slide img {
					width: 100%;
					animation-name: fade;
					animation-duration: 1.5s;
				}

				.slides .navigation {
					transform: translate(-50%, -50%);
				}

				.slides .navigation .prev,
				.slides .navigation .next {
					cursor: pointer;
					padding: 16px;
					font-weight: bold;
					font-size: 20px;
					color: white;
					background: rgba(0, 0, 0, 0.2);
					user-select: none;
					transition: 0.6s ease;
				}

				.slides .navigation .prev:hover,
				.slides .navigation .next:hover {
					background: rgba(0, 0, 0, 1);
				}

				@keyframes fade {
					from {
						opacity: 0.3;
					}
					to {
						opacity: 1;
					}
				}

				@media screen and (max-width: 1024px) {
					nav {
						left: -100%;
						transition: all 0.3s ease-in-out;
						z-index: ;
					}
					nav > ul {
						@apply pt-10;
					}
					nav > ul > li {
						@apply w-full p-0;
					}
					.has-child {
						@apply overflow-hidden;
					}
					.has-child > span.caret {
						@apply invert-0 top-4;
					}
					.has-child.active .submenu {
						@apply visible opacity-100 max-h-[1000px];
					}
					nav .submenu {
						@apply visible opacity-100 relative w-full max-h-0;
					}
					nav.active {
						left: 0;
					}
					footer {
						z-index: -1;
					}
					.slides .navigation .prev,
					.slides .navigation .next {
						font-size: 18px;
						padding: 13px;
					}
				}

				@media screen and (max-width: 750px) {
					nav {
						left: -100%;
						transition: all 0.3s ease-in-out;
					}
					nav > ul {
						@apply pt-10;
					}
					nav > ul > li {
						@apply w-full p-0;
					}
					.has-child {
						@apply overflow-hidden;
					}
					.has-child > span.caret {
						@apply invert-0 top-4;
					}
					.has-child.active .submenu {
						@apply visible opacity-100 max-h-[1000px];
					}
					nav .submenu {
						@apply visible opacity-100 relative w-full max-h-0;
					}
					nav.active {
						left: 0;
					}
					.slides .navigation .prev,
					.slides .navigation .next {
						font-size: 15px;
						padding: 10px;
					}
				}
			}
	</style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <x-front.navbar />

    @yield('main')
    


    <x-front.footer />
	<script src="./js/homepage.js"></script>
	<script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>
</body>
</html>
