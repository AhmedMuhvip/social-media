<div class="flex items-end space-x-6">
    <div class="-mt-24 relative">
        <img src="{{ asset($user->image) }}" alt="Profile"
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
        <h1 class="text-3xl font-bold">{{$user->fName}} {{$user->lName}}</h1>
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
            Send Friends Request
        </button>
        <button
            class="bg-gray-100 text-gray-700 px-6 py-2 rounded-lg hover:bg-gray-200 transition duration-200">
            Share Profile
        </button>
    </div>
</div>
