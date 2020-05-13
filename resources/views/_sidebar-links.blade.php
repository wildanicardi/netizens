<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('home') }}"
        >
            Home
        </a>
    </li>

    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Explore
        </a>
    </li>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Notifications
        </a>
    </li>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Messages
        </a>
    </li>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Bookmarks
        </a>
    </li>
    </li>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="/explore"
        >
            Lists
        </a>
    </li>

    {{-- @auth
        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="{{ current_user()->path() }}"
            >
                Profile
            </a>
        </li>

        <li>
            <form method="POST" action="/logout">
                @csrf

                <button class="font-bold text-lg">Logout</button>
            </form>
        </li>
    @endauth --}}
</ul>
