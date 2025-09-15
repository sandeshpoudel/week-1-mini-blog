@extends('layouts.app')

@section('content')
<div class="container mx-auto mt-10 max-w-3xl p-6 bg-white rounded-lg shadow-md">

    {{-- Post Title --}}
    <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>

    {{-- Author & Date --}}
    <p class="text-gray-500 mb-6">
        By {{ $post->user->name ?? 'Unknown' }} on {{ $post->created_at->format('M d, Y') }}
    </p>

    {{-- Post Content --}}
    <div class="text-gray-700 mb-8 leading-relaxed">
        {!! nl2br(e($post->content)) !!}
    </div>

    {{-- Action Buttons --}}
    <div class="flex flex-wrap gap-3">
        {{-- Edit/Delete only for owner --}}
        @if(auth()->check() && auth()->id() === $post->user_id)
            <a href="{{ route('posts.edit', $post->id) }}"
               class="px-6 py-2 bg-yellow-400 text-white rounded-lg hover:bg-yellow-500 transition">
               Edit
            </a>

            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" onsubmit="return confirm('Are you sure?');" class="inline-block">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-6 py-2 bg-red-500 text-white rounded-lg hover:bg-red-600 transition">
                    Delete
                </button>
            </form>
        @endif

        {{-- Navigation Buttons --}}
        <a href="{{ route('posts.index') }}"
           class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">
           All Posts
        </a>

        <a href="{{ url('/') }}"
           class="px-6 py-2 bg-gray-300 text-gray-800 rounded-lg hover:bg-gray-400 transition">
           Home
        </a>

        <a href="{{ url()->previous() }}"
           class="px-6 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
           Back
        </a>
    </div>
</div>
@endsection
