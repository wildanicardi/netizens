<x-master>
    <section class="px-8">
        <main class="mx-auto">
            <div class="lg:flex lg:justify-between">
                <div class="lg:w-32">
                    @if (auth()->check())
                    @include('_sidebar-links')
                    @endif
                </div>
                <div class="lg:flex-1 lg:mx-10" style="max-width: 700px">
                    {{$slot}}
                </div>
                <div class="lg:w-1/6 bg-blue-100 rounded-lg p-4">
                    @if (auth()->check())
                    @include('_friend-list')
                    @endif
                </div>
            </div>
        </main>
    </section>
</x-master>
