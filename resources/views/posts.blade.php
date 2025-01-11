<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Post Example</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">

@foreach($posts as $post)
    <div class="max-w-2xl mx-auto px-4 mt-8">
        <!-- Single Post -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
            <div class="p-4">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <img src="{{$post->user->image}}" alt="User"
                             class="w-12 h-12 rounded-full object-cover">
                        <div>
                            <h3 class="font-semibold text-gray-900 dark:text-white">
                                {{$post->user->fName}} {{$post->user->lName}}
                            </h3>
                            <p class="text-sm text-gray-500 dark:text-gray-400">{{ $post->created_at->diffForHumans() }}</p>
                        </div>
                    </div>

                    <!-- Dropdown Menu -->
                    <div class="relative">
                        <button id="dropdown-button-{{$post->id}}"
                                class="p-2 text-gray-500 hover:text-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                            </svg>
                        </button>
                        <div id="dropdown-menu-{{$post->id}}"
                             class="hidden absolute right-0 mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg w-40">
                            <button onclick="openEditForm({{$post->id}})"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Edit Post
                            </button>
                            <button form="delete-form-{{$post->id}}"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Delete Post
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Post Content -->
                <p id="post-content-{{$post->id}}" class="mt-4 text-gray-700 dark:text-gray-300">
                    {{$post->content}}
                </p>
                @if($post->type==='txtImage')
                    <img class="sm:h-[34rem] mt-10 w-full object-contain"
                         src="{{$post->image}}"
                         alt="Featured Image"/>
                @endif

                <!-- Edit Post Form -->
                <form action="/edit/{{$post->id}}" method="POST" id="edit-form-{{$post->id}}" class="hidden mt-4">
                    @csrf
                    @method('PATCH')
                    <textarea name="content"
                              class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                              rows="4">{{$post->content}}</textarea>
                    <div class="mt-2 flex justify-end space-x-2">
                        <button type="button" onclick="closeEditForm({{$post->id}})"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400">
                            Cancel
                        </button>
                        <button type="submit"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </form>

                <form action="/delete/{{$post->id}}" method="POST" id="delete-form-{{$post->id}}" hidden>
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        </div>
    </div>
@endforeach

<div class="mt-8">
    <div class="max-w-2xl mx-auto px-4">
        {{$posts->links()}}
    </div>
</div>

<script>
    function toggleDropdown(postId) {
        const dropdownMenu = document.getElementById(`dropdown-menu-${postId}`);
        dropdownMenu.classList.toggle("hidden");
    }

    function openEditForm(postId) {
        document.getElementById(`edit-form-${postId}`).classList.remove("hidden");
        document.getElementById(`post-content-${postId}`).classList.add("hidden");
        document.getElementById(`dropdown-menu-${postId}`).classList.add("hidden");
    }

    function closeEditForm(postId) {
        document.getElementById(`edit-form-${postId}`).classList.add("hidden");
        document.getElementById(`post-content-${postId}`).classList.remove("hidden");
    }

    // Event Listener for Dropdown Buttons
    @foreach($posts as $post)
    document.getElementById(`dropdown-button-{{$post->id}}`).addEventListener("click", () => toggleDropdown({{$post->id}}));
    @endforeach
</script>
</body>
</html>
