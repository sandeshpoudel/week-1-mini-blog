<div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-6">
    <!-- Home -->
    <a href="{{ url('/') }}" 
       class="flex items-center justify-center p-6 bg-blue-500 hover:bg-blue-600 text-white rounded-lg shadow-md transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l9-9 9 9M4 10v10h16V10"/>
        </svg>
        Home
    </a>

    <!-- Create Post -->
    <a href="{{ route('posts.create') }}"
       class="flex items-center justify-center p-6 bg-green-500 hover:bg-green-600 text-white rounded-lg shadow-md transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4"/>
        </svg>
        Create Post
    </a>

    <!-- View All Posts -->
    <a href="{{ route('posts.index') }}"
       class="flex items-center justify-center p-6 bg-gray-500 hover:bg-gray-600 text-white rounded-lg shadow-md transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
             stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M3 7h18M3 12h18M3 17h18"/>
        </svg>
        View All Posts
    </a>

    <!-- Logout -->
    <form action="{{ route('logout') }}" method="POST" class="flex">
        @csrf
        <button type="submit"
            class="flex items-center justify-center w-full p-6 bg-red-500 hover:bg-red-600 text-white rounded-lg shadow-md transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7"/>
            </svg>
            Logout
        </button>
    </form>
</div>
