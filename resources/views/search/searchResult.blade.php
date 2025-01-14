<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Users Search</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900">
<div class="max-w-2xl mx-auto p-4">
    <div class="relative mb-6">
        <form action="/search" method="GET">
            <input type="search" name="searchContent"
                   class="w-full bg-gray-800 text-gray-100 rounded-lg pl-10 pr-4 py-3 border border-gray-700 focus:border-blue-500 focus:ring-1 focus:ring-blue-500 focus:outline-none"
                   placeholder="Search users...">
            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                          d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                          clip-rule="evenodd"/>
                </svg>
            </div>
        </form>
    </div>

    <ul role="list" class="divide-y divide-gray-800 bg-gray-800 rounded-xl shadow-xl">
        @foreach($users as $user)
            <li class="flex justify-between gap-x-6 p-4 hover:bg-gray-700 transition duration-150 cursor-pointer">
                <div class="flex min-w-0 gap-x-4">
                    <img class="h-12 w-12 flex-none rounded-full bg-gray-800 ring-2 ring-gray-700"
                         src="{{$user->image}}"
                         alt="">
                    <div class="min-w-0 flex-auto">
                        <a href="/userprofile/{{$user->id}}"
                           class="text-sm font-semibold text-gray-100">{{$user->fName}} {{$user->lName}}</a>
                        <p class="mt-1 truncate text-xs text-gray-400">@leslie.alexander</p>
                    </div>
                </div>
                <div class="shrink-0 flex flex-col items-end">
                    <p class="text-sm text-gray-300">Co-Founder / CEO</p>
                    <div class="mt-1 flex items-center gap-x-1.5">
                        <div class="flex-none rounded-full bg-emerald-500/20 p-1">
                            <div class="h-1.5 w-1.5 rounded-full bg-emerald-500"></div>
                        </div>
                        <p class="text-xs text-emerald-400">Online</p>
                    </div>
                </div>
            </li>
        @endforeach

    </ul>
</div>
</body>
</html>
