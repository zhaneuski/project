<div class="wrapper">
    <header class="header">
        <div class="container">
            <div class="header__body">
                <a href="?action=show&type=default" class="header__logo">
                    Z.V
                </a>
                <div class="header__burger" id="header__burger">
                    <span></span>
                </div>
                <nav class="header__menu" id="header__menu">
                    <ul class="header__list">
                        <li>
                            <a class="header__link" href="?action=show&type=default">Home<span class="sr-only">(current)</span></a>
                        </li>
                        <li>
                            <a class="header__link" href="?action=show&type=landlordnews">News</a>
                        </li>
                        <li>
                            <a class="header__link" href="?action=show&type=application">Applications</a>
                        </li>
                        <li>
                            <a class="header__link" href="?action=logout&type=auth">Logout</a>
                        </li>
                        <span class="navbar-text">
                            <?= !empty($_SESSION['user']) ? $_SESSION['user']['FIO'] . '(' . $_SESSION['user']['name'] . ')' : '' ?>
                        </span>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</div>



