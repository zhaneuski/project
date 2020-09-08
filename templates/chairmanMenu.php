<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item<?= $controllerType == '' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=default">На главную <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item<?= $controllerType == 'News' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=News">Новости</a>
            </li>
            <li class="nav-item<?= $controllerType == 'chairmanapplication' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=chairmanapplication">Заявки</a>
            </li>
            <li class="nav-item<?= $controllerType == 'group' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=group">Группа пользователей</a>
            </li>
            <li class="nav-item<?= $controllerType == 'users' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=show&type=users">Пользователи</a>
            </li>
            <li class="nav-item<?= $controllerType == 'auth' ? ' active' : '' ?>">
                <a class="nav-link" href="?action=logout&type=auth">Выйти</a>
            </li>
            <span class="navbar-text">
                    <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
            </span>
    </div>
</nav>
