<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link<?= $this->data['controllerName'] == "Main" ? " active" : "" ?>" href="?">Home <span
                            class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link<?= $this->data['controllerName'] == "Shownews" ? " active" : "" ?>"
                   href="?type=Shownews&action=show">Просмотр новостей</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="?type=Aut&action=logout">Выйти<?= isset($_SESSION['user']['code']) ? $_SESSION['user']['name'] : "" ?></a>
            </li>
        </ul>
    </div>
</nav>

