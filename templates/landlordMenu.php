    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                    <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item<?= $controllerType == 'Landlordnews' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=show&type=landlordnews">News</a>
                </li>
                <li class="nav-item<?= $controllerType == 'landlordapplication' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=show&type=landlordapplication">Applications</a>
                </li>
                <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                    <a class="nav-link" href="?action=logout&type=auth">Logout</a>
                </li>
                <span class="navbar-text">
                    <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
                </span>
        </div>
    </nav>
