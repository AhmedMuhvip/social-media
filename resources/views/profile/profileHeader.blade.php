<div class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto">
        <!-- Cover Photo -->
        <div class="h-80 bg-gradient-to-r from-blue-400 to-indigo-500 rounded-b-lg relative">
            <button
                class="absolute bottom-4 right-4 bg-white/80 backdrop-blur-sm px-4 py-2 rounded-lg text-gray-700 hover:bg-white transition duration-200">
                <div class="flex items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Edit Cover Photo</span>
                </div>
            </button>
        </div>

        <!-- Profile Info -->
        <div class="px-6 py-4">
            @include('profile.userInfo')

            <!-- Navigation -->
            <div class="flex items-center space-x-8 mt-8 border-t">
                <button class="px-4 py-4 text-blue-600 border-b-2 border-blue-600 font-medium">Timeline</button>
                <button class="px-4 py-4 text-gray-600 hover:text-gray-900 transition duration-200">About
                </button>
                <button class="px-4 py-4 text-gray-600 hover:text-gray-900 transition duration-200">Friends
                </button>
                <button class="px-4 py-4 text-gray-600 hover:text-gray-900 transition duration-200">Photos
                </button>
                <button class="px-4 py-4 text-gray-600 hover:text-gray-900 transition duration-200">Videos
                </button>
            </div>
        </div>
    </div>
</div>
