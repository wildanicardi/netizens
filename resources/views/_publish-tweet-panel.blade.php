<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="{{route('tweets.store')}}" method="POST">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="Write Your Mind"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <img src="{{auth()->user()->avatar}}" alt="your avatar" class="rounded-full mr-2">
            <button type="submit" class="bg-blue-500 rounded-lg shadow py-4 px-2 text-white">Tweet Dong!!
            </button>
        </footer>
    </form>
    @error('body')
    <p class="text-sm text-red-500 mt-2"> {{$message}}</p>
    @enderror
</div>
