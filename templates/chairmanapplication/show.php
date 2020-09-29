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
                <h2 class="header3"> Actual Applications</h2>
            </div>
        </div>
        <?php
        echo Html::create('ChairmanAppDiv')
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



