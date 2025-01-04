<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SocializeX</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-900">

<nav class="text-white">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
        </a>
        <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
            @guest
                <a type="button" href="/login"
                   class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Login
                </a>
            @endguest

            @auth
                <form action="/logout" method="POST">
                    @csrf
                    <button
                        class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Logout
                    </button>
                </form>
            @endauth
            <button data-collapse-toggle="navbar-cta" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-cta" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-cta">
            <ul class="flex flex-col font-medium p-4 md:p-0 mt-4 border rounded-lg  md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/jobs" :active="request()->is('jobs')">Jobs</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                </li>
                <li>
                    <x-nav-link href="/profile" :active="request()->is('profile')">My Profile</x-nav-link>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="max-w-2xl mx-auto px-4 mt-8">
    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
        <div class="p-4">
            <div class="flex items-center space-x-4">
                <img
                    src="@if(\Illuminate\Support\Facades\Auth::check()){{\Illuminate\Support\Facades\Auth::user()->image}} @endif "
                    alt="Profile picture"
                    class="w-12 h-12 rounded-full object-cover">
                <button onclick="openPostModal()"
                        class="flex-1 bg-gray-100 dark:bg-gray-700 rounded-full py-3 px-4 text-left text-gray-500 dark:text-gray-300 hover:bg-gray-200 dark:hover:bg-gray-600 transition-colors duration-200">
                    What's on your mind, @if(\Illuminate\Support\Facades\Auth::check())
                        {{\Illuminate\Support\Facades\Auth::user()->fName}}
                    @endif ?
                </button>
            </div>

            <div class="flex mt-4 pt-4 border-t border-gray-200 dark:border-gray-700">
                <button
                    class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                    <i class='bx bxs-video-plus text-red-500 text-xl'></i>
                    <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Live Video</span>
                </button>

                <button
                    class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                    <i class='bx bx-images text-green-500 text-xl'></i>
                    <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Photo/Video</span>
                </button>

                <button
                    class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors duration-200">
                    <i class='bx bx-smile text-yellow-500 text-xl'></i>
                    <span class="text-sm font-medium text-gray-600 dark:text-gray-300">Feeling/Activity</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Post Modal -->
<div id="postModal" class="hidden fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center">
    <div class="bg-white dark:bg-gray-800 rounded-xl w-full max-w-lg mx-4">
        <div class="p-4 border-b border-gray-200 dark:border-gray-700 flex justify-between items-center">
            <h3 class="text-xl font-semibold text-gray-900 dark:text-white">Create Post</h3>
            <button onclick="closePostModal()"
                    class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                <i class='bx bx-x text-2xl'></i>
            </button>
        </div>

        <div class="p-4">
            <div class="flex items-center space-x-3 mb-4">
                <img
                    src="@if(\Illuminate\Support\Facades\Auth::check()) {{\Illuminate\Support\Facades\Auth::user()->image}}@endif"
                    alt="Profile picture"
                    class="w-10 h-10 rounded-full object-cover">
                <div>
                    <p class="font-semibold text-gray-900 dark:text-white">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            {{ \Illuminate\Support\Facades\Auth::user()->fName }} {{ \Illuminate\Support\Facades\Auth::user()->lName }}
                        @endif
                    </p>
                    <div class="flex items-center space-x-1">
                        <button
                            class="text-sm bg-gray-200 dark:bg-gray-700 px-3 py-1 rounded-full flex items-center space-x-1">
                            <i class='bx bx-globe text-gray-600 dark:text-gray-300'></i>
                            <span class="text-gray-600 dark:text-gray-300">Public</span>
                            <i class='bx bx-chevron-down text-gray-600 dark:text-gray-300'></i>
                        </button>
                    </div>
                </div>
            </div>

            <form method="POST" action="/publish" enctype="multipart/form-data">
                @csrf
                <textarea name="content"
                          placeholder="What's on your mind, @if(\Illuminate\Support\Facades\Auth::check()) {{\Illuminate\Support\Facades\Auth::user()->fName}}@endif?"
                          class="w-full h-32 p-3 border-0 focus:ring-0 text-gray-900 dark:text-white bg-transparent resize-none"></textarea>
                <div class="bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-lg p-3 mb-4">

                    <!-- Label that triggers the file input -->
                    <label for="dropzone-file"
                           class="p-3 hover:bg-gray-200 dark:hover:bg-gray-600 rounded-full cursor-pointer flex items-center space-x-2">
                        <i class='bx bx-images text-green-500 text-xl'></i>
                        <span class="text-gray-600 dark:text-gray-300">Upload Image</span>
                        <!-- Hidden file input -->
                        <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*"/>
                    </label>

                    <!-- Display selected file name -->
                    <div id="file-info" class="mt-2 text-gray-600 dark:text-gray-300"></div>

                </div>

                <button
                    class="w-full bg-blue-500 text-white rounded-lg py-2 font-semibold hover:bg-blue-600 transition-colors duration-200">
                    Post
                </button>
            </form>
        </div>
    </div>
</div>

@include('posts')

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
<script>
    function openPostModal() {
        document.getElementById('postModal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closePostModal() {
        document.getElementById('postModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }
</script>
</body>
</html>
