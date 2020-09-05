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
 */

foreach ($table as &$row) {
    $ext = pathinfo($row['image'], PATHINFO_EXTENSION);
    $row['image'] = "<img src='images/application/$row[id].$ext' class='img'>";
}

echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
    ->html();

echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();
?>

<a class="btn btn-primary" id="addButton">Добавить заявку</a>
<form action="?action=add&type=<?= $type ?>" method="post" enctype="multipart/form-data" id="addForm" class="hidden">
    <label> <?= $comments['caption'] ?>
        <input type="tel" name="caption">
    </label>
    <label> <?= $comments['content'] ?>
        <textarea name="content" cols="50" rows="10"></textarea>
    </label>
    <label> <?= $comments['image'] ?>
        <input type="file" name="image">
    </label>
    <input type="hidden" name="users_id" value="<?= $user_id ?>">
    <input type="submit" value="Отправить">
    <a class="btn btn-primary" id="closeFormButton">Закрыть</a>
</form>
<div id="shadow" class="hidden" ></div>
