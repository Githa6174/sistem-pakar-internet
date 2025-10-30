@extends('layout')
@section('content')

<div class="bg-gray-900 min-h-screen flex flex-col">
 

  <!-- Hero content -->
  <div class="relative isolate flex-1 flex flex-col justify-center px-6 lg:px-8 overflow-hidden">
    <!-- Background atas -->
    <div aria-hidden="true" class="absolute inset-x-0 -top-40 -z-10 transform-gpu blur-3xl sm:-top-80">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72rem]">
      </div>
    </div>

    <!-- Teks utama -->
    <div class="mx-auto max-w-2xl text-center">
      <div class="mb-6 sm:mb-8">
        <div class="relative rounded-full w-fit mx-auto px-3 py-1 text-sm text-gray-400 ring-1 ring-white/10 hover:ring-white/20">
          Diagnosa otomatis dengan algoritma berbasis pengetahuan ahli
          <a href="#" class="font-semibold text-indigo-400">
            <span aria-hidden="true" class="absolute inset-0"></span> Selengkapnya <span aria-hidden="true">&rarr;</span>
          </a>
        </div>
      </div>
      <h1 class="text-5xl font-semibold tracking-tight text-white sm:text-7xl">
        Diagnosa Jaringan Jadi Lebih Cepat & Akurat
      </h1>
      <p class="mt-6 text-lg font-medium text-gray-400 sm:text-xl">
        Temukan sumber masalah jaringan dalam hitungan detik. Sistem pakar kami membantu menganalisis, mengidentifikasi, dan memberikan solusi cerdas layaknya seorang ahli jaringan berpengalaman.
      </p>
      <div class="mt-10 flex justify-center">
        <a href="/start" class="rounded-md bg-indigo-500 px-5 py-3 text-sm font-semibold text-white shadow hover:bg-indigo-400 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
          Mulai Diagnosa Sekarang
        </a>
      </div>
    </div>

    <!-- Background bawah -->
    <div aria-hidden="true" class="absolute inset-x-0 bottom-0 -z-10 transform-gpu blur-3xl">
      <div style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"
        class="relative left-[calc(50%+3rem)] aspect-[1155/678] w-[36rem] -translate-x-1/2 bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72rem]">
      </div>
    </div>
  </div>
</div>



@endsection

