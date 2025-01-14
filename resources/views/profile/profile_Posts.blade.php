@foreach($posts as $post)
    <div class="space-y-6 mb-6"> <!-- Added mb-6 for space between posts -->
        <!-- Post 1 -->
        <div class="bg-white rounded-xl shadow-sm post-transition">
            <div class="p-6">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-3">
                        <img src="{{asset($user->image)}}" alt="User"
                             class="w-10 h-10 rounded-full">

                        <div>
                            <div class="flex items-center space-x-2">
                                <h3 class="font-semibold hover:underline cursor-pointer">{{$user->fName}} {{$user->lName}}</h3>
                                <span class="text-blue-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5"
                                         viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                              d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                              clip-rule="evenodd"/>
                                    </svg>
                                </span>
                            </div>
                            <p class="text-gray-500 text-sm">{{$post->created_at->diffForHumans()}} <span
                                    class="text-gray-600">🌎</span>
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
                <p class="mt-4 text-gray-800">{{$post->content}}</p>
                @if($post->image)
                    <img src="{{asset($post->image)}}" alt="Post"
                         class="mt-4 rounded-lg w-full">
                @endif
                <!-- Reactions and Action Section -->
                {{--                <div class="flex items-center justify-between mt-4 py-2 border-t border-b">--}}
                <!-- Placeholder for reactions and comments section (commented out for now) -->
                <!--
                <div class="flex items-center space-x-2">
                    <div class="flex -space-x-1">
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-blue-500 text-white text-xs">👍</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-red-500 text-white text-xs">❤️</span>
                        <span class="flex items-center justify-center w-6 h-6 rounded-full bg-yellow-500 text-white text-xs">😮</span>
                    </div>
                    <span class="text-gray-600 text-sm">2.5k</span>
                </div>
                <div class="flex space-x-4 text-gray-500 text-sm">
                    <span>482 comments</span>
                    <span>64 shares</span>
                </div>
                -->
                {{--            </div>--}}
            </div>
        </div>
    </div>
@endforeach
{{$posts->links()}}
