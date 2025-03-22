<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto p-4">
    <div class="mt-6 space-y-4">
        <div class="flex space-x-3">
            <img src="https://via.placeholder.com/32" alt="Commenter" class="w-8 h-8 rounded-full">
            <div class="flex-1">
                <div class="flex justify-between items-start">
                    <div class="bg-gray-100 rounded-2xl px-4 py-2">
                        <p class="font-medium">John Doe</p>
                        <p id="commentText" class="text-gray-600">This is a sample comment 🔥</p>

                        <!-- Edit Form (Hidden by default) -->
                        <form id="editForm" class="hidden mt-2">
                            <textarea id="editTextarea" class="w-full p-2 border rounded-lg resize-none" rows="2">This is a sample comment 🔥</textarea>
                            <div class="mt-2 space-x-2">
                                <button type="submit"
                                        class="px-3 py-1 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                    Save
                                </button>
                                <button type="button" id="cancelEdit"
                                        class="px-3 py-1 bg-gray-300 rounded-md hover:bg-gray-400">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Dropdown Menu -->
                    <div class="relative">
                        <button id="dropdownButton" class="p-1 hover:bg-gray-100 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-500" viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M10 6a2 2 0 110-4 2 2 0 010 4zM10 12a2 2 0 110-4 2 2 0 010 4zM10 18a2 2 0 110-4 2 2 0 010 4z"/>
                            </svg>
                        </button>

                        <div id="dropdownMenu"
                             class="hidden absolute right-0 mt-1 w-36 bg-white rounded-md shadow-lg border border-gray-200">
                            <button id="editButton"
                                    class="w-full flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-2" fill="none"
                                     viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                </svg>
                                Edit
                            </button>
                            <button id="deleteButton"
                                    class="w-full flex items-center px-4 py-2 text-sm text-red-600 hover:bg-gray-100">
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
                <div class="flex items-center space-x-4 mt-1 text-sm text-gray-500">
                    <button class="hover:text-gray-700">Like</button>
                    <button class="hover:text-gray-700">Reply</button>
                    <span>2 hours ago</span>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    const dropdownButton = document.getElementById('dropdownButton');
    const dropdownMenu = document.getElementById('dropdownMenu');
    const editButton = document.getElementById('editButton');
    const deleteButton = document.getElementById('deleteButton');
    const editForm = document.getElementById('editForm');
    const commentText = document.getElementById('commentText');
    const cancelEditButton = document.getElementById('cancelEdit');
    const editTextarea = document.getElementById('editTextarea');

    // Close dropdown when clicking outside
    document.addEventListener('click', (e) => {
        if (!dropdownButton.contains(e.target)) {
            dropdownMenu.classList.add('hidden');
        }
    });

    // Toggle dropdown
    dropdownButton.addEventListener('click', (e) => {
        e.stopPropagation();
        dropdownMenu.classList.toggle('hidden');
    });

    // Edit button click
    editButton.addEventListener('click', () => {
        dropdownMenu.classList.add('hidden');
        commentText.classList.add('hidden');
        editForm.classList.remove('hidden');
        editTextarea.value = commentText.textContent;
    });

    // Cancel edit
    cancelEditButton.addEventListener('click', () => {
        editForm.classList.add('hidden');
        commentText.classList.remove('hidden');
    });

    // Handle edit form submission
    editForm.addEventListener('submit', (e) => {
        e.preventDefault();
        commentText.textContent = editTextarea.value;
        editForm.classList.add('hidden');
        commentText.classList.remove('hidden');
    });

    // Delete button click
    deleteButton.addEventListener('click', () => {
        if (confirm('Are you sure you want to delete this comment?')) {
            // Add your delete logic here
            console.log('Comment deleted');
        }
        dropdownMenu.classList.add('hidden');
    });
</script>
</body>
</html>
