<div class="border border-blue-400 rounded-lg px-8 py-6 mb-8">
    <form action="{{route('tweets.store')}}" method="POST">
        @csrf
        <textarea name="body" id="" class="w-full" placeholder="Write Your Mind"></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{current_user()->avatar}}" alt="your avatar" class="rounded-full mr-2" width="50" height="50">
            <button type="submit" class="bg-blue-500 hover:bg-blue-600 rounded-lg shadow px-10 text-sm text-white h-10">Tweet Dong!!
            </button>
        </footer>
    </form>
    @error('body')
    <p class="text-sm text-red-500 mt-2"> {{$message}}</p>
    @enderror
</div>
