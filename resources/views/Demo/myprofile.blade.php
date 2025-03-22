<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Social Network</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap');

        * {
            font-family: 'Inter', sans-serif;
        }

        .dark {
            background-color: #0f172a;
            color: #e2e8f0;
        }

        .story-gradient {
            background: linear-gradient(45deg, #f97316, #db2777, #8b5cf6);
        }

        .custom-shadow {
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        .post-transition {
            transition: all 0.3s ease;
        }

        .post-transition:hover {
            transform: translateY(-2px);
        }

        .story {
            position: relative;
            cursor: pointer;
            transition: transform 0.3s ease;
        }

        .story:hover {
            transform: scale(1.05);
        }

        .story::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(to bottom, transparent 50%, rgba(0, 0, 0, 0.7));
            border-radius: 1rem;
        }

        .like-animation {
            animation: likeEffect 0.5s ease;
        }

        @keyframes likeEffect {
            0% {
                transform: scale(1);
            }
            50% {
                transform: scale(1.2);
            }
            100% {
                transform: scale(1);
            }
        }

        .shimmer {
            background: linear-gradient(90deg,
            rgba(255, 255, 255, 0) 0%,
            rgba(255, 255, 255, 0.2) 50%,
            rgba(255, 255, 255, 0) 100%);
            background-size: 200% 100%;
            animation: shimmer 1.5s infinite;
        }

        @keyframes shimmer {
            0% {
                background-position: -200% 0;
            }
            100% {
                background-position: 200% 0;
            }
        }
    </style>
</head>
<body class="bg-gray-50 dark:bg-gray-900 transition-colors duration-300">
<!-- Navigation -->
<nav class="fixed w-full bg-white dark:bg-gray-800 shadow-sm z-50 backdrop-blur-lg bg-opacity-80">
    <div class="container mx-auto px-4 py-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-6">
                <h1 class="text-2xl font-bold bg-gradient-to-r from-blue-500 to-purple-600 text-transparent bg-clip-text">
                    social</h1>
                <div class="relative">
                    <input type="text" placeholder="Search..."
                           class="pl-10 pr-4 py-2 rounded-full bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500 w-64 transition-all">
                    <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </div>
            </div>
            <div class="flex items-center space-x-4">
                <button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors relative">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                    <span
                        class="absolute top-0 right-0 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">3</span>
                </button>
                <button class="p-2 rounded-full hover:bg-gray-100 dark:hover:bg-gray-700 transition-colors"
                        id="darkModeToggle">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z"/>
                    </svg>
                </button>
                <img src="https://placekitten.com/100/100" alt="Profile"
                     class="w-10 h-10 rounded-full border-2 border-blue-500 cursor-pointer hover:opacity-80 transition-opacity">
            </div>
        </div>
    </div>
</nav>

<!-- Profile Header -->
<div class="pt-16">
    <div class="relative h-80">
        <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-purple-600 opacity-80"></div>
        <img src="https://images.unsplash.com/photo-1579546929518-9e396f3cc809" alt="Cover"
             class="w-full h-full object-cover">
        <div class="absolute -bottom-20 left-8 flex items-end space-x-6">
            <div class="relative">
                <img src="https://placekitten.com/200/200" alt="Profile"
                     class="w-40 h-40 rounded-full border-4 border-white dark:border-gray-800 shadow-lg">
                <div
                    class="absolute bottom-4 right-4 bg-blue-500 w-8 h-8 rounded-full flex items-center justify-center cursor-pointer hover:bg-blue-600 transition-colors">
                    <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                    </svg>
                </div>
            </div>
            <div class="mb-6">
                <h2 class="text-3xl font-bold text-white">Alex Johnson</h2>
                <p class="text-gray-200">Senior Software Engineer @ Tech Corp</p>
            </div>
        </div>
    </div>
</div>

<!-- Profile Navigation -->
<div class="bg-white dark:bg-gray-800 shadow-sm mt-24">
    <div class="container mx-auto px-4">
        <div class="flex items-center space-x-8 py-4">
            <button class="px-4 py-2 text-blue-500 border-b-2 border-blue-500 font-medium">Timeline</button>
            <button
                class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                About
            </button>
            <button
                class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                Friends
            </button>
            <button
                class="px-4 py-2 text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white transition-colors">
                Photos
            </button>
        </div>
    </div>
</div>

<!-- Main Content -->
<div class="container mx-auto px-4 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
        <!-- Left Sidebar -->
        <div class="space-y-6">
            <!-- Stories -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold">Stories</h3>
                    <button class="text-blue-500 hover:text-blue-600">See all</button>
                </div>
                <div class="grid grid-cols-4 gap-4">
                    <div class="story">
                        <div class="relative rounded-xl overflow-hidden aspect-square">
                            <div class="story-gradient absolute inset-0 opacity-30"></div>
                            <img src="https://placekitten.com/150/150" alt="Story" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <!-- More stories... -->
                </div>
            </div>

            <!-- About -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
                <h3 class="text-xl font-bold mb-6">About</h3>
                <div class="space-y-4">
                    <div class="flex items-center space-x-3 text-gray-600 dark:text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <span>Works at Tech Corp</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-600 dark:text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"/>
                        </svg>
                        <span>Studied at MIT</span>
                    </div>
                    <div class="flex items-center space-x-3 text-gray-600 dark:text-gray-400">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>Lives in New York, USA</span>
                    </div>
                </div>
            </div>

            <!-- Friends -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
                <div class="flex items-center justify-between mb-6">
                    <h3 class="text-xl font-bold">Friends</h3>
                    <span class="text-gray-500 dark:text-gray-400">1,234 friends</span>
                </div>
                <div class="grid grid-cols-3 gap-4">
                    <div class="space-y-2">
                        <img src="https://placekitten.com/120/120" alt="Friend"
                             class="w-full rounded-lg hover:opacity-90 transition-opacity cursor-pointer">
                        <p class="text-sm font-medium">Sarah Wilson</p>
                    </div>
                    <!-- More friends... -->
                </div>
            </div>
        </div>

        <!-- Main Content Area -->
        <div class="lg:col-span-2 space-y-6">
            <!-- Create Post -->
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6" data-aos="fade-up">
                <div class="flex items-center space-x-4">
                    <img src="https://placekitten.com/100/100" alt="Profile" class="w-12 h-12 rounded-full">
                    <div class="flex-1">
                        <input type="text" id="postContent" placeholder="What's on your mind?"
                               class="w-full px-4 py-3 rounded-xl bg-gray-100 dark:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    </div>
                </div>
                <div class="flex items-center justify-between mt-4 pt-4 border-t dark:border-gray-700">
                    <div class="flex space-x-4">
                        <button
                            class="flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                            </svg>
                            <span>Photo</span>
                        </button>
                        <button
                            class="flex items-center space-x-2 text-gray-600 dark:text-gray-400 hover:text-blue-500 dark:hover:text-blue-400 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"/>
                            </svg>
                            <span>Video</span>
                        </button>
                    </div>
                    <button id="publishPost"
                            class="px-6 py-2 bg-blue-500 text-white rounded-xl hover:bg-blue-600 transition-colors">Post
                    </button>
                </div>
            </div>

            <!-- Posts Container -->
            <div id="postsContainer" class="space-y-6">
                <!-- Posts will be added here dynamically -->
            </div>
        </div>
    </div>
</div>

<script>
    // Initialize AOS
    AOS.init({
        duration: 800,
        once: true
    });

    // Dark mode toggle
    const darkModeToggle = document.getElementById('darkModeToggle');
    const body = document.body;

    // Check for saved dark mode preference
    if (localStorage.getItem('darkMode') === 'enabled') {
        body.classList.add('dark');
    }

    darkModeToggle.addEventListener('click', () => {
        body.classList.toggle('dark');
        localStorage.setItem('darkMode', body.classList.contains('dark') ? 'enabled' : 'disabled');
    });

    // Post functionality
    const publishPost = document.getElementById('publishPost');
    const postContent = document.getElementById('postContent');
    const postsContainer = document.getElementById('postsContainer');

    function createPost(content, withImage = false) {
        const post = document.createElement('div');
        post.className = 'bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6 post-transition';
        post.setAttribute('data-aos', 'fade-up');

        const timestamp = new Date().toLocaleString();

        let imageHTML = '';
        if (withImage) {
            imageHTML = `
                    <div class="mt-4 rounded-xl overflow-hidden">
                        <img src="https://source.unsplash.com/random/800x400" alt="Post image" class="w-full object-cover">
                    </div>
                `;
        }

        post.innerHTML = `
                <div class="flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <img src="https://placekitten.com/100/100" alt="Profile" class="w-12 h-12 rounded-full">
                        <div>
                            <h4 class="font-bold dark:text-white">Alex Johnson</h4>
                            <p class="text-sm text-gray-500 dark:text-gray-400">${timestamp}</p>
                        </div>
                    </div>
                    <button class="text-gray-500 hover:text-gray-700 dark:text-gray-400 dark:hover:text-gray-200">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z"/>
                        </svg>
                    </button>
                </div>
                <p class="mt-4 text-gray-800 dark:text-gray-200">${content}</p>
                ${imageHTML}
                <div class="flex items-center justify-between mt-6 pt-4 border-t dark:border-gray-700">
                    <div class="flex space-x-4">
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-blue-500 transition-colors" onclick="toggleLike(this)">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                            <span>Like</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-blue-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>Comment</span>
                        </button>
                        <button class="flex items-center space-x-2 text-gray-500 hover:text-blue-500 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            <span>Share</span>
                        </button>
                    </div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">
                        <span>23 likes</span>
                        <span class="mx-2">•</span>
                        <span>5 comments</span>
                    </div>
                </div>
            `;

        postsContainer.prepend(post);
    }

    publishPost.addEventListener('click', () => {
        const content = postContent.value.trim();
        if (content) {
            createPost(content, Math.random() > 0.5);
            postContent.value = '';
        }
    });

    function toggleLike(button) {
        button.classList.toggle('text-blue-500');
        button.querySelector('svg').classList.add('like-animation');
        setTimeout(() => {
            button.querySelector('svg').classList.remove('like-animation');
        }, 500);
    }

    // Add initial posts
    createPost("Just launched my new website! 🚀 Check it out and let me know what you think. #webdev #coding", true);
    createPost("Beautiful sunset view from my office today! 🌅");
    createPost("Excited to announce that I'll be speaking at the upcoming Tech Conference 2025! 🎤 #TechConf25", true);
</script>
</body>
</html>
