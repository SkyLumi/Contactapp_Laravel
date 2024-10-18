@extends('layouts.app')

@section('title', 'Halaman Register')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-300 via-purple-300 to-pink-400 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800">
    <div class="w-full max-w-md p-8 bg-white dark:bg-gray-700 shadow-lg rounded-xl">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white text-center mb-6 rainbow-text">
            Register
        </h1>

        <form action="/register" method="POST" class="space-y-5">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama:</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white py-2 px-3" required>
            </div>
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Email:</label>
                <input type="email" id="email" name="email" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white py-2 px-3" required>
            </div>
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Password:</label>
                <input type="password" id="password" name="password" class="mt-1 block w-full border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white py-2 px-3" required>
            </div>
            <button type="submit" class="bg-indigo-600 hover:bg-indigo-700 transition-colors duration-200 text-white py-2 px-4 rounded-md w-full">
                Register
            </button>
        </form>

        <div class="pt-5 mt-6 border-t border-gray-100 dark:text-white">
            <p class="text-sm text-center">
                Already have an account? 
                <a href="/login" class="font-medium text-indigo-500 hover:text-indigo-700 dark:text-violet-400 dark:hover:text-violet-300">
                    Sign In
                </a>
            </p>
        </div>
    </div>
</div>

<!-- CSS for the rainbow effect on text -->
<style>
    @keyframes rainbow {
        0% { background-color: #ff0000; }
        20% { background-color: #ffa500; }
        40% { background-color: #ffff00; }
        60% { background-color: #008000; }
        80% { background-color: #0000ff; }
        100% { background-color: #4b0082; }
    }

    .rainbow-text {
        background: linear-gradient(90deg, #ff0000, #ffa500, #ffff00, #008000, #0000ff, #4b0082);
        background-clip: text;
        -webkit-background-clip: text;
        color: transparent;
        animation: rainbow 2s linear infinite;
    }
</style>
@endsection
