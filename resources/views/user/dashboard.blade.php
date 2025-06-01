@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <h1 class="text-xl font-bold">Dashboard</h1>
                </div>
            </div>
            <div class="flex items-center">
                <a href="{{ route('profile', auth()->user()->username) }}" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Profile</a>
                <form action="{{ route('logout') }}" method="POST" class="ml-4">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <div class="border-4 border-dashed border-gray-200 rounded-lg h-96 p-4">
            <h2 class="text-2xl font-bold mb-4">Welcome, {{ auth()->user()->username }}!</h2>
            <p class="text-gray-600">This is your dashboard. You can add your content here.</p>
        </div>
    </div>
</main>
@endsection 