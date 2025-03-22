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
                        <img src="https://via.placeholder.com/32" alt="Profile"
                             class="w-8 h-8 rounded-full cursor-pointer">
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="pt-16">
        <!-- Profile Header -->
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
                    <div class="flex items-end space-x-6">
                        <div class="-mt-24 relative">
                            <img src="https://via.placeholder.com/160" alt="Profile"
                                 class="w-40 h-40 rounded-full border-4 border-white shadow-lg">
                            <button
                                class="absolute bottom-2 right-2 bg-gray-800 p-2 rounded-full text-white hover:bg-gray-700 transition duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
                                </svg>
                            </button>
                        </div>
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold">John Doe</h1>
                            <p class="text-gray-600 mt-1">Senior Software Engineer at Tech Corp</p>
                            <div class="flex items-center space-x-4 mt-4">
                                    <span class="text-gray-600">
                                        <span class="font-semibold">2.5k</span> Friends
                                    </span>
                                <span class="text-gray-600">
                                        <span class="font-semibold">15.7k</span> Followers
                                    </span>
                            </div>
                        </div>
                        <div class="flex space-x-3">
                            <button
                                class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition duration-200">
                                Edit Profile
                            </button>
                            <button
                                class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-200">
                                Share Profile
                            </button>
                        </div>
                    </div>

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

        <!-- Main Content Grid -->
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Left Sidebar -->
                <div class="space-y-6">
                    <!-- About Card -->
                    <div class="bg-white rounded-xl shadow-sm p-6">
                        <h2 class="text-xl font-semibold mb-4">About</h2>
                        <div class="space-y-4">
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span class="text-gray-600">Works at Tech Corp</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                                </svg>
                                <span class="text-gray-600">Studied at Tech University</span>
                            </div>
                            <div class="flex items-center space-x-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                                <span class="text-gray-600">Lives in San Francisco, CA</span>
                            </div>
                        </div>
                        <button class="w-full mt-6 text-blue-600 font-medium hover:underline">Edit Details</button>
                    </div>

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
                            <img src="https://via.placeholder.com/40" alt="User" class="w-10 h-10 rounded-full">
                            <button
                                class="flex-1 bg-gray-100 rounded-full px-4 py-2 text-left text-gray-600 hover:bg-gray-200 transition duration-200">
                                What's on your mind, John?
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
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center space-x-3">
                                        <img src="https://via.placeholder.com/40" alt="User"
                                             class="w-10 h-10 rounded-full">
                                        <div>
                                            <div class="flex items-center space-x-2">
                                                <h3 class="font-semibold hover:underline cursor-pointer">John Doe</h3>
                                                <span class="text-blue-600">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                                             viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                  d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                  clip-rule="evenodd"/>
                                                        </svg>
                                                    </span>
                                            </div>
                                            <p class="text-gray-500 text-sm">2 hours ago · <span class="text-gray-600">🌎</span>
                                            </p>
                                        </div>
                                    </div>
                                    <button class="text-gray-400 hover:text-gray-600">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                                        </svg>
                                    </button>
                                </div>
                                <p class="mt-4 text-gray-800">Just wrapped up an amazing coding session! 🚀 Check out
                                    this new project I've been working on. What do you think? #coding #webdev
                                    #javascript</p>
                                <img src="https://via.placeholder.com/600x400" alt="Post"
                                     class="mt-4 rounded-lg w-full">

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
