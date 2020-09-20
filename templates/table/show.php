<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 */



echo Html::create('TableEdited')
    ->setControllerType($type)
    ->setHeaders($comments)
    ->data($table)
    ->setClass('table')
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

<?php
switch ($_SESSION['user']['cod']) {
    case 'admin':
        $form = Html::create('Form')
            ->setMethod('POST')
            ->setAction("?action=add&type=$type")
            ->setClass('form');

        foreach ($fields as $field) {
            if ($field == "adress") {
                $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
                $form->addContent(Html::create('textarea')->setName($field)->setId($field)->html());
            } else {
                $form->addContent(Html::create('Label')->setFor($field)->setInnerText($comments[$field])->html());
                $form->addContent(Html::create('input')->setName($field)->setId($field)->html());
            }
        }

        $form->addContent(
            Html::create('Input')
                ->setType('submit')
                ->setValue('OK')
                ->html()
        );

        echo $form->html();
        break;
}

