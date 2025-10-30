@extends('layout')
@section('content')
<div class="flex items-center justify-center min-h-screen px-4">
    <div class="w-full max-w-2xl p-8 mx-auto bg-white rounded-lg shadow-2xl dark:bg-gray-800 my-8">
        <div class="mb-8 text-center">
            <span class="text-sm font-semibold text-indigo-600 uppercase dark:text-indigo-400">Sistem Pakar</span>
            <h1 class="mt-2 text-3xl font-bold text-gray-900 dark:text-white">
                {!! $question->text !!}
            </h1>
        </div>
        <form action="{{ url('/diagnose') }}" method="POST">
            @csrf
            <div class="space-y-4">
                @foreach($question->options as $option)
                <label class="block p-6 text-lg font-medium text-gray-800 bg-gray-50 border border-gray-200 rounded-lg cursor-pointer dark:bg-gray-700 dark:border-gray-600 dark:text-gray-200 hover:bg-indigo-100 hover:border-indigo-300 dark:hover:bg-gray-600 transition-all duration-200 ease-in-out has-[:checked]:bg-gray-500 has-[:checked]:border-indigo-500 has-[:checked]:ring-2 has-[:checked]:ring-indigo-500">
                    <div class="flex items-center justify-between">
                        <span>{{ $option->text }}</span>
                        <input type="radio" name="option_id" value="{{ $option->id }}" class="w-5 h-5 text-indigo-600 form-radio focus:ring-indigo-500" required>
                    </div>
                </label>
                @endforeach
            </div>
            <div class="flex justify-end mt-10">
                <button type="submit" class="w-full sm:w-auto px-10 py-3 font-semibold text-white bg-indigo-600 rounded-lg shadow-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition-all duration-300">
                    Lanjut &rarr;
                </button>
            </div>
        </form>
    </div>
</div>
@endsection