<h3 class="text-xl font-bold mb-4">Friend</h3>

<ul>
    @foreach (auth()->user()->follows as $user)
    <li class="mb-4">
        <div class="flex items-center text-sm">
            <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2">
            {{$user->name}}
        </div>
    </li>
    @endforeach
</ul>
