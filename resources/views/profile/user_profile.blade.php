<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Add Inter font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Inter', sans-serif;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .post-transition {
            transition: all 0.3s ease;
        }

        .post-transition:hover {
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="bg-gray-50">
<div class="min-h-screen">
    <!-- Header -->
    <nav class="bg-white shadow-sm fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <span
                        class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-indigo-600 text-transparent bg-clip-text">MySocial</span>
                    <div class="hidden md:flex ml-10">
                        <input type="text" placeholder="Search..."
                               class="w-96 px-4 py-2 bg-gray-100 rounded-full focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex items-center space-x-6">
                    <button class="p-2 hover:bg-gray-100 rounded-full transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>
                    <button class="p-2 hover:bg-gray-100 rounded-full transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                        </svg>
                    </button>
                    <div class="relative">
                        <img src="{{ asset($user->image) }}" alt="Profile"
                             class="w-8 h-8 rounded-full cursor-pointer">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Profile Header -->
        @include('profile.profileHeader')
        <!-- Main Content Grid -->
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Left Sidebar -->
                <div class="space-y-6">
                    <!-- About Card -->

                    @include('profile.aboutCard')
                    <!-- Friends Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex justify-between items-center mb-4">
                            <h2 class="text-xl font-semibold">Friends</h2>
                            <a href="#" class="text-blue-600 text-sm hover:underline">See All Friends</a>
                        </div>
                        <div class="grid grid-cols-3 gap-3">
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">Sarah Wilson</p>
                            </div>
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">Mike Johnson</p>
                            </div>
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">Emily Brown</p>
                            </div>
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">David Lee</p>
                            </div>
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">Lisa Chen</p>
                            </div>
                            <div class="space-y-2">
                                <img src="https://via.placeholder.com/80" alt="Friend"
                                     class="w-full h-20 object-cover rounded-lg">
                                <p class="text-sm font-medium truncate">Tom Wilson</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Main Feed -->
                <div class="md:col-span-2 space-y-6">
                    <!-- Create Post -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <div class="flex space-x-4">
                            <img src="{{$user['image']}}" alt="User" class="w-10 h-10 rounded-full">
                            <button
                                class="flex-1 bg-gray-100 rounded-full px-4 py-2 text-left text-gray-600 hover:bg-gray-200 transition duration-200">
                                What's on your mind, {{$user['fName']}}?
                            </button>
                        </div>
                        <div class="flex justify-between mt-4 pt-4 border-t">
                            <button
                                class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                                </svg>
                                <span>Live Video</span>
                            </button>
                            <button
                                class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                <span>Photo/Video</span>
                            </button>
                            <button
                                class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span>Feeling/Activity</span>
                            </button>
                        </div>
                    </div>

                    <!-- Posts -->
                    <div class="space-y-6">
                        <!-- Post 1 -->
                        <div class="bg-white rounded-xl shadow-sm post-transition">
                            <div class="p-6">
                                @include('profile.profile_Posts')

                                <!-- Reactions Summary -->
                                <div class="flex items-center justify-between mt-4 py-2 border-t border-b">
                                    <div class="flex items-center space-x-2">
                                        <div class="flex -space-x-1">
                                            <span
                                                class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white text-xs">👍</span>
                                            <span
                                                class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white text-xs">❤️</span>
                                            <span
                                                class="flex items-center justify-center w-6 h-6 rounded-full bg-yellow-500 text-white text-xs">😮</span>
                                        </div>
                                        <span class="text-gray-600 text-sm">2.5k</span>
                                    </div>
                                    <div class="flex space-x-4 text-gray-500 text-sm">
                                        <span>482 comments</span>
                                        <span>64 shares</span>
                                    </div>
                                </div>

                                <!-- Action Buttons -->
                                <div class="flex items-center justify-between mt-4">
                                    <button
                                        class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                                        </svg>
                                        <span>Like</span>
                                    </button>
                                    <button
                                        class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                                        </svg>
                                        <span>Comment</span>
                                    </button>
                                    <button
                                        class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                                        </svg>
                                        <span>Share</span>
                                    </button>
                                </div>

                                <!-- Comments Section -->
                                <div class="mt-6 space-y-4">
                                    <div class="flex space-x-3">
                                        <img src="https://via.placeholder.com/32" alt="Commenter"
                                             class="w-8 h-8 rounded-full">
                                        <div>
                                            <div class="bg-gray-100 rounded-2xl px-4 py-2">
                                                <p class="font-medium">Sarah Wilson</p>
                                                <p class="text-gray-600">This looks amazing! Can't wait to see more
                                                    updates on this project! 🔥</p>
                                            </div>
                                            <div class="flex items-center space-x-4 mt-1 text-sm text-gray-500">
                                                <button class="hover:text-gray-700">Like</button>
                                                <button class="hover:text-gray-700">Reply</button>
                                                <span>2h</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Comment Input -->
                                    <div class="flex space-x-3">
                                        <img src="https://via.placeholder.com/32" alt="User"
                                             class="w-8 h-8 rounded-full">
                                        <div class="flex-1 relative">
                                            <input type="text" placeholder="Write a comment..."
                                                   class="w-full bg-gray-100 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <div class="absolute right-3 top-2 flex space-x-2">
                                                <button class="text-gray-500 hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2"
                                                              d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                                    </svg>
                                                </button>
                                                <button class="text-gray-500 hover:text-gray-700">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                                         viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                              stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20
