<style>
    #sidebar {
    position: fixed;
    top: 0;
    left: 0;
    height: 100%;
    width: 200px; 
    padding: 2rem;
    overflow-y: auto;
    z-index: 1;
    overflow: visible;
    font-size: 1.2em;
    padding: 10px 0;
}

.navbar {
    background-color: #343a40;
}
.nav-link {
    margin-top: 10px; 
}

.nav-item {
    margin-bottom: 15px; 
}

.navbar-nav .nav-link {
    text-align: left;
}

.dropdown-menu {
    z-index: 1050;
    background-color: #121212;
}

.dropdown-item {
    color: white; 
}
.dropdown-menu {
    position: absolute;
    width: 250px; 
    left: 0; 
    z-index: 1050;
}

</style>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark flex-column" id="sidebar">
    <a class="navbar-brand" id="Chronos" href="home.php">Chronos</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav flex-column">
            <li class="nav-item active">
                <a class="nav-link" href="/home.php">Home</a>
            </li>

            <li class="nav-item dropdown active" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Livros</a>
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/views/livros/cadastrar.php">Cadastrar Livros</a>
                    <a class="dropdown-item" href="/views/livros/visualizar.php">Livros</a>
              </div>
            </li>

            <li class="nav-item dropdown active" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Usuários</a>
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/views/usuarios/cadastrar.php">Cadastrar Usuários</a>
                    <a class="dropdown-item" href="/views/usuarios/visualizar.php">Usuários</a>
              </div>
            </li>

            <li class="nav-item dropdown active" >
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Emprestimos</a>
                <div class="dropdown-menu dropdown-menu-right"  aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/views/emprestimos/cadastrar.php">Emprestar um livro</a>
                    <a class="dropdown-item" href="/views/emprestimos/visualizar.php">Livros Emprestados</a>
              </div>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="#" id="change-background">Mudar Fundo</a>
            </li>

            <li class="nav-item active">
                <a class="nav-link" href="/index.php">Sair</a>
            </li>



        </ul>
    </div>
</nav>
