@extends('layouts.app')

@section('content')
    <div class="bg-gray-50 min-h-screen flex flex-col">

        {{-- Hero Section --}}
        <section class="bg-blue-600 text-white py-20">
            <div class="container mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-4">Welcome to Your Blog</h1>
                <p class="text-lg md:text-xl mb-8">Share your thoughts, explore posts, and connect with others.</p>
                <div class="flex justify-center gap-4 flex-wrap">
                    <a href="{{ route('posts.create') }}"
                        class="px-6 py-3 bg-white text-blue-600 rounded-lg font-semibold hover:bg-gray-100 transition">
                        Create New Post
                    </a>
                    <a href="{{ route('posts.index') }}"
                        class="px-6 py-3 border border-white rounded-lg hover:bg-white hover:text-blue-600 transition">
                        View All Posts
                    </a>
                    <a href="{{ url('/') }}"
                        class="px-6 py-3 border border-white rounded-lg hover:bg-white hover:text-blue-600 transition">
                        Home
                    </a>
                </div>
            </div>
        </section>

        {{-- Latest Posts Section --}}
        <section class="container mx-auto py-12">
            <h2 class="text-3xl font-bold mb-6 text-center">Latest Posts</h2>

            @if($posts->count())
                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($posts as $post)
                        <div class="bg-white p-6 rounded-lg shadow hover:shadow-lg transition">
                            <h3 class="text-xl font-semibold mb-2">{{ $post->title }}</h3>
                            <p class="text-gray-600 text-sm mb-4">
                                By {{ $post->user->name ?? 'Unknown' }} on
                                {{ optional($post->created_at)->format('M d, Y') ?? 'N/A' }}
                            </p>
                            <p class="text-gray-700 mb-4">{{ Str::limit($post->content, 120) }}</p>
                            <a href="{{ route('posts.show', $post->id) }}" class="text-blue-600 font-semibold hover:underline">Read
                                More →</a>
                                {{-- edit and delete button added --}}
                        
                            
                            @if(auth()->check() && auth()->id() === $post->user_id)
                                <div class="flex gap-2">
                                    <a href="{{ route('posts.edit', $post->id) }}"
                                        class="px-3 py-1 bg-yellow-400 text-white rounded hover:bg-yellow-500 transition">
                                        Edit
                                    </a>

                                    <form action="{{ route('posts.destroy', $post->id) }}" method="POST"
                                        onsubmit="return confirm('Are you sure?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="px-3 py-1 bg-red-500 text-white rounded hover:bg-red-600 transition">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @endforeach
                </div>
            @else
                <p class="text-center text-gray-500">No posts found.</p>
            @endif



        </section>
    </div>
@endsection