<x-master>
<div class="container mx-auto flex justify-center">
    <x-panel>
        <x-slot name="heading">Login</x-slot>
        <form class="w-full max-w-sm " action="{{route('login')}}" method="POST">
            @csrf
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-full-name">
                  Email
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="border border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" name="email" type="text">
              </div>
            </div>
            <div class="md:flex md:items-center mb-6">
              <div class="md:w-1/3">
                <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4" for="inline-username">
                  Password
                </label>
              </div>
              <div class="md:w-2/3">
                <input class="border appearance-none border-2 border-gray-400 rounded w-full py-2 px-4 text-gray-700 leading-tight focus:outline-none focus:bg-white focus:border-purple-500" id="inline-username" name="password" type="password" placeholder="******************">
              </div>
            </div>
            <div class="md:flex md:items-center">
              <div class="md:w-1/3"></div>
              <div class="md:w-2/3">
                <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded" type="submit">
                 Login
                </button>
              </div>
            </div>
        </form>
    </x-panel>

</div>
</x-master>
