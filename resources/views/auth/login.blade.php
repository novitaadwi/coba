@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gradient-to-b from-gray-900 to-gray-800">
        <div class="w-full max-w-md bg-gray-900 p-8 rounded-lg shadow-lg border border-gray-700">
            <h2 class="text-4xl font-semibold text-center text-white mb-8">Login</h2>
            <form action="">
                <div class="mb-6">
                    <label for="email" class="block text-sm font-medium text-gray-400 mb-2">Email</label>
                    <input type="email" id="email" placeholder="Enter your email" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
                </div>
                <div class="mb-6">
                    <label for="password" class="block text-sm font-medium text-gray-400 mb-2">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" class="w-full px-4 py-2 bg-gray-800 text-white border border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-red-600">
                </div>
                <button type="button" class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg font-semibold transition duration-300" onclick="window.location.href='/contact'">
                    Login
                </button>
                <p class="text-center text-sm text-gray-400 mt-4">Don't have an account? <a href="/register" class="text-red-500 hover:underline">Register</a></p>
            </form>
        </div>
    </div>
@endsection
