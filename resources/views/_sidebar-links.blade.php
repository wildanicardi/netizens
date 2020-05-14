<ul>
    <li>
        <a
            class="font-bold text-lg mb-4 block"
            href="{{ route('tweets.index') }}"
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


        <li>
            <a
                class="font-bold text-lg mb-4 block"
                href="{{route('profile',current_user()->username) }}"
            >
                Profile
            </a>
        </li>
</ul>
