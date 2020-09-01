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

unset($comments["id"]);

echo TexLab\Html\Html::table()
    ->setData($table)
    ->setHeaders($comments)
    ->setClass('table table-striped table-dark')
    ->addCalculatedColumn(
        fn($row) => "<a href='?action=del&type=$this->type&id=$row[id]'>❌</a>",
        fn($row) => "<a href='?action=showedit&type=$this->type&id=$row[id]'>✏</a>"
    )
    ->removeColumns(["id"])
    ->html();

echo Html::create("Pagination")
    ->setClass('pagination')
    ->setControllerType($type)
    ->setPageCount($pageCount)
    ->html();
?>

<a class="btn btn-primary" id="addButton">Добавить заявку</a>
<form action="?action=add&type=<?= $type ?>" id="addForm" class="hidden" method="post" class="guestbookform">
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