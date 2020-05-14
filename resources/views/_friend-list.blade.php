<h3 class="text-xl font-bold mb-4">Friend</h3>

<ul>
    @forelse (current_user()->follows as $user)
    <li class="mb-4">
        <div>
            <a href="{{route('profile',$user->name)}}" class="flex items-center text-sm">
                <img src="{{$user->avatar}}" alt="" class="rounded-full mr-2" width="40" height="40">
                {{$user->name}}
            </a>
        </div>
    </li>
    @empty
        <li>No Friends Yet</li>
    @endforelse
</ul>
