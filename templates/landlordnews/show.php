<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 * @var int $currentPage
 */


?>

<div class="news">
    <div class="container" id="news_container">

        <div class="container_header">

            <div class="header_button">
                <h2 class="header3"> Actual news</h2>
<!--                <div class="button_add_news_container">-->
<!--                    <a class="button_add_news" id="addButton">-->
<!--                        Add news-->
<!--                    </a>-->
<!--                </div>-->
            </div>

        </div>

        <?php
        echo Html::create('LandlordNewsDiv')
//            ->setControllerType($type)
            ->data($table)
            ->html();
        ?>

        <div class="pagination_container">
            <?php
            if ($pageCount > 1) {
                $pagination = TexLab\Html\Html::pagination();

                echo $pagination
                    ->setClass("pagination")
                    ->setUrlPrefix("?type=$type&action=show")
                    ->setPrevious('Previous')
//                    ->setFirst('First')
//                    ->setLast('Last')
                    ->setNext('Next')
                    ->setPageCount($pageCount)
                    ->setCurrentPage($currentPage)
                    ->html();
            }
            ?>
        </div>
    </div>
</div>

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
