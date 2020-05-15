@unless (current_user()->is($user))
<form action="{{route('follow',$user->username)}}" method="POST">
    @csrf
       <button href="" type="submit" class="bg-blue-500 rounded-full py-2 px-4 text-white text-xs">
           {{current_user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
        </button>
</form>
@endunless

