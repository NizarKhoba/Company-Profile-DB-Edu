<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>FAQ</title>
</head>
<body>
  @include('partials.navbar')
  <div class="bg-gradient-to-b from-[#78DFD2] to-transparent pt-8 pb-16">
    <div class="container mx-auto px-4 mt-[150px]">
      <!-- FAQ Section: About Coding Farm -->
      <div x-data="{ openFaq: 1 }" class="mb-16">
        <h1 class="text-4xl font-bold text-center mb-10">Frequently Asked Questions About Coding Farm</h1>
        <div class="space-y-8">
          <!-- FAQ Item 1 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 1 ? null : 1)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 1 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa itu Coding Farm?</span>
              <svg :class="{ 'rotate-180': openFaq === 1 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 1" x-collapse class="mt-2 text-gray-600">
              <p>
                Coding Farm adalah program belajar coding yang menyenangkan dan interaktif untuk anak-anak mulai usia 4 tahun. Kami mengajarkan dasar-dasar pemrograman dengan cara yang mudah dipahami dan menarik.
              </p>
            </div>
          </div>
          <!-- FAQ Item 2 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 2 ? null : 2)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 2 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa saja materi yang diajarkan di Coding Farm?</span>
              <svg :class="{ 'rotate-180': openFaq === 2 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 2" x-collapse class="mt-2 text-gray-600">
              <p>
                Kami mengajarkan konsep dasar pemrograman mulai seperti membuat animasi, cerita interaktif, dan game sederhana menggunakan aplikasi sesuai kurikulum kami.
              </p>
            </div>
          </div>
          <!-- FAQ Item 3 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 3 ? null : 3)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 3 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apakah anak saya perlu memiliki pengetahuan sebelumnya tentang coding?</span>
              <svg :class="{ 'rotate-180': openFaq === 3 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 3" x-collapse class="mt-2 text-gray-600">
              <p>
                Tidak perlu! Semua materi akan diajarkan dari dasar sehingga anak-anak pemula pun dapat mengikuti.
              </p>
            </div>
          </div>
          <!-- FAQ Item 4 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 4 ? null : 4)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 4 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa saja alat dan perangkat yang dibutuhkan?</span>
              <svg :class="{ 'rotate-180': openFaq === 4 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 4" x-collapse class="mt-2 text-gray-600">
              <p>
                Semua alat dan perangkat yang dibutuhkan akan disediakan oleh Coding Farm.
              </p>
            </div>
          </div>
          <!-- FAQ Item 5 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 5 ? null : 5)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 5 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa saja manfaat belajar coding untuk anak-anak?</span>
              <svg :class="{ 'rotate-180': openFaq === 5 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 5" x-collapse class="mt-2 text-gray-600">
              <p>
                Belajar coding dapat membantu anak-anak mengembangkan kemampuan berpikir logis, kreatif, memecahkan masalah, dan mempersiapkan diri untuk masa depan yang semakin digital.
              </p>
            </div>
          </div>
          <!-- FAQ Item 6 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 6 ? null : 6)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 6 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa yang harus saya lakukan jika anak saya sakit dan tidak bisa mengikuti kelas?</span>
              <svg :class="{ 'rotate-180': openFaq === 6 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 6" x-collapse class="mt-2 text-gray-600">
              <p>
                Jika anak Anda sakit, kami akan memberikan kesempatan untuk mengikuti kelas susulan.
              </p>
            </div>
          </div>
          <!-- FAQ Item 7 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 7 ? null : 7)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 7 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apakah ada sertifikat yang diberikan setelah menyelesaikan program?</span>
              <svg :class="{ 'rotate-180': openFaq === 7 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 7" x-collapse class="mt-2 text-gray-600">
              <p>
                Ya, kami akan memberikan sertifikat kelulusan kepada setiap peserta yang menyelesaikan program.
              </p>
            </div>
          </div>
        </div>
      </div>
  
      <!-- FAQ Section: About Class -->
      <div x-data="{ openFaq: 8 }" class="mb-16">
        <h1 class="text-4xl font-bold text-center mb-10">Frequently Asked Questions About Class</h1>
        <div class="space-y-8">
          <!-- FAQ Item 8 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 8 ? null : 8)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 8 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Berapa usia minimal peserta?</span>
              <svg :class="{ 'rotate-180': openFaq === 8 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 8" x-collapse class="mt-2 text-gray-600">
              <p>Usia minimal peserta adalah 4 tahun.</p>
            </div>
          </div>
          <!-- FAQ Item 9 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 9 ? null : 9)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 9 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Berapa jumlah peserta dalam satu kelas?</span>
              <svg :class="{ 'rotate-180': openFaq === 9 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 9" x-collapse class="mt-2 text-gray-600">
              <p>Setiap kelas dibatasi maksimal 5 peserta untuk memastikan perhatian yang lebih individual.</p>
            </div>
          </div>
          <!-- FAQ Item 10 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 10 ? null : 10)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 10 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Berapa lama durasi setiap kelas?</span>
              <svg :class="{ 'rotate-180': openFaq === 10 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 10" x-collapse class="mt-2 text-gray-600">
              <p>Durasi kelas mulai 45 menit per pertemuan, tergantung dari level peserta.</p>
            </div>
          </div>
          <!-- FAQ Item 11 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 11 ? null : 11)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 11 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Kapan jadwal kelas?</span>
              <svg :class="{ 'rotate-180': openFaq === 11 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 11" x-collapse class="mt-2 text-gray-600">
              <p>Jadwal kelas dapat disesuaikan dengan kebutuhan Anda. Kami menawarkan kelas pada hari … pukul ….</p>
            </div>
          </div>
          <!-- FAQ Item 12 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 12 ? null : 12)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 12 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa yang harus saya persiapkan sebelum kelas dimulai?</span>
              <svg :class="{ 'rotate-180': openFaq === 12 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 12" x-collapse class="mt-2 text-gray-600">
              <p>Anda tidak perlu mempersiapkan apapun. Semua materi dan alat akan disediakan oleh kami.</p>
            </div>
          </div>
        </div>
      </div>
  
      <!-- FAQ Section: About Registration -->
      <div x-data="{ openFaq: 13 }">
        <h1 class="text-4xl font-bold text-center mb-10">Frequently Asked Questions About Registration</h1>
        <div class="space-y-8">
          <!-- FAQ Item 13 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 13 ? null : 13)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 13 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Bagaimana cara mendaftar?</span>
              <svg :class="{ 'rotate-180': openFaq === 13 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 13" x-collapse class="mt-2 text-gray-600">
              <p>Anda dapat mendaftar melalui…</p>
            </div>
          </div>
          <!-- FAQ Item 14 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 14 ? null : 14)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 14 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Berapa biaya pendaftaran?</span>
              <svg :class="{ 'rotate-180': openFaq === 14 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 14" x-collapse class="mt-2 text-gray-600">
              <p>Biaya pendaftaran adalah 150.000.</p>
            </div>
          </div>
          <!-- FAQ Item 15 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 15 ? null : 15)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 15 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Berapa biaya bulanan?</span>
              <svg :class="{ 'rotate-180': openFaq === 15 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 15" x-collapse class="mt-2 text-gray-600">
              <p>Biaya bulanan adalah 580.000 atau biaya per level (3 bulan) adalah 1.740.000.</p>
            </div>
          </div>
          <!-- FAQ Item 16 -->
          <div class="border-b border-gray-300 pb-4">
            <button @click="openFaq = (openFaq === 16 ? null : 16)" 
                    class="w-full text-left text-xl font-semibold flex justify-between items-center focus:outline-none transition duration-500"
                    :class="openFaq === 16 ? 'text-[#003F5A]' : 'text-gray-600 hover:text-[#003F5A]'">
              <span>Apa saja metode pembayaran yang diterima?</span>
              <svg :class="{ 'rotate-180': openFaq === 16 }" class="w-6 h-6 transition-transform duration-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
              </svg>
            </button>
            <div x-show="openFaq === 16" x-collapse class="mt-2 text-gray-600">
              <p>Kami menerima pembayaran melalui…</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>