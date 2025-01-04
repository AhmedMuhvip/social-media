<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>My Profile</title>
</head>
<body class="bg-gray-900 text-gray-300 p-6">
<nav class="flex" aria-label="Breadcrumb">
    <ol class="inline-flex items-center space-x-1 md:space-x-2 rtl:space-x-reverse">
        <li class="inline-flex items-center">
            <a href="/"
               class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-blue-600 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-3 h-3 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                     viewBox="0 0 20 20">
                    <path
                        d="m19.707 9.293-2-2-7-7a1 1 0 0 0-1.414 0l-7 7-2 2a1 1 0 0 0 1.414 1.414L2 10.414V18a2 2 0 0 0 2 2h3a1 1 0 0 0 1-1v-4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v4a1 1 0 0 0 1 1h3a2 2 0 0 0 2-2v-7.586l.293.293a1 1 0 0 0 1.414-1.414Z"/>
                </svg>
                Home
            </a>
        </li>
        <li>
            <div class="flex items-center">
                <svg class="rtl:rotate-180 w-3 h-3 text-gray-400 mx-1" aria-hidden="true"
                     xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="m1 9 4-4-4-4"/>
                </svg>
                <a href="/profile"
                   class="ms-1 text-sm font-medium text-gray-700 hover:text-blue-600 md:ms-2 dark:text-gray-400 dark:hover:text-white">My
                    Profile</a>
            </div>
        </li>
    </ol>
</nav>

<div class="min-h-screen bg-gray-900 py-10 px-5 text-white">
    <div class="max-w-6xl mx-auto bg-gray-800 p-8 rounded-xl shadow-lg">
        <!-- Profile Header with Avatar and Edit Button -->
        <div class="flex items-center justify-between">
            <div class="flex items-center space-x-6">
                <div class="relative">
                    <img src="{{$user->image}}" alt="User Avatar"
                         class="w-24 h-24 rounded-full border-4 border-indigo-500">
                </div>
                <div>
                    <h1 class="text-4xl font-semibold text-white mb-3">{{$user->fName}} {{$user->lName}}</h1>
                    <p class="text-lg text-white">{{$user->email}}</p>
                </div>
            </div>
            <!-- Edit Profile Button -->
            <button type="button" data-modal-target="editProfileModal" data-modal-toggle="editProfileModal"
                    class="bg-indigo-500 hover:bg-indigo-600 text-white font-medium py-2 px-6 rounded-full shadow-lg transition-transform transform hover:scale-105">
                Edit Profile
            </button>
        </div>

        <!-- Modal -->
        <div id="editProfileModal" tabindex="-1" aria-hidden="true"
             class="fixed inset-0 z-50 hidden bg-black bg-opacity-50 flex items-center justify-center">
            <div class="bg-gray-800 rounded-lg shadow-lg w-full max-w-lg p-6">
                <!-- Modal Header -->
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-semibold text-white">Edit Profile</h3>
                    <!-- Close Button (SVG) -->
                    <button id="closeModalButton" class="text-gray-400 hover:text-white">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                <!-- Modal Body -->
                <form action="/profile-edit" method="POST">
                    @csrf
                    @method('PATCH')
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-300">First Name</label>
                        <input type="text" id="name" name="fName" value="{{$user->fName}}"
                               class="w-full bg-gray-700 text-white rounded-lg p-2.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-300">Last Name</label>
                        <input type="text" id="name" name="lName" value="{{$user->lName}}"
                               class="w-full bg-gray-700 text-white rounded-lg p-2.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-300">Email</label>
                        <input type="email" id="email" name="email" value="{{$user->email}}"
                               class="w-full bg-gray-700 text-white rounded-lg p-2.5 mt-1 focus:ring-indigo-500 focus:border-indigo-500">
                    </div>
                    <div class="flex justify-end space-x-4">
                        <!-- Save Button -->
                        <button type="submit"
                                class="bg-blue-500 hover:bg-blue-600 text-white font-medium py-2 px-4 rounded-lg">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @foreach($posts as $post)
        <div>
            <article>
                <img class="sm:h-[34rem] mt-10 w-full object-contain"
                     src="{{$post->image}}"
                     alt="Featured Image"/>
                <div
                    class="mx-auto mt-10 max-w-screen-md space-y-12 px-4 py-10 font-serif text-lg tracking-wide text-white">
                    {{$post->content}}
                </div>
            </article>


            <div class="w-fit mx-auto mt-10 flex space-x-2">
                <div class="h-0.5 w-2 bg-gray-600"></div>
                <div class="h-0.5 w-32 bg-gray-600"></div>
                <div class="h-0.5 w-2 bg-gray-600"></div>
            </div>
        </div>
    @endforeach
</div>
{{$posts->links()}}

<script>
    // Toggle Modal Visibility
    document.querySelectorAll('[data-modal-toggle]').forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.getElementById(button.getAttribute('data-modal-target'));
            modal.classList.toggle('hidden');
        });
    });

    // Close Modal on Close Button Click
    const closeModalButton = document.getElementById('closeModalButton');
    const modal = document.getElementById('editProfileModal');

    closeModalButton.addEventListener('click', () => {
        modal.classList.add('hidden');
    });
</script>

</body>
</html>
