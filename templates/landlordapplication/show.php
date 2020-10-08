<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var array $usersList список пользователей
 * @var array $table
 * @var int $user_id
 * @var int $currentPage
 */

foreach ($table as &$row) {
$ext = pathinfo($row['image'], PATHINFO_EXTENSION);
$row['image'] = "<img src='images/application/$row[id].$ext' class='img'>";
}
unset($comments["id"]);
?>

<div class="news">
    <div class="container" id="news_container">
        <div class="container_header">
            <div class="header_button">
                <h2 class="header3"> My Applications</h2>
                <div class="button_add_news_container">
                    <a class="button_add_news" id="addButton">
                        Add application
                    </a>
                </div>
            </div>
        </div>
        <?php
        echo Html::create('AdminAppDiv')
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

<form action="?action=add&type=<?= $type ?>" enctype="multipart/form-data" id="addForm" class="hidden" method="post"
      class="add_news_form">
    <div class="addnews_modal">
        <label for="app_caption" class="news_form_lable"> <?= $comments['caption'] ?></label>
        <input type="tel" name="caption" id="app_caption">
        <label for="app_content" class="news_form_lable"> <?= $comments['content'] ?></label>
        <textarea name="content" id="app_content" cols="30" rows="4"></textarea>
        <label id="label_file" class="news_form_lable" for="file"> <?= $comments['image'] ?></label>
        <input class="file" id="file" type="file" name="image">
        <input type="hidden" name="users_id" value="<?= $user_id ?>">
        <input type="submit" class="sendFormButton" value="add application">
        <a id="closeFormButton">Close</a>
    </div>
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