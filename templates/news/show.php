<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 */

?>

<div class="news">
    <div class="container" id="news_container">

        <div class="container_header">

            <div class="header_button">
                <h2 class="header3"> Actual news</h2>
                <div class="button_add_news_container">
                    <a class="button_add_news" id="addButton">
                        Add news
                    </a>
                </div>
            </div>

        </div>

        <?php
        echo Html::create('AdminNewsDiv')
            ->setControllerType($type)
            ->data($table)
            ->html();
        ?>

        <div class="pagination_container">
            <?php
            echo Html::create("Pagination")
                ->setClass('pagination')
                ->setControllerType($type)
                ->setPageCount($pageCount)
                ->html();
            ?>
        </div>
    </div>
</div>

<!-- Add news form -->

<form action="?action=add&type=<?= $type ?>" id="addForm" class="hidden" method="post" class="add_news_form">
    <label> <?= $comments['header'] ?>
        <input type="tel" name="header" id="header">
    </label>
    <label> <?= $comments['newscontent'] ?>
        <textarea name="newscontent" id="newscontent" cols="50" rows="10"></textarea>
    </label>
    <input type="submit" value="Отправить">
    <a class="btn btn-primary" id="closeFormButton">Закрыть</a>
</form>
<div id="shadow" class="hidden"></div>

<!-- footer -->

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer_content">
                <div class="footer_logo"><a href="?action=show&type=default">Z.V</a></div>
            </div>

            <div class="footer_content">
                <div class="footer_img">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>

                <h4 class="footer_header">mail</h4>

                <div class="footer_item">
                    klibariy@mail.ru
                </div>
            </div>

            <div class="footer_content">

                <div class="footer_img">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <h4 class="footer_header">call</h4>
                <div class="footer_item">
                    +123456789
                </div>
            </div>

            <div class="footer_content">
                <div class="footer_img">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <h4 class="footer_header">find us</h4>
                <div class="footer_item">
                    Vitebsk, Republic of Belarus
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://use.fontawesome.com/191ec19d10.js"></script>
