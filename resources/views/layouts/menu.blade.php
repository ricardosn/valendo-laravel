<li class="nav-heading ">
    <span data-localize="sidebar.heading.HEADER">Main Navigation</span>
</li>
<li class=" ">
    <a href="#cadastros" title="Cadastros" data-toggle="collapse">
    <em class="icon-note"></em>
    <span>Cadastros</span>
    </a>
    <ul class="sidebar-nav sidebar-subnav collapse" id="cadastros">
    <li class="sidebar-subnav-header">Cadastros</li>
    <li class=" ">
        <a href="{{ url('/authors') }}" title="Autor">
            <span>Autor</span>
        </a>
    </li>
    <li class=" ">
        <a href="{{ url('/books') }}" title="Livro">
            <span>Livro</span>
        </a>
    </li>
    <li class=" ">
        <a href="{{ url('/genders') }}" title="Gênero">
            <span>Gênero</span>
        </a>
    </li>
    <li class=" ">
        <a href="{{ url('/publishers') }}" title="Editora">
            <span>Editora</span>
        </a>
    </li>
    <li class=" ">
        <a href="{{ url('/tags') }}" title="Tag">
            <span>Tag</span>
        </a>
    </li>
    </ul>
</li>
