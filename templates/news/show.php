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
            if ($pageCount > 1) {
                $pagination = TexLab\Html\Html::pagination();
                echo $pagination
                    ->setClass("pagination")
                    ->setUrlPrefix("?type=$type&action=show")
                    ->setPrevious('Previous')
                    ->setNext('Next')
                    ->setPageCount($pageCount)
                    ->setCurrentPage($currentPage)
                    ->html();
            }
            ?>
        </div>
    </div>
</div>

<!-- Add news form -->

<form action="?action=add&type=<?= $type ?>" id="addForm" class="hidden" method="post" class="add_news_form">
    <div class="addnews_modal">
        <label for="header" class="news_form_lable"> <?= $comments['header'] ?></label>
        <input type="tel" name="header" id="header">
        <label for="newscontent" class="news_form_lable"> <?= $comments['newscontent'] ?></label>
        <textarea name="newscontent" id="newscontent" cols="30" rows="4"></textarea>
        <input class="sendFormButton" type="submit" value="Add news">
        <a id="closeFormButton">Close</a>
    </div>
</form>
<div id="shadow" class="hidden"></div>

