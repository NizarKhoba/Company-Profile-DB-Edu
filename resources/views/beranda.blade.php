<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda</title>
  @vite('resources/css/app.css')
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <style>
    @keyframes marquee {
      0% { transform: translateX(0); }
      100% { transform: translateX(-50%); }
    }
    .animate-marquee {
      animation: marquee 20s linear infinite;
    }

    /* Testimoni */
    .swiper-horizontal>.swiper-pagination-bullets .swiper-pagination-bullet,
    .swiper-pagination-horizontal.swiper-pagination-bullets .swiper-pagination-bullet {
        width: 16px !important;
        height: 4px !important;
        border-radius: 5px !important;
        margin: 0 6px !important;
    }

    .swiper-pagination {
        bottom: 2px !important;
    }

    .swiper-wrapper {
        height: max-content !important;
        width: max-content !important;
        padding-bottom: 64px;
    }

    .swiper-pagination-bullet-active {
        background: #F7A831 !important;
    }
    
    .swiper-slide.swiper-slide-active>.slide_active\:border-indigo-600 {
        --tw-border-opacity: 1;
        border-color: #F7A831 !important;;
    }

    .swiper-slide.swiper-slide-active>.group .slide_active\:text-gray-800 {
        ---tw-text-opacity: 1;
        color: rgb(31 41 55 / var(--tw-text-opacity));
    }
  </style>  
