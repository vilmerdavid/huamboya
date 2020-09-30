<ul>
    
    @auth
        <li id="m_inicio"><a href="{{ route('home') }}">Inicio</a></li>
    @else
        <li id="m_inicio"><a href="{{ url('/') }}">Inicio</a></li>
    @endauth

    <li class="m_gobierno"><a href="#">Gobierno</a>
        <ul>
            <li><a href="#">Ayuntamiento</a></li>
            <li><a href="#">Ayuntamiento de la cuidad</a></li>
            <li><a href="#">Números teléfonicos</a></li>
            <li class="m_gobierno"><a href="{{ route('documentos') }}">Documentos</a></li>
            <li><a href="#">Escribir al alcalde</a></li>
        </ul>
    </li>
    <li><a href="post-list.html">Comunidad</a>
        <ul>
            <li><a href="#">Noticias</a></li>
            <li><a href="#">Avisos</a></li>
            <li><a href="#">Eventos</a></li>
            <li><a href="#">Galería</a></li>
        </ul>
    </li>
    <li><a href="statistics.html">Páginas</a>
        <ul>
            <li><a href="#">Estadísticas</a></li>
            <li><a href="#">Tour Virtual</a></li>
            <li><a href="#">Historía de la cuidad</a></li>
            <li><a href="#">más</a></li>
        </ul>
    </li>
</ul>
