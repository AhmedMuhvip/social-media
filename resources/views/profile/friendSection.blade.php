<div class="bg-white rounded-xl shadow-sm p-6">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Friends</h2>
        <a href="/friends" class="text-blue-600 text-sm hover:underline">See All Friends</a>
    </div>
    <div class="grid grid-cols-3 gap-3">
        @foreach($friends as $friend)
            <div class="space-y-2">
                <img src="{{asset($friend->friend->image)}}" alt="Friend"
                     class="w-full h-20 object-cover rounded-lg">
                <p class="text-sm font-medium truncate">{{$friend->friend->fName}} {{$friend->friend->lName}}</p>
            </div>
        @endforeach
    </div>
</div>
