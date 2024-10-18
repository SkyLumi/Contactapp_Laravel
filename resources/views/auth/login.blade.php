@extends('layouts.app')

@section('title', 'Halaman Login')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-indigo-300 via-purple-300 to-pink-400 dark:from-gray-800 dark:via-gray-900 dark:to-gray-800">
    <div class="w-full max-w-md p-8 bg-white dark:bg-gray-700 shadow-lg rounded-xl">
        <h1 class="text-4xl font-extrabold text-gray-900 dark:text-white text-center mb-6">
            Welcome Back!
        </h1>

        <div class="text-sm text-center text-green-600 mb-4">
            Masukkan Akunmu
        </div>

        <form class="space-y-5">
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Email
                </label>
                <div class="relative">
                    <input
                        id="email"
                        type="email"
                        placeholder="Enter your email"
                        class="mt-1 block w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                    />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2.94 6.94A7.98 7.98 0 0110 2a7.98 7.98 0 017.06 4.94c.14.4.26.82.36 1.26A6 6 0 1113 15.9V15a2 2 0 00-2-2H7a2 2 0 00-2 2v.9A6 6 0 012.58 8.2c.1-.44.22-.86.36-1.26zM8 14h4v1a4 4 0 10-4 0v-1z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                    Password
                </label>
                <div class="relative">
                    <input
                        id="password"
                        type="password"
                        placeholder="Enter your password"
                        class="mt-1 block w-full pl-10 pr-4 py-2 border border-gray-300 dark:border-gray-600 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 dark:bg-gray-700 dark:text-white"
                    />
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 1.104-.896 2-2 2s-2-.896-2-2m4 0c0-1.104.896-2 2-2s2 .896 2 2M8 15a4 4 0 108 0H8zm4-12a9 9 0 019 9v3a3 3 0 11-6 0v-3a3 3 0 01-6 0v3a3 3 0 01-6 0V12a9 9 0 019-9z"/>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-between">
                <a href="#" class="text-sm text-indigo-500 hover:underline dark:text-violet-400">
                    Forgot Password?
                </a>
                <a href="/contact"
                   class="bg-indigo-600 hover:bg-rainbow transition-colors duration-200 text-white px-4 py-2 rounded-md">
                    Sign in
                </a>
            </div>

        </form>

        <div class="pt-5 mt-6 border-t border-gray-100 dark:text-white">
            <p class="text-sm text-center">
                Don’t have an account?
                <a href="/register" class="font-medium text-indigo-500 hover:text-indigo-700 dark:text-violet-400 dark:hover:text-violet-300">
                    Sign Up
                </a>
            </p>
        </div>
    </div>

</div>

<style>
    @keyframes rainbow {
        0% { background-color: #ff0000; }
        20% { background-color: #ffa500; }
        40% { background-color: #ffff00; }
        60% { background-color: #008000; }
        80% { background-color: #0000ff; }
        100% { background-color: #4b0082; }
    }

    .hover\:bg-rainbow:hover {
        animation: rainbow 1s linear infinite;
    }
</style>
@endsection
