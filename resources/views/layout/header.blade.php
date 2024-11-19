<nav class="navbar navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('index')}}">
            <img src="{{ asset('imagemdoprojeto.png') }}" alt="Logo Quinta do Ypuã">
        </a>
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Procure aqui dados dos seus horários"
                aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">
                <img src="{{ asset('procurar.png') }}" alt="Pesquisar" style="height: 24px;">
            </button>
        </form>
    </div>
</nav>