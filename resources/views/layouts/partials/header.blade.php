<header>
    <h1>Coders free</h1>
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{Request()->routeIs('home') ? 'active' :''}}">Home</a>
                {{-- @dump(Request()->routeIs('home')) --}}
            </li>
            <li><a href="{{route('cursos.index')}}" class="{{Request()->routeIs('cursos.*') ? 'active' :''}}">Cursos</a>
            </li>
            <li><a href="{{route('nosotros')}}" class="{{Request()->routeIs('nosotros') ? 'active' :''}}">Nosotros</a>
            </li>
            <li><a href="{{route('contactanos.index')}}" class="{{Request()->routeIs('contactanos.index') ? 'active' :''}}">Contactanos</a>
            </li>
        </ul>
    </nav>
</header>