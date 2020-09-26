<?php

use View\Html\Html;

/** @var int $pageCount Количество страниц
 * @var array $fields Список полей таблицы
 * @var array $comments Комментарии к полям таблицы
 * @var string $type Имя контроллера
 * @var int $currentPage
 */
?>

<div class="news">
    <div class="container" id="news_container">

        <div class="container_header">

            <div class="header_button">
                <h2 class="header3"> Groups</h2>
            </div>

        </div>
        <div class="table_container">

            <?php
            echo Html::create('TableEdited')
                ->setControllerType($type)
                ->setHeaders($comments)
                ->data($table)
                ->setClass('table')
                ->html();
            ?>
        </div>

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
        <div class="user_addForm_container">
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
                            ->setValue('Add group')
                            ->html()
                    );
                    echo $form->html();
                    break;
            }
            ?>
        </div>
    </div>
</div>

