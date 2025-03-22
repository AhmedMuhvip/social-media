<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SocializeX - Connect with friends and share your moments">
    <title>SocializeX</title>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet"/>
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #1f2937;
        }

        ::-webkit-scrollbar-thumb {
            background: #4b5563;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #6b7280;
        }

        /* Smooth transitions */
        .transition-transform {
            transition: transform 0.2s ease-in-out;
        }

        .hover-scale:hover {
            transform: scale(1.02);
        }
    </style>
</head>
<body class="bg-gray-900 min-h-screen">

<nav class="text-white sticky top-0 z-50 bg-gray-900/95 backdrop-blur-sm border-b border-gray-800">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse hover:opacity-80 transition-opacity">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="SocializeX Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SocializeX</span>
        </a>

        <!-- Search Bar - Moved to top for better accessibility -->
        <form action="/search" method="GET" id="search-form" class="flex-1 max-w-xl mx-4 hidden md:block">
            <div class="relative">
                <input type="text"
                       placeholder="Search Something..."
                       name="searchContent"
                       class="w-full outline-none bg-gray-800 text-sm px-5 py-3 rounded-full text-white placeholder-gray-400 border border-gray-700 focus:border-blue-500 transition-colors"
                       aria-label="Search"/>
                <button type="submit"
                        class="absolute right-2 top-1/2 -translate-y-1/2 p-2 hover:bg-gray-700 rounded-full transition-colors"
                        aria-label="Search">
                    <i class='bx bx-search text-xl text-gray-400'></i>
                </button>
            </div>
        </form>

        <!-- Replace the existing nav buttons section with this -->
        <div class="flex items-center gap-4">
            @guest
                <a href="/login"
                   class="text-white bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 transition-colors">
                    Login
                </a>
            @endguest

            @auth
                <!-- Notifications -->
                <button class="relative p-2 hover:bg-gray-800 rounded-full" aria-label="Notifications">
                    <i class='bx bx-bell text-xl'></i>
                    <span
                            class="absolute top-0 right-0 bg-red-500 text-xs w-5 h-5 rounded-full flex items-center justify-center">3</span>
                </button>

                <!-- Messages -->
                <button class="relative p-2 hover:bg-gray-800 rounded-full" aria-label="Messages">
                    <i class='bx bx-message text-xl'></i>
                    <span
                            class="absolute top-0 right-0 bg-blue-500 text-xs w-5 h-5 rounded-full flex items-center justify-center">2</span>
                </button>

                <!-- Profile Dropdown -->
                <div class="hidden md:block relative">
                    <button id="dropdownProfileButton" data-dropdown-toggle="dropdownProfile"
                            class="flex items-center space-x-2 p-2 hover:bg-gray-800 rounded-lg">
                        <img src="@if(\Illuminate\Support\Facades\Auth::check()){{$user->image}}@endif"
                             alt="Profile picture"
                             class="w-8 h-8 rounded-full object-cover border-2 border-blue-500">
                        <i class='bx bx-chevron-down text-gray-300'></i>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdownProfile"
                         class="hidden bg-gray-800 rounded-lg shadow-lg w-48 absolute right-0 z-50 border border-gray-700">
                        <ul class="py-2">
                            <li>
                                <a href="/profile"
                                   class="flex items-center px-4 py-2 hover:bg-gray-700 transition-colors">
                                    <i class='bx bx-user text-xl mr-2 text-gray-400'></i>
                                    <span class="text-white">My Profile</span>
                                </a>
                            </li>
                            <li>
                                <a href="/settings"
                                   class="flex items-center px-4 py-2 hover:bg-gray-700 transition-colors">
                                    <i class='bx bx-cog text-xl mr-2 text-gray-400'></i>
                                    <span class="text-white">Settings</span>
                                </a>
                            </li>
                            <li>
                                <a href="/friends"
                                   class="flex items-center px-4 py-2 hover:bg-gray-700 transition-colors">
                                    <i class='bx bx-group text-xl mr-2 text-gray-400'></i>
                                    <span class="text-white">Friends</span>
                                </a>
                            </li>
                            <li>
                                <a href="/friend-request"
                                   class="flex items-center px-4 py-2 hover:bg-gray-700 transition-colors">
                                    <span class="text-white">Friends Request</span>
                                </a>
                            </li>
                            <li class="border-t border-gray-700">
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button
                                            class="w-full flex items-center px-4 py-2 hover:bg-gray-700 transition-colors text-red-400">
                                        <i class='bx bx-log-out text-xl mr-2'></i>
                                        <span>Logout</span>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <button data-collapse-toggle="navbar-menu" type="button"
                        class="md:hidden p-2 hover:bg-gray-800 rounded-lg"
                        aria-controls="navbar-menu" aria-expanded="false">
                    <i class='bx bx-menu text-2xl'></i>
                </button>
            @endauth
        </div>

        <!-- Update the Mobile menu section with these items -->
        <div class="hidden w-full md:hidden mt-4" id="navbar-menu">
            <form action="/search" method="GET" class="mb-4">
                <input type="text"
                       placeholder="Search Something..."
                       name="searchContent"
                       class="w-full bg-gray-800 text-sm px-4 py-2 rounded-lg text-white placeholder-gray-400 border border-gray-700"/>
            </form>

            <ul class="flex flex-col gap-2">
                <li><a href="/" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg">
                        <i class='bx bx-home text-xl mr-2 text-gray-400'></i>
                        <span>Home</span>
                    </a></li>
                <li><a href="/profile" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg">
                        <i class='bx bx-user text-xl mr-2 text-gray-400'></i>
                        <span>My Profile</span>
                    </a></li>
                <li><a href="/friends" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg">
                        <i class='bx bx-group text-xl mr-2 text-gray-400'></i>
                        <span>Friends</span>
                    </a></li>
                <li><a href="/settings" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg">
                        <i class='bx bx-cog text-xl mr-2 text-gray-400'></i>
                        <span>Settings</span>
                    </a></li>
                <li><a href="/saved-posts" class="flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg">
                        <i class='bx bx-bookmark text-xl mr-2 text-gray-400'></i>
                        <span>Saved Posts</span>
                    </a></li>
                @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button
                                    class="w-full flex items-center px-4 py-2 hover:bg-gray-800 rounded-lg text-red-400">
                                <i class='bx bx-log-out text-xl mr-2'></i>
                                <span>Logout</span>
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
        <!-- Mobile menu -->
        <div class="hidden w-full md:hidden mt-4" id="navbar-menu">
            <form action="/search" method="GET" class="mb-4">
                <input type="text"
                       placeholder="Search Something..."
                       name="searchContent"
                       class="w-full bg-gray-800 text-sm px-4 py-2 rounded-lg text-white placeholder-gray-400 border border-gray-700"/>
            </form>

            <ul class="flex flex-col gap-2">
                <li><a href="/" class="block px-4 py-2 hover:bg-gray-800 rounded-lg">Home</a></li>
                <li><a href="/profile" class="block px-4 py-2 hover:bg-gray-800 rounded-lg">My Profile</a></li>
                <li><a href="/friend-request" class="block px-4 py-2 hover:bg-gray-800 rounded-lg">Friend Requests</a>
                </li>
                @auth
                    <li>
                        <form action="/logout" method="POST">
                            @csrf
                            <button class="w-full text-left px-4 py-2 hover:bg-gray-800 rounded-lg text-red-400">
                                Logout
                            </button>
                        </form>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- Create Post Card -->
