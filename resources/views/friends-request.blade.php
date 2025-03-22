<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Friend Requests</title>
</head>
<body>
<nav class="bg-gray-900 text-white ">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-3">
        <a href="/" class="flex items-center space-x-3 rtl:space-x-reverse hover:opacity-80 transition-opacity">
            <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="SocializeX Logo"/>
            <span class="self-center text-2xl font-semibold whitespace-nowrap">SocializeX</span>
        </a>
    </div>
</nav>
<div class="bg-gray-900 flex items-center justify-center min-h-screen p-4">

    <div

        class="bg-gray-800/70 backdrop-blur-xl w-full max-w-2xl relative overflow-hidden rounded-2xl shadow-2xl shadow-pink-500/30 border border-gray-700/50">
        <!-- Gradient Orbs -->

        <div
            class="absolute -right-48 -top-48 w-96 h-96 bg-gradient-to-br from-pink-500 to-orange-400 rounded-full blur-3xl opacity-20"></div>
        <div
            class="absolute -left-48 -bottom-48 w-96 h-96 bg-gradient-to-br from-pink-500 to-orange-400 rounded-full blur-3xl opacity-20"></div>

        <div class="px-8 py-10 relative">
            <!-- Friend Request Header -->
            <div class="flex justify-between items-center mb-10">
                <div>
                    <h2 class="text-3xl font-bold bg-gradient-to-r from-pink-500 to-orange-400 bg-clip-text text-transparent">
                        Friend Requests
                    </h2>
                    <p class="text-gray-400 text-sm mt-1">Manage your pending requests</p>
                </div>
                <button
                    class="text-gray-400 hover:text-pink-500 transition-all duration-300 text-sm font-medium flex items-center gap-2 group">
                    View All
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-4 w-4 transform transition-transform duration-300 group-hover:translate-x-1"
                         fill="none"
                         viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </div>

            <!-- Friend Requests Container -->
            <div class="space-y-4">
                <!-- Request Card Template -->
                @foreach($receivedRequests as $request)
                    <div
                        class="group bg-gray-800/50 p-6 rounded-xl hover:bg-gray-800/70 transition-all duration-300 border border-gray-700/50 transform hover:scale-[1.02]">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-5">
                                <div class="relative">
                                    <div
                                        class="w-16 h-16 rounded-full overflow-hidden ring-2 ring-pink-500/20 group-hover:ring-pink-500/40 transition-all duration-300">
                                        <img src="{{$request->sender->image}}"
                                             class="w-full h-full object-cover transform transition-transform duration-500 group-hover:scale-110"
                                             alt="Profile picture"></img>
                                    </div>
                                    <div
                                        class="absolute bottom-0 right-0 w-4 h-4 bg-green-500 rounded-full border-2 border-gray-800 ring-2 ring-green-500/20"></div>
                                </div>
                                <div>
                                    <h3 class="text-white text-lg font-semibold group-hover:text-pink-500 transition-colors duration-300">
                                        {{$request->sender->fName}} {{$request->sender->lName}}
                                    </h3>
                                    <p class="text-gray-400 text-sm mt-1">Sent you a friend request</p>
                                </div>
                            </div>
                            <div class="flex items-center gap-3">
                                <a href="/friend/confirm/{{$request->request_id}}" class="px-5 py-2.5 rounded-lg bg-gradient-to-r from-pink-500 to-orange-400 text-white font-medium
                                     hover:from-pink-600 hover:to-orange-500 transition-all duration-300 shadow-lg shadow-pink-500/20
                                     active:scale-95">
                                    Confirm
                                </a>
                                <a href="/friend/decline/{{$request->request_id}}" class="px-5 py-2.5 rounded-lg bg-gray-700 text-gray-300 font-medium
                                     hover:bg-gray-600 transition-all duration-300 active:scale-95">
                                    Decline
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Empty State -->
            @if(count($receivedRequests) === 0)
                <div class="text-center py-12">
                    <div class="w-20 h-20 bg-gray-800 rounded-full mx-auto flex items-center justify-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-gray-600" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                  d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-300 mb-2">No Friend Requests</h3>
                    <p class="text-gray-500">You're all caught up! Check back later for new requests.</p>
                </div>
            @endif
        </div>
    </div>

</div>
</body>
</html>
