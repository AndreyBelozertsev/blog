<nav class="navbar">
    <div class="container">
        <div class="navbar__wrap">
            <div class="flex items-center">
                <a class="logo" href="{{ route('home') }}" rel="home">
                    Александр Жук
                </a>
            </div>
            <div class="menu" id="menu">
                <ul>
                    @forelse ($menu->all() as $item)
                        <li><a href="{{ $item->link() }}" class="@if($item->isActive()) menu_active @endif"> {{ $item->label()  }}</a></li>
                    @empty
                    @endforelse
                    @if (auth()->check())
                        <li>
                            <a href="{{ route('admin.dashboard') }}">В админ панель</a>
                        </li>
                        <li>
                            <form action="{{ route('logOut') }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Выйти</button>
                            </form>
                        </li>
                    @endif
                </ul>
            </div>
            <div class="hamb">
                <div class="hamb__field" id="hamb">
                    <span class="bar"></span>
                    <span class="bar"></span>
                    <span class="bar"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="popup" id="popup"></div>
</nav>
