<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Friends List</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
<nav class="bg-gray-900 text-white ">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-3">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse hover:opacity-80 transition-opacity">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="SocializeX Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap">SocializeX</span>
        </a>
    </div>
</nav>
<div class="max-w-4xl mx-auto p-4">
    <!-- Header -->
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-white">Friends</h1>
        <div class="relative">
            <input type="search" placeholder="Search friends"
                   class="bg-gray-800 text-white rounded-lg px-4 py-2 pl-10 w-64 focus:outline-none focus:ring-2 focus:ring-blue-500">
            <svg class="w-5 h-5 absolute left-3 top-2.5 text-gray-400" fill="none" stroke="currentColor"
                 viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
            </svg>
        </div>
    </div>

    @foreach($users as $user)
        {{--        @dd()--}}
        <!-- Friends List -->
        <div class="bg-gray-800 rounded-xl">
            <!-- Friend Item -->
            <div
                class="flex items-center justify-between p-4 hover:bg-gray-700 transition duration-150 border-b border-gray-700">
                <div class="flex items-center space-x-3">
                    <div class="relative">
                        <img src="{{asset($user->friend->image)}}" alt=""
                             class="w-12 h-12 bg-blue-600 rounded-full flex items-center justify-center text-white font-bold">

                        </img>
                    </div>
                    <div>
                        <h3 class="text-white font-medium">{{$user->friend->fName}} {{$user->friend->lName}}</h3>
                    </div>
                </div>
                <div class="flex items-center space-x-2">
                    <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Message
                    </button>
                    <button class="p-2 text-gray-400 hover:text-white">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
            @endforeach
            <!-- Friend Item -->
            <!-- Friend Item -->
            <!-- Friend Item -->
        </div>
</div>
</body>
</html>
