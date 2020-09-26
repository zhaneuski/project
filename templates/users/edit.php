<?php

use View\Html\Html;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 * @var array $groupNames
 */
?>
<div class="user_addForm_container user_editForm_container">

    <?php
    $form = Html::create('Form')
        ->setMethod('POST')
        ->setAction("?action=edit&type=$type")
        ->setClass('form');

    foreach ($fields as $name => $value) {
        $form->addContent(Html::create('Label')->setFor($name)->setInnerText($comments[$name])->html());
        if ($name != 'group_id') {
            $form->addContent(Html::create('input')->setName($name)->setId($name)->setValue($value)->html());
        } else {
            $form->addContent('<br>');

            $form->addContent((new \TexLab\Html\Select())->setName($name)->setId($name)->setSelectedValues([$value])->setData($groupNames)->html());
            $form->addContent('<br>');
        }
    }

    echo $form->addContent(Html::create('Input')->setType('hidden')->setName('id')->setValue($id)->html())
        ->addContent(Html::create('Input')->setType('submit')->setValue('Edit')->html())
        ->html();
    ?>

</div>
