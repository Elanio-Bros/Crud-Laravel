<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{url('/pessoas')}}">Pessoas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{url('/pessoas/categoria')}}">Pessoas Categorias</a>
            </li>
        </ul>
        <div class="btn-group dropleft">
            <button type="button" class="btn btn-secondary" data-toggle="dropdown" aria-expanded="false"><i
                    class="fas fa-bars"></i></button>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#AddPessoa">Adicionar Pessoa</a>
            </div>
        </div>
    </div>
</nav>
