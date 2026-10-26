@extends('layouts.app')

@section('content')
<div class="bg-white rounded-lg shadow-xl overflow-hidden">
    <div class="relative bg-blue-600 px-6 py-16 sm:px-12 sm:py-24 lg:px-16 lg:py-32 text-center">
        <h1 class="text-4xl font-extrabold text-white sm:text-5xl lg:text-6xl mb-6">
            Find the Perfect Labor for Your Needs
        </h1>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-10">
            Labor Finder connects skilled laborers with employers in Laguna. Whether you need a painter, a gardener, or a handyman, we've got you covered.
        </p>
        <div class="flex justify-center space-x-4">
            @auth
                <a href="{{ route('dashboard') }}" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition">
                    Go to Dashboard
                </a>
            @else
                <a href="{{ route('register') }}" class="bg-white text-blue-600 font-bold py-3 px-8 rounded-full shadow-lg hover:bg-gray-100 transition">
                    Get Started
                </a>
                <a href="{{ route('login') }}" class="bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg hover:bg-blue-800 transition border border-blue-500">
                    Login
                </a>
            @endauth
        </div>
    </div>

    <div class="px-6 py-16 sm:px-12 lg:px-16 bg-gray-50">
        <h2 class="text-3xl font-bold text-center mb-12 text-gray-900">Why Use Labor Finder?</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center">
                <div class="bg-blue-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Easy Search</h3>
                <p class="text-gray-600">Find jobs or laborers near your location with ease.</p>
            </div>
            <div class="text-center">
                <div class="bg-green-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Secure</h3>
                <p class="text-gray-600">Verified users and role-based access control.</p>
            </div>
            <div class="text-center">
                <div class="bg-yellow-100 w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                </div>
                <h3 class="text-xl font-semibold mb-2">Real-time</h3>
                <p class="text-gray-600">Get the latest job posts as they are created.</p>
            </div>
        </div>
    </div>
</div>
@endsection