<div class="max-w-2xl mx-auto px-4 mt-8">
    <div class="bg-gray-800 rounded-xl shadow-lg overflow-hidden hover-scale transition-transform">
        <div class="p-4">
            <div class="flex items-center space-x-4">
                <img src="@if(\Illuminate\Support\Facades\Auth::check()){{$user->image}}@endif"
                     alt="Profile picture"
                     class="w-12 h-12 rounded-full object-cover border-2 border-blue-500">
                <button onclick="openPostModal()"
                        class="flex-1 bg-gray-700 rounded-full py-3 px-4 text-left text-gray-300 hover:bg-gray-600 transition-colors">
                    What's on your mind, @if(\Illuminate\Support\Facades\Auth::check())
                        {{$user->fName}}
                    @endif?
                </button>
            </div>

            <div class="flex mt-4 pt-4 border-t border-gray-700">
                <button
                        class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-700 transition-colors group">
                    <i class='bx bxs-video-plus text-red-500 text-xl group-hover:scale-110 transition-transform'></i>
                    <span class="text-sm font-medium text-gray-300">Live Video</span>
                </button>

                <button
                        class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-700 transition-colors group">
                    <i class='bx bx-images text-green-500 text-xl group-hover:scale-110 transition-transform'></i>
                    <span class="text-sm font-medium text-gray-300">Photo/Video</span>
                </button>

                <button
                        class="flex-1 flex items-center justify-center space-x-2 p-2 rounded-lg hover:bg-gray-700 transition-colors group">
                    <i class='bx bx-smile text-yellow-500 text-xl group-hover:scale-110 transition-transform'></i>
                    <span class="text-sm font-medium text-gray-300">Feeling/Activity</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Post Modal -->
