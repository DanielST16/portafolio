<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="flex-shrink-0">
                <a href="/" class="text-xl font-bold text-gray-900">Daniel Sierra</a>
            </div>
            <nav class="space-x-4">
                <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-500 transition">Home</a>
                <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-500 transition">About Me</a>
                <a href="{{ route('portafolio') }}" class="text-gray-700 hover:text-blue-500 transition">Portafolio</a>
                <a href="{{ route('posts.index') }}" class="text-gray-700 hover:text-blue-500 transition">Posts</a>
                <a href="{{ route('contact') }}" class="text-gray-700 hover:text-blue-500 transition">Contact</a>
            </nav>
        </div>
    </div>
</header>
