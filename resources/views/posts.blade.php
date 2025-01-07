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

                    <!-- Three Dots Dropdown -->
                    <div class="relative">
                        <button id="dropdown-button"
                                class="p-2 text-gray-500 hover:text-gray-800 rounded-full focus:outline-none focus:ring-2 focus:ring-gray-300">
                            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z"/>
                            </svg>
                        </button>
                        <div id="dropdown-menu"
                             class="hidden absolute right-0 mt-2 bg-white dark:bg-gray-800 border border-gray-200 dark:border-gray-700 rounded-md shadow-lg w-40">
                            <button onclick="openEditForm()"
                                    class="block w-full text-left px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Edit Post
                            </button>
                            <a href="#"
                               class="block px-4 py-2 text-sm text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-600">
                                Delete Post
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Post Content -->
                <p id="post-content" class="mt-4 text-gray-700 dark:text-gray-300">
                    {{$post->content}}
                </p>
                @if($post->type==='txtImage')
                    <img class="sm:h-[34rem] mt-10 w-full object-contain"
                         src="{{$post->image}}"
                         alt="Featured Image"/>
                @endif
                <!-- Edit Post Form -->
                <div id="edit-form" class="hidden mt-4">
                <textarea id="edit-textarea"
                          class="w-full p-2 border border-gray-300 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white"
                          rows="4">This is the original post content. You can edit this by clicking on the three dots and selecting "Edit Post".</textarea>
                    <div class="mt-2 flex justify-end space-x-2">
                        <button onclick="closeEditForm()"
                                class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400">
                            Cancel
                        </button>
                        <button onclick="saveEdit()"
                                class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                            Save
                        </button>
                    </div>
                </div>

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
    const dropdownButton = document.getElementById("dropdown-button");
    const dropdownMenu = document.getElementById("dropdown-menu");
    const editForm = document.getElementById("edit-form");
    const postContent = document.getElementById("post-content");
    const editTextarea = document.getElementById("edit-textarea");

    // Toggle dropdown menu
    dropdownButton.addEventListener("click", () => {
        dropdownMenu.classList.toggle("hidden");
    });

    // Open the edit form
    function openEditForm() {
        editForm.classList.remove("hidden");
        postContent.classList.add("hidden");
        dropdownMenu.classList.add("hidden"); // Close dropdown
    }

    // Close the edit form
    function closeEditForm() {
        editForm.classList.add("hidden");
        postContent.classList.remove("hidden");
    }
</script>
</body>
</html>