<div id="postModal" class="hidden fixed inset-0 bg-black/70 z-50 flex items-center justify-center backdrop-blur-sm">
    <div class="bg-gray-800 rounded-xl w-full max-w-lg mx-4 shadow-2xl transform transition-all">
        <div class="p-4 border-b border-gray-700 flex justify-between items-center">
            <h3 class="text-xl font-semibold text-white">Create Post</h3>
            <button onclick="closePostModal()"
                    class="p-2 hover:bg-gray-700 rounded-full transition-colors"
                    aria-label="Close modal">
                <i class='bx bx-x text-2xl text-gray-400'></i>
            </button>
        </div>

        <div class="p-4">
            <div class="flex items-center space-x-3 mb-4">
                <img src="@if(\Illuminate\Support\Facades\Auth::check()){{$user->image}}@endif"
                     alt="Profile picture"
                     class="w-10 h-10 rounded-full object-cover border-2 border-blue-500">
                <div>
                    <p class="font-semibold text-white">
                        @if(\Illuminate\Support\Facades\Auth::check())
                            {{ $user->fName }} {{ $user->lName }}
                        @endif
                    </p>
                    <button
                            class="text-sm bg-gray-700 px-3 py-1 rounded-full flex items-center space-x-1 hover:bg-gray-600 transition-colors">
                        <i class='bx bx-globe text-gray-300'></i>
                        <span class="text-gray-300">Public</span>
                        <i class='bx bx-chevron-down text-gray-300'></i>
                    </button>
                </div>
            </div>

            <form method="POST" action="/publish" enctype="multipart/form-data">
                @csrf
                <textarea name="content"
                          placeholder="What's on your mind?"
                          class="w-full h-32 p-3 border-0 focus:ring-0 text-white bg-transparent resize-none placeholder-gray-500"></textarea>

                <div class="bg-gray-700/50 border border-gray-600 rounded-lg p-3 mb-4">
                    <label for="dropzone-file"
                           class="p-3 hover:bg-gray-600 rounded-full cursor-pointer flex items-center space-x-2 transition-colors">
                        <i class='bx bx-images text-green-500 text-xl'></i>
                        <span class="text-gray-300">Upload Image</span>
                        <input id="dropzone-file" type="file" class="hidden" name="image" accept="image/*"
                               onchange="updateFileInfo(this)"/>
                    </label>
                    <div id="file-info" class="mt-2 text-gray-400 text-sm"></div>
                </div>

                <button
                        class="w-full bg-blue-600 text-white rounded-lg py-2.5 font-semibold hover:bg-blue-700 transition-colors">
                    Post
                </button>
            </form>
        </div>
    </div>
</div>

@if($posts)
    @include('posts')
@endif

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

    function updateFileInfo(input) {
        const fileInfo = document.getElementById('file-info');
        if (input.files && input.files[0]) {
            const fileName = input.files[0].name;
            fileInfo.textContent = `Selected file: ${fileName}`;
        } else {
            fileInfo.textContent = '';
        }
    }

    // Close modal when clicking outside
    document.getElementById('postModal').addEventListener('click', function (e) {
        if (e.target === this) {
            closePostModal();
        }
    });

    // Close modal with Escape key
    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !document.getElementById('postModal').classList.contains('hidden')) {
            closePostModal();
        }
    });
</script>
</body>
</html>
