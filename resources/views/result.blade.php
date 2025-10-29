@extends('layout')
@section('content')
<div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-2xl p-8 mx-auto text-center bg-white rounded-lg shadow-2xl dark:bg-gray-800 my-8">
        <span class="text-sm font-semibold text-green-600 uppercase dark:text-green-400">Hasil Diagnosis</span>
        <h1 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
            {{ $diagnosis->title }}
        </h1>
        <p class="mt-4 text-lg text-gray-600 dark:text-gray-300">
            {{ $diagnosis->description }}
        </p>
        <div class="mt-10">
            <a href="{{ url('/') }}" class="px-10 py-3 font-semibold text-white bg-blue-600 rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition-all duration-300">
                &larr; Mulai Lagi
            </a>
        </div>
    </div>
</div>
@endsection