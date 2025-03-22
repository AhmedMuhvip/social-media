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
                <div class="p-6 bg-white rounded-lg shadow-md">
                    <!-- Action Buttons -->
                    <div class="flex items-center justify-between mt-4">
                        <a href="/post/{{$post->id}}/like"
                           class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M14 10h4.764a2 2 0 011.789 2.894l-3.5 7A2 2 0 0115.263 21h-4.017c-.163 0-.326-.02-.485-.06L7 20m7-10V5a2 2 0 00-2-2h-.095c-.5 0-.905.405-.905.905 0 .714-.211 1.412-.608 2.006L7 11v9m7-10h-2M7 20H5a2 2 0 01-2-2v-6a2 2 0 012-2h2.5"/>
                            </svg>
                            <span>Like</span>
                        </a>
                        <!-- Display Like count -->
                        <span class="text-gray-600 ml-2">{{$post->likes_count}} Likes</span>
                        <button
                            class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                            </svg>
                            <span>Comment</span>
                        </button>
                        <button
                            class="flex items-center space-x-2 text-gray-600 hover:bg-gray-100 px-4 py-2 rounded-lg transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                 stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"/>
                            </svg>
                            <span>Share</span>
                        </button>
                    </div>

                    <!-- Comments Section -->
                    @foreach($post->comments as $comment)
                        <div class="mt-6 space-y-4">
                            <div class="flex space-x-3">
                                <img src="{{asset($comment->user->image)}}" alt="Commenter"
                                     class="w-8 h-8 rounded-full">
                                <div>
                                    <div class="bg-gray-100 rounded-2xl px-4 py-2">
                                        <p class="font-medium">{{$comment->user->fName}} {{$comment->user->lName}}</p>
                                        <p class="text-gray-600">{{$comment->comment}} 🔥</p>
                                    </div>
                                    <div class="flex items-center space-x-4 mt-1 text-sm text-gray-500">
                                        <button class="hover:text-gray-700">Like</button>
                                        <button class="hover:text-gray-700">Reply</button>
                                        <span>{{$comment->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                <div class="relative">
                                    <button class="dropdown-button p-1 hover:bg-gray-100 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500"
                                             viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                                        </svg>
                                    </button>

                                    <div
                                        class="dropdown-menu hidden absolute right-0 mt-1 w-36 bg-white rounded-md shadow-lg border border-gray-200">
                                        <button
                                            class="edit-button w-full flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                            Edit
                                        </button>
                                        <button
                                            class="delete-button w-full flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                                 viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                            Delete
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                    <!-- Comment Input -->
                    <div class="flex space-x-3">
                        <img src="{{asset(Auth::user()->image)}}" alt="User" class="w-8 h-8 rounded-full">
                        <div class="flex-1 relative">
                            <form action="/post/{{$post->id}}/comment" method="POST">
                                @csrf
                                <input type="text" name="comment" placeholder="Write a comment..."
                                       class="w-full bg-gray-100 rounded-full py-2 px-4 focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <div class="absolute right-3 top-2 flex space-x-2">
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                        </svg>
                                    </button>
                                    <button class="text-gray-500 hover:text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                             viewBox="0 0 24 24"
                                             stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  stroke-width="2"
                                                  d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 16m-6-6a2 2 0 112.828-2.828A2 2 0 0114 8z"/>
                                        </svg>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endforeach
{{$posts->links()}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Close all dropdowns when clicking outside
        document.addEventListener('click', (e) => {
            if (!e.target.closest('.dropdown-button')) {
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    menu.classList.add('hidden');
                });
            }
        });

        // Toggle dropdown
        document.addEventListener('click', (e) => {
            const dropdownButton = e.target.closest('.dropdown-button');
            if (dropdownButton) {
                e.stopPropagation();
                const dropdownMenu = dropdownButton.nextElementSibling;

                // Close all other dropdowns
                document.querySelectorAll('.dropdown-menu').forEach(menu => {
                    if (menu !== dropdownMenu) {
                        menu.classList.add('hidden');
                    }
                });

                // Toggle current dropdown
                dropdownMenu.classList.toggle('hidden');
            }
        });

        // Handle edit button clicks
        document.addEventListener('click', (e) => {
            const editButton = e.target.closest('.edit-button');
            if (editButton) {
                const dropdownMenu = editButton.closest('.dropdown-menu');
                const commentContainer = editButton.closest('.comment-container');

                dropdownMenu.classList.add('hidden');
                // Add your edit logic here
                console.log('Edit clicked');
            }
        });

        // Handle delete button clicks
        document.addEventListener('click', (e) => {
            const deleteButton = e.target.closest('.delete-button');
            if (deleteButton) {
                if (confirm('Are you sure you want to delete this comment?')) {
                    // Add your delete logic here
                    console.log('Delete clicked');
                }
                const dropdownMenu = deleteButton.closest('.dropdown-menu');
                dropdownMenu.classList.add('hidden');
            }
        });
    });
</script>
