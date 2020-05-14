<div class="border border-gray-300 rounded-lg">
    @forelse ($tweets as $tweet)
    @include('tweets')
    @empty
    <p class="p-4">No Tweets Yet!</p>
    @endforelse
</div>
