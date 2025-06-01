@extends('layouts.app')

@section('title', $user->username . "'s Profile")

@section('content')
<nav class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" class="text-xl font-bold">Dashboard</a>
                </div>
            </div>
            <div class="flex items-center">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="text-gray-700 hover:text-gray-900 px-3 py-2 rounded-md text-sm font-medium">Logout</button>
                </form>
            </div>
        </div>
    </div>
</nav>

<main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
    <div class="px-4 py-6 sm:px-0">
        <div class="bg-white shadow rounded-lg p-6">
            <div class="flex items-center space-x-4">
                <div class="flex-shrink-0">
                    <div class="h-16 w-16 rounded-full bg-gray-300 flex items-center justify-center">
                        <span class="text-2xl font-bold text-gray-600">{{ substr($user->username, 0, 1) }}</span>
                    </div>
                </div>
                <div>
                    <h2 class="text-2xl font-bold text-gray-900">{{ $user->username }}</h2>
                    <p class="text-gray-600">{{ $user->email }}</p>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection 