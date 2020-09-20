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
                <h2 class="header3"> Actual Applications</h2>
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
            echo Html::create("Pagination")
                ->setClass('pagination')
                ->setControllerType($type)
                ->setPageCount($pageCount)
                ->html();
            ?>
        </div>
    </div>
</div>

<!--<a class="btn btn-primary" id="addButton">Добавить заявку</a>-->
<form action="?action=add&type=<?= $type ?>" enctype="multipart/form-data" id="addForm" class="hidden" method="post"
      class="add_news_form">

    <div class="addnews_modal">

        <label for="app_caption" class="news_form_lable"> <?= $comments['caption'] ?></label>
        <input type="tel" name="caption" id="app_caption">

        <label for="app_content" class="news_form_lable"> <?= $comments['content'] ?></label>
        <textarea name="content" id="app_content" cols="30" rows="4"></textarea>

        <label id="label_file" class="news_form_lable" for="file"> <?= $comments['image'] ?></label>
        <input class="file" id="file" type="file" name="image">

        <label class="news_form_lable"> <?= $comments['users_id'] ?></label>
        <?= (new Select())->setName('users_id')->setId('users_id')->setData($usersList)->html() ?>

        <input type="submit" class="sendFormButton" value="add application">
        <a id="closeFormButton">Close</a>

    </div>
</form>
<div id="shadow" class="hidden"></div>