</head>
<body class="font-poppins bg-white text-[#003F5A]">
  @include('partials.navbar')

  <!-- Hero Section -->
  <div class="bg-gradient-to-b from-[#FFE262] to-transparent pt-8 pb-16">
    <img src="img/Awan.png" class="absolute top-60 left-10 w-32" data-aos="fade-down"/>
    <img src="img/Awan.png" class="absolute top-20 right-10 w-40" data-aos="fade-down"/>
    <img src="img/Awan.png" class="absolute bottom-10 left-1/3 w-36" data-aos="zoom-in-down"/>
    <div class="max-w-7xl mx-auto px-4 flex flex-col-reverse md:flex-row items-center">
      <!-- Kiri: Judul & Deskripsi -->
      <div class="w-full md:w-1/2 space-y-4 mt-6 md:mt-[150px]" data-aos="fade-right">
        <h1 class="text-3xl md:text-7xl font-bold">
          Masa Depan Dimulai di Coding Farm!
        </h1>
        <p class="text-lg md:text-xl">
          Selamat Datang di Coding Farm! Jadikan anak Anda kreatif,
          inovatif, dan siap menghadapi tantangan era digital.
        </p>
        <div class="flex gap-4" >
          <button type="button" class="text-white bg-gradient-to-r from-[#FF9D2E] to-[#FC6139] hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-[#FC6139] font-bold text-lg px-8 py-4 text-center me-2 rounded-[32px] mt-[16px]">
            Coba Kelas Gratis
          </button>
        </div>
      </div>
      <div class="w-full md:w-1/2" data-aos="fade-left">
        <img
          src="img/Maskot.png"
          alt="Robot Mascot"
          class="mx-auto w-[300px] md:w-[450px] mt-[120px] md:ml-[128px]"
        />
      </div>
    </div>
  </div>

  <!-- Stats Section -->
 <div class="mt-[128px]">
  <div data-aos="fade-down">
  <h1 class="text-3xl md:text-[64px] font-bold text-center">
    Selamat Datang di 
    <span class="text-[#20A592]">C</span><span class="text-[#FECE21]">o</span><span class="text-[#FC6139]">d</span><span class="text-[#DB3166]">i</span><span class="text-[#0CB5C4]">n</span><span class="text-[#68C35C]">g</span>
    <span class="text-[#F7A831]">Farm!</span>
  </h1>
  <p class="text-lg md:text-xl text-center md:mx-[240px] mt-[64px]"> 
    Kami di Coding Farm menawarkan pendekatan pembelajaran yang komprehensif dan berkelanjutan untuk membekali anak Anda dengan pengetahuan dan pengalaman praktis yang diperlukan untuk berkembang dalam perjalanan coding mereka.
  </p>
  </div>
  <div class="max-w-7xl mx-auto px-4 py-8 flex flex-col md:flex-row justify-around items-center" data-aos="fade-up">
    <div class="text-center space-y-2 mt-[32px]">
      <p class="text-5xl font-bold text-[#F7A831]">10+</p>
      <p class="text-2xl font-semibold">Cabang Kita</p>
    </div>
    <div class="text-center space-y-2 mt-[32px]">
      <p class="text-5xl font-bold text-[#F7A831]">10,000+</p>
      <p class="text-2xl font-semibold">Murid Aktif</p>
    </div>
    <div class="text-center space-y-2 mt-[32px]">
      <p class="text-5xl font-bold text-[#F7A831]">12thn</p>
      <p class="text-2xl font-semibold">Pengamalan</p>
    </div>
  </div>
 </div>

  <!-- Mitra Kami -->
  <div class="max-w-7xl mx-auto px-4 py-8 mt-[128px]">
    <h1 class="text-3xl md:text-[64px] font-bold text-center mb-[32px]" data-aos="fade-down">
      Mitra <span class="text-[#F7A831]">Kami</span>
    </h1>
    <!-- Pembungkus overflow-hidden agar konten yang melewati batas tidak terlihat -->
    <div class="overflow-hidden" data-aos="zoom-in-up">
      <!-- Flex container dengan animasi marquee. Duplikasi logo diperlukan untuk efek scrolling yang mulus -->
      <div class="flex animate-marquee space-x-8 mt-[32px]">
        <img src="img/Logo.png" alt="Mitra 1" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 2" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 3" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 4" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 5" class="h-12 object-contain flex-shrink-0">
        <!-- Duplikasi untuk loop yang mulus -->
        <img src="img/Logo.png" alt="Mitra 1" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 2" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 3" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 4" class="h-12 object-contain flex-shrink-0">
        <img src="img/Logo.png" alt="Mitra 5" class="h-12 object-contain flex-shrink-0">
      </div>
    </div>
  </div>
  

  <!-- Pilih Program Terbaik untuk Anak -->
  <div class="max-w-7xl mx-auto px-4 py-8 mt-[128px] text-center">
    <div data-aos="fade-down">
      <h2 class="text-3xl md:text-[64px] font-bold mb-6">
        Pilih <span class="text-[#F7A831]"> Program </span> Terbaik untuk Anak
      </h2>
      <p class="text-lg md:text-xl mx-[50px]">
        Kami menghadirkan pembelajaran coding yang seru dan interaktif, sesuai dengan usia dan kebutuhan anak di era digital.
      </p>
    </div>
    <div class="flex items-center mt-[64px]">
      <div class="container mx-auto p-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <!-- Card 1 -->
          <div class="group relative flex flex-col justify-center overflow-hidden rounded-xl shadow-xl ring-gray-900/5" data-aos="fade-up-right">
            <div class="relative h-64 w-full overflow-hidden rounded-xl border border-gray-200 opacity-50 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
              <img src="https://images.unsplash.com/photo-1506187334569-7596f62cf93f?ixlib=rb-4.0.3&auto=format&fit=crop&w=3149&q=80" class="animate-fade-in block h-full w-full transform object-cover object-center transition duration-300 group-hover:scale-110" alt="Azores" />
            </div>
            <div class="absolute bottom-0 left-0 z-20 p-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
              <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Azores</h1>
              <h1 class="text-sm font-light text-gray-200 shadow-xl">A Little Paradise in Portugal</h1>
              <p class="text-xs text-white mt-1 opacity-0 transition-all duration-300 group-hover:opacity-100">
                Penjelasan tambahan: Nikmati keindahan alam yang mempesona di Azores.
              </p>
            </div>
          </div>
    
          <!-- Card 2 -->
          <div class="group relative flex flex-col justify-center overflow-hidden rounded-xl shadow-xl ring-gray-900/5" data-aos="fade-up">
            <div class="relative h-64 w-full overflow-hidden rounded-xl border border-gray-200 opacity-50 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
              <img src="https://images.unsplash.com/photo-1516442719524-a603408c90cb?auto=format&fit=crop&w=800&q=60" class="animate-fade-in block h-full w-full transform object-cover object-center transition duration-300 group-hover:scale-110" alt="Bali" />
            </div>
            <div class="absolute bottom-0 left-0 z-20 p-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
              <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Bali</h1>
              <h1 class="text-sm font-light text-gray-200 shadow-xl">Island of Gods</h1>
              <p class="text-xs text-white mt-1 opacity-0 transition-all duration-300 group-hover:opacity-100">
                Penjelasan tambahan: Eksplorasi budaya dan pantai yang menakjubkan di Bali.
              </p>
            </div>
          </div>
    
          <!-- Card 3 -->
          <div class="group relative flex flex-col justify-center overflow-hidden rounded-xl shadow-xl ring-gray-900/5" data-aos="fade-up-left">
            <div class="relative h-64 w-full overflow-hidden rounded-xl border border-gray-200 opacity-50 transition duration-300 ease-in-out group-hover:opacity-100 dark:border-gray-700 dark:opacity-70">
              <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?auto=format&fit=crop&w=800&q=60" class="animate-fade-in block h-full w-full transform object-cover object-center transition duration-300 group-hover:scale-110" alt="Sicily" />
            </div>
            <div class="absolute bottom-0 left-0 z-20 p-4 transition duration-300 ease-in-out group-hover:-translate-y-1 group-hover:translate-x-3 group-hover:scale-110">
              <h1 class="font-serif text-2xl font-bold text-white shadow-xl">Sicily</h1>
              <h1 class="text-sm font-light text-gray-200 shadow-xl">Mediterranean Charm</h1>
              <p class="text-xs text-white mt-1 opacity-0 transition-all duration-300 group-hover:opacity-100">
                Penjelasan tambahan: Menikmati sejarah dan keindahan alam di pulau Sicily.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  {{-- Metode Pembelajarang --}}
  <section class="max-w-7xl mx-auto px-4 py-12 mt-[128px]">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center">
      <div class="w-full" data-aos="fade-up-right">
        <img
          src="img/metode.png"
          alt="Belajar Coding"
          class="w-full h-auto rounded-lg object-cover"
        />
      </div>
      
      <!-- Kolom Kanan: Teks & Fitur -->
      <div data-aos="fade-up-left">
        <h2 class="text-3xl md:text-[40px] font-bold text-[#003F5A] mb-4">
          Metode <span class="text-[#F7A831]">Pembelajaran</span>
        </h2>
        <p class="text-base md:text-xl text-[#003F5A] leading-relaxed mb-8">
          Kami menghadirkan pengalaman belajar coding yang menyenangkan dan interaktif 
          bagi anak-anak, khususnya untuk usia 4-6 tahun.
        </p>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
          <!-- 1. Kelas Berukuran Kecil -->
          <div class="flex flex-col gap-3">
            <img
              src="img/Icon_kelas.png"
              alt="Icon Kelas Kecil"
              class="w-20 h-20 object-contain"
            />
            <div>
              <h3 class="text-lg font-semibold text-[#003F5A]">
                Kelas Berukuran Kecil
              </h3>
              <p class="text-sm mr-6">
                Setiap kelas hanya berisi 4-5 siswa untuk memastikan fokus dan interaksi optimal.
              </p>
            </div>
          </div>
          
          <!-- 2. Pembelajaran Interaktif -->
          <div class="flex flex-col gap-3">
            <img
              src="img/Icon_buku.png"
              alt="Icon Interaktif"
              class="w-20 h-20 object-contain"
            />
            <div>
              <h3 class="text-lg font-semibold text-[#003F5A]">
                Pembelajaran Interaktif
              </h3>
              <p class="text-sm text-gray-600">
                Anak-anak belajar dengan bereksperimen dan mencoba hal-hal baru secara langsung.
              </p>
            </div>
          </div>
          
          <!-- 3. Project-Based Learning -->
          <div class="flex flex-col gap-3">
            <img
              src="img/Icon_ide.png"
              alt="Icon Project-Based"
              class="w-20 h-20 object-contain"
            />
            <div>
              <h3 class="text-lg font-semibold text-[#003F5A]">
                Project-Based Learning
              </h3>
              <p class="text-sm text-gray-600">
                Metode berbasis proyek membantu anak-anak belajar berpikir kritis dan kreatif.
              </p>
            </div>
          </div>
          
          <!-- 4. Pengajar Berpengalaman -->
          <div class="flex flex-col gap-3">
            <img
              src="img/Icon_guru.png"
              alt="Icon Pengajar"
              class="w-20 h-20 object-contain"
            />
            <h3 class="text-lg font-semibold text-[#003F5A]">
              Pengajar Berpengalaman
            </h3>
            <p class="text-sm text-gray-600">
              Didukung oleh profesional yang ahli di bidang anak dan coding.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section> 

  <!-- Testimonial -->
  <section class="py-24">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mb-16" data-aos="fade-up">
        <h1 class="text-3xl md:text-6xl font-bold text-center md:mx-32">
          Apa Kata Mereka Tentang 
          <span class="text-[#20A592]">C</span><span class="text-[#FECE21]">o</span><span class="text-[#FC6139]">d</span><span class="text-[#DB3166]">i</span><span class="text-[#0CB5C4]">n</span><span class="text-[#68C35C]">g</span>
          <span class="text-[#F7A831]">Farm!</span>
        </h1>
      </div>
      <!-- Slider wrapper -->
      <div class="swiper mySwiper" data-aos="fade-up">
        <div class="swiper-wrapper w-max">
          <!-- Slide 1 -->
          <div class="swiper-slide">
            <div class="group bg-[#FEFAF4] border border-solid border-gray-300 rounded-[32px] p-6 transition-all duration-500 w-full mx-auto hover:border-[#F7A831] hover:shadow-sm slide_active:border-indigo-600">
              <div>
                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500">
                  <img class="h-auto w-8" src="img/koma.png" alt="avatar" />
                </div>
                <p class="text-base  leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                  Pagedone has made it possible for me to stay on top of my portfolio and make informed decisions quickly and easily.
                </p>
              </div>
              <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                <img class="rounded-full h-10 w-10 object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                <div>
                  <h5 class=" font-medium transition-all duration-500 mb-1">Jane D</h5>
                  <span class="text-sm leading-4">CEO</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 2 -->
          <div class="swiper-slide">
            <div class="group bg-[#FEFAF4] border border-solid border-gray-300 flex justify-between flex-col rounded-[32px] p-6 transition-all duration-500 w-full mx-auto hover:border-[#F7A831] slide_active:border-indigo-600 hover:shadow-sm">
              <div>
                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500">
                  <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z" fill="currentColor" />
                  </svg>
                  <span class="text-base font-semibold text-indigo-600">4.9</span>
                </div>
                <p class="text-base  leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                  Thanks to pagedone, I feel more informed and confident about my investment decisions than ever before.
                </p>
              </div>
              <div class="flex items-center gap-5 pt-5 border-t border-solid border-gray-200">
                <img class="rounded-full h-10 w-10 object-cover" src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar" />
                <div>
                  <h5 class=" font-medium transition-all duration-500 mb-1">Harsh P.</h5>
                  <span class="text-sm leading-4">Product Designer</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 3 -->
          <div class="swiper-slide">
            <div class="flex justify-between flex-col lg:w-full group bg-[#FEFAF4] border border-solid border-gray-300 rounded-[32px] p-6 transition-all duration-500 w-full mx-auto slide_active:border-indigo-600 hover:border-[#F7A831] hover:shadow-sm">
              <div>
                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500">
                  <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z" fill="currentColor" />
                  </svg>
                  <span class="text-base font-semibold text-indigo-600">4.9</span>
                </div>
                <p class="text-base  leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                  The customer service team at pagedone went above and beyond to help me resolve a billing issue.
                </p>
              </div>
              <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                <img class="rounded-full h-10 w-10 object-cover" src="https://pagedone.io/asset/uploads/1696230027.png" alt="avatar" />
                <div>
                  <h5 class=" font-medium transition-all duration-500 mb-1">Alex K.</h5>
                  <span class="text-sm leading-4">Design Lead</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 4 -->
          <div class="swiper-slide">
            <div class="group bg-[#FEFAF4] border border-solid border-gray-300 rounded-[32px] p-6 transition-all duration-500 w-full mx-auto slide_active:border-indigo-600 hover:border-[#F7A831] hover:shadow-sm">
              <div>
                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500">
                  <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z" fill="currentColor" />
                  </svg>
                  <span class="text-base font-semibold text-indigo-600">4.9</span>
                </div>
                <p class="text-base  leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                  Pagedone has made it possible for me to stay on top of my portfolio and make informed decisions quickly and easily.
                </p>
              </div>
              <div class="flex items-center gap-5 border-t border-solid border-gray-200 pt-5">
                <img class="rounded-full h-10 w-10 object-cover" src="https://pagedone.io/asset/uploads/1696229969.png" alt="avatar" />
                <div>
                  <h5 class=" font-medium transition-all duration-500 mb-1">Jane D</h5>
                  <span class="text-sm leading-4">CEO</span>
                </div>
              </div>
            </div>
          </div>
          <!-- Slide 5 -->
          <div class="swiper-slide">
            <div class="group bg-[#FEFAF4] border border-solid border-gray-300 flex justify-between flex-col rounded-[32px] p-6 transition-all duration-500 w-full mx-auto slide_active:border-indigo-600 hover:border-[#F7A831] hover:shadow-sm">
              <div>
                <div class="flex items-center mb-7 gap-2 text-amber-500 transition-all duration-500">
                  <svg class="w-5 h-5" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8.10326 1.31699C8.47008 0.57374 9.52992 0.57374 9.89674 1.31699L11.7063 4.98347C11.8519 5.27862 12.1335 5.48319 12.4592 5.53051L16.5054 6.11846C17.3256 6.23765 17.6531 7.24562 17.0596 7.82416L14.1318 10.6781C13.8961 10.9079 13.7885 11.2389 13.8442 11.5632L14.5353 15.5931C14.6754 16.41 13.818 17.033 13.0844 16.6473L9.46534 14.7446C9.17402 14.5915 8.82598 14.5915 8.53466 14.7446L4.91562 16.6473C4.18199 17.033 3.32456 16.41 3.46467 15.5931L4.15585 11.5632C4.21148 11.2389 4.10393 10.9079 3.86825 10.6781L0.940384 7.82416C0.346867 7.24562 0.674378 6.23765 1.4946 6.11846L5.54081 5.53051C5.86652 5.48319 6.14808 5.27862 6.29374 4.98347L8.10326 1.31699Z" fill="currentColor" />
                  </svg>
                  <span class="text-base font-semibold text-indigo-600">4.9</span>
                </div>
                <p class="text-base  leading-6 transition-all duration-500 pb-8 group-hover:text-gray-800 slide_active:text-gray-800">
                  Thanks to pagedone, I feel more informed and confident about my investment decisions than ever before.
                </p>
              </div>
              <div class="flex items-center gap-5 pt-5 border-t border-solid border-gray-200">
                <img class="rounded-full h-10 w-10 object-cover" src="https://pagedone.io/asset/uploads/1696229994.png" alt="avatar" />
                <div>
                  <h5 class=" font-medium transition-all duration-500 mb-1">Harsh P.</h5>
                  <span class="text-sm leading-4">Product Designer</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  {{-- CTA --}}
  <section class="max-w-7xl mx-auto px-4 py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
      <div class="bg-[#F7A831] p-8 rounded-[32px] text-[#003F5A]" data-aos="fade-up-right">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">
          Mulai Perjalanan Coding Anak
        </h2>
        <p class="text-base mb-6 leading-relaxed">
          Berikan pengalaman belajar yang seru dan interaktif untuk anak Anda! 
          Dengan metode yang menyenangkan, mereka bisa mengasah kreativitas, logika, dan keterampilan digital sejak dini.
        </p>
        <button
          type="button"
          class="bg-white px-6 py-3 rounded-full font-semibold shadow hover:shadow-md transition"
        >
        Coba Kelas Gratis
        </button>
      </div>
  
      <div class=" bg-[#FEFAF4] border-2 border-[#F7A831] rounded-[32px] p-8 text-[#003F5A]" data-aos="fade-up-left">
        <h2 class="text-2xl md:text-3xl font-bold mb-4">
          Konsultasi Gratis dengan Kami!
        </h2>
        <p class="text-base mb-6 leading-relaxed">
          Ada pertanyaan atau butuh bantuan? Kami siap membantu Anda! Jangan ragu untuk menghubungi tim kami untuk informasi lebih lanjut.
        </p>
        <button
          type="button"
          class="bg-[#F7A831] text-white px-6 py-3 rounded-full font-semibold shadow hover:shadow-md transition"
        >
        Hubungi Kami
        </button>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="py-24" x-data="{ openFaq: 1 }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex flex-col justify-center items-center gap-x-16 gap-y-5 xl:gap-28 lg:flex-row lg:justify-between max-lg:max-w-2xl mx-auto max-w-full">
        <div class="w-full" data-aos="fade-up-right">
          <img
            src="img/FAQ.png"
            alt="Belajar Coding"
            class="w-auto h-auto rounded-lg object-cover"
          />
        </div>
        <div class="w-full" data-aos="fade-up-left">
          <div class="lg:max-w-xl">
            <div class="mb-6 lg:mb-16">
              <h2 class="text-4xl font-bold leading-[3.25rem] mb-5 lg:text-left">
                Frequently Asked Questions
              </h2>
            </div>
            <div class="accordion-group">
              <!-- Accordion Item 1 -->
              <div class="accordion pb-8 border-b border-solid border-gray-500">
                <button
                  @click="openFaq = (openFaq === 1 ? null : 1)"
                  class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 w-full transition duration-500"
                  :class="openFaq === 1 ? 'text-[#F7A831] font-medium' : 'text-gray-600 hover:text-[#F7A831]'"
                  aria-controls="collapse-1"
                >
                  <h5 :class="openFaq === 1 ? 'text-[#F7A831]' : ''">
                    Apa itu Coding Farm?
                  </h5>
                  <svg
                    :class="{ 'rotate-180': openFaq === 1 }"
                    class="text-gray-900 transition duration-500 group-hover:text-[#F7A831]"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
                <div
                  id="collapse-1"
                  x-show="openFaq === 1"
                  x-collapse
                  class="accordion-content w-full px-0 overflow-hidden pr-4"
                >
                  <p class="text-base font-normal text-gray-600">
                    Coding Farm adalah program belajar coding yang menyenangkan dan interaktif untuk anak-anak mulai usia 4 tahun. Kami mengajarkan dasar-dasar pemrograman dengan cara yang mudah dipahami dan menarik.
                  </p>
                </div>
              </div>
              <!-- Accordion Item 2 -->
              <div class="accordion py-8 border-b border-solid border-gray-500">
                <button
                  @click="openFaq = (openFaq === 2 ? null : 2)"
                  class="accordion-toggle group inline-flex items-center justify-between font-normal text-xl leading-8 w-full transition duration-500"
                  :class="openFaq === 2 ? 'text-[#F7A831] font-medium' : 'text-gray-600 hover:text-[#F7A831]'"
                  aria-controls="collapse-2"
                >
                  <h5 class="text-left" :class="openFaq === 2 ? 'text-[#F7A831]' : ''">
                    Apa saja materi yang diajarkan di Coding Farm?
                  </h5>
                  <svg
                    :class="{ 'rotate-180': openFaq === 2 }"
                    class="text-gray-900 transition duration-500 group-hover:text-[#F7A831]"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
                <div
                  id="collapse-2"
                  x-show="openFaq === 2"
                  x-collapse
                  class="accordion-content w-full px-0 overflow-hidden pr-4"
                >
                  <p class="text-base text-gray-500 font-normal">
                    Kami mengajarkan konsep dasar pemrograman mulai seperti membuat animasi, cerita interaktif, dan game sederhana menggunakan aplikasi sesuai kurikulum kami.
                  </p>
                </div>
              </div>
              <!-- Accordion Item 4 -->
              <div class="accordion py-8 border-b border-solid border-gray-500">
                <button
                  @click="openFaq = (openFaq === 4 ? null : 4)"
                  class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 w-full transition duration-500"
                  :class="openFaq === 4 ? 'text-[#F7A831] font-medium' : 'text-gray-600 hover:text-[#F7A831]'"
                  aria-controls="collapse-4"
                >
                  <h5 class="text-left" :class="openFaq === 4 ? 'text-[#F7A831]' : ''">
                    Apa saja alat dan perangkat yang dibutuhkan?
                  </h5>
                  <svg
                    :class="{ 'rotate-180': openFaq === 4 }"
                    class="text-gray-900 transition duration-500 group-hover:text-[#F7A831]"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
                <div
                  id="collapse-4"
                  x-show="openFaq === 4"
                  x-collapse
                  class="accordion-content w-full px-0 overflow-hidden pr-4"
                >
                  <p class="text-base text-gray-500 font-normal">
                    Semua alat dan perangkat yang dibutuhkan akan disediakan oleh Coding Farm.
                  </p>
                </div>
              </div>
              <!-- Accordion Item 5 -->
              <div class="accordion py-8">
                <button
                  @click="openFaq = (openFaq === 5 ? null : 5)"
                  class="accordion-toggle group inline-flex items-center justify-between text-xl font-normal leading-8 w-full transition duration-500"
                  :class="openFaq === 5 ? 'text-[#F7A831] font-medium' : 'text-gray-600 hover:text-[#F7A831]'"
                  aria-controls="collapse-5"
                >
                  <h5 class="text-left" :class="openFaq === 5 ? 'text-[#F7A831]' : ''">
                    Apa saja manfaat belajar coding untuk anak-anak?
                  </h5>
                  <svg
                    :class="{ 'rotate-180': openFaq === 5 }"
                    class="text-gray-900 transition duration-500 group-hover:text-[#F7A831]"
                    width="22"
                    height="22"
                    viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      d="M16.5 8.25L12.4142 12.3358C11.7475 13.0025 11.4142 13.3358 11 13.3358C10.5858 13.3358 10.2525 13.0025 9.58579 12.3358L5.5 8.25"
                      stroke="currentColor"
                      stroke-width="1.6"
                      stroke-linecap="round"
                      stroke-linejoin="round"
                    ></path>
                  </svg>
                </button>
                <div
                  id="collapse-5"
                  x-show="openFaq === 5"
                  x-collapse
                  class="accordion-content w-full px-0 overflow-hidden pr-4"
                >
                  <p class="text-base text-gray-500 font-normal">
                    Belajar coding dapat membantu anak-anak mengembangkan kemampuan berpikir logis, kreatif, memecahkan masalah, dan mempersiapkan diri untuk masa depan yang semakin digital.
                  </p>
                </div>
              </div>
            </div> <!-- end accordion-group -->
          </div>
        </div>
      </div>
    </div>
  </section>                                     
</div>
</body>
<script>
  var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 32,
      loop: true,
      centeredSlides: true,
      pagination: {
          el: ".swiper-pagination",
          clickable: true,

      },
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
      },
      breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 32,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 32,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 32,
      },
    },
  });

  AOS.init({
      duration: 1000, // durasi animasi (dalam milidetik)
      easing: 'ease-in-out', // efek easing
      once: true // animasi hanya terjadi sekali saat scroll
  });
</script>
</html>