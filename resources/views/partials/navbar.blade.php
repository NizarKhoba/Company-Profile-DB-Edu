<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Navbar Floating</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <!-- Import Alpine.js -->
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <link
  rel="stylesheet"
  href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
</head>
<body class="font-poppins text-[#003F5A] ">
  <!-- Header yang fixed agar mengambang -->
  <header class="fixed top-0 left-0 right-0 z-50 bg-white rounded-[32px] shadow-lg mt-[25px] mx-[25px] lg:mx-[120px]" x-data="{ mobileMenu: false }">
    
    <!-- Navbar dengan padding 20px -->
    <nav class="mx-auto flex max-w-7xl items-center justify-between p-5" aria-label="Global">
      <div class="flex lg:flex-1">
        <a href="/" class="-m-1.5 p-1.5">
          <span class="sr-only">Your Company</span>
          <img class="h-[50px] w-auto" src="img/Logo.png" alt="" />
        </a>
      </div>

      <!-- Tombol open mobile menu -->
      <div class="flex lg:hidden">
        <button @click="mobileMenu = true" type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
          <span class="sr-only">Open main menu</span>
          <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
          </svg>
        </button>
      </div>

      <!-- Desktop Menu -->
      <div class="hidden lg:flex lg:gap-x-12">
        <a href="/" class="text-lg font-semibold {{ request()->is('/') ? 'text-[#FC6138]' : 'text-[#003F5A]' }}">
          Beranda
        </a>

        <!-- Program Kami Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
          <button type="button" class="flex items-center gap-x-1 text-lg font-semibold " 
                  @click="open = !open" :aria-expanded="open.toString()">
            Program Kami
            <svg class="size-5 flex-none text-gray-400" :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="open" x-cloak x-transition
               class="absolute top-full left-0 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white ring-1 shadow-lg ring-gray-900/5">
            <div class="p-4 space-y-4">
              <a href="#" class="block font-semibold ">Kiddo Coder</a>
              <a href="#" class="block font-semibold ">Junio Coder</a>
              <a href="#" class="block font-semibold ">Teeno Coder</a>
            </div>
          </div>
        </div>

        <!-- Kelas Kami Dropdown -->
        <div class="relative" x-data="{ open: false }" @click.away="open = false">
          <button type="button" class="flex items-center gap-x-1 text-lg font-semibold " 
                  @click="open = !open" :aria-expanded="open.toString()">
            Kelas Kami
            <svg class="size-5 flex-none text-gray-400" :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
            </svg>
          </button>
          <div x-show="open" x-cloak x-transition
               class="absolute top-full left-0 z-10 mt-3 w-screen max-w-md overflow-hidden rounded-3xl bg-white ring-1 shadow-lg ring-gray-900/5">
            <div class="p-4 space-y-4">
              <a href="#" class="block font-semibold ">Online</a>
              <a href="#" class="block font-semibold ">Offline</a>
            </div>
          </div>
        </div>

        <a href="#" class="text-lg font-semibold ">Kurikulum</a>
        <a href="/faq" class="text-lg font-semibold {{ request()->is('faq') ? 'text-[#FC6138]' : 'text-[#003F5A]' }}">FAQ</a>
      </div>
      <div class="hidden lg:flex lg:flex-1 lg:justify-end">
        <button type="button" class="text-white bg-gradient-to-r from-[#FF9D2E] to-[#FC6139] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-[#FC6139] font-medium text-sm px-5 py-2.5 text-center me-2 rounded-[32px]">
          Kelas Gratis
        </button>        
      </div>
    </nav>

    <!-- Mobile Menu -->
    <div x-show="mobileMenu" x-cloak class="lg:hidden" role="dialog" aria-modal="true">
      <!-- Backdrop, klik untuk menutup menu -->
      <div class="fixed inset-0 z-10" @click="mobileMenu = false"></div>
      <div class="fixed inset-y-0 right-0 z-10 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
        <div class="flex items-center justify-between">
          <a href="#" class="-m-1.5 p-1.5">
            <span class="sr-only">Your Company</span>
            <img class="h-8 w-auto" src="img/Logo.png" alt="" />
          </a>
          <button @click="mobileMenu = false" type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
            <span class="sr-only">Close menu</span>
            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
        <div class="mt-6 flow-root">
          <div class="-my-6 divide-y divide-gray-500/10">
            <div class="space-y-2 py-6">
              <a href="/" class="text-lg font-semibold {{ request()->is('/') ? 'text-[#FC6138]' : 'text-[#003F5A]' }}">
                Beranda
              </a>
          
              <!-- Mobile Dropdown: Program Kami -->
              <div class="-mx-3" x-data="{ open: false }">
                <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold  hover:bg-gray-50" 
                        @click="open = !open" :aria-expanded="open.toString()">
                  Program Kami
                  <svg class="size-5 flex-none transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                  </svg>
                </button>
                <div class="mt-2 space-y-2" x-show="open" x-collapse x-cloak>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold  hover:bg-gray-50">Kiddo Coder</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold  hover:bg-gray-50">Junio Coder</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold  hover:bg-gray-50">Teeno Coder</a>
                </div>
              </div>

              <!-- Mobile Dropdown: Kelas Kami -->
              <div class="-mx-3" x-data="{ open: false }">
                <button type="button" class="flex w-full items-center justify-between rounded-lg py-2 pr-3.5 pl-3 text-base/7 font-semibold  hover:bg-gray-50" 
                        @click="open = !open" :aria-expanded="open.toString()">
                  Kelas Kami
                  <svg class="size-5 flex-none transition-transform duration-200" :class="{ 'rotate-180': open }" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                  </svg>
                </button>
                <div class="mt-2 space-y-2" x-show="open" x-collapse x-cloak>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold  hover:bg-gray-50">Online</a>
                  <a href="#" class="block rounded-lg py-2 pr-3 pl-6 text-sm/7 font-semibold  hover:bg-gray-50">Offline</a>
                </div>
              </div>

              <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold  hover:bg-gray-50">Kurikulum</a>
              <a href="/faq" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold  hover:bg-gray-50 {{ request()->is('faq') ? 'text-[#FC6138]' : 'text-[#003F5A]' }}">FAQ</a>
            </div>
            <div class="py-6">
              <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold  hover:bg-gray-50">Log in</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
</body>
</html>
