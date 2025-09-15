@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 max-w-2xl p-6 bg-white rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6">Create a New Post</h1>

    {{-- Validation Errors --}}
    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-700 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="mb-4">
            <label for="title" class="block text-gray-700 font-medium mb-2">Title:</label>
            <input type="text" name="title" id="title" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400">
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-700 font-medium mb-2">Content:</label>
            <textarea name="content" id="content" rows="6" required
                class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-400"></textarea>
        </div>

        {{-- Buttons --}}
        <div class="flex items-center space-x-3">
            <button type="submit"
                class="px-6 py-2 text-black bg-blue-500 rounded-lg hover:bg-blue-600 transition">Create</button>

            <a href="{{ url('/') }}"
                class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">Home</a>

            <a href="{{ route('posts.index') }}"
                class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">All Posts</a>

            <a href="{{ url()->previous() }}"
                class="px-6 py-2 bg-red-500 text-black rounded-lg hover:bg-red-600 transition">Cancel</a>
        </div>
    </form>
</div>
@endsection
