<div>
    @auth
    <form method="post" action="{{ route('logout') }}">
        @csrf
        <button onclick="event.preventDefault(); this.closest('form').submit();">
            ログアウト
        </button>
    </form>
    @endauth
    {{ $slot }}
</div>