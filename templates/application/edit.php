<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var int $id
 * @var string $type
 * @var array $fields
 * @var array $comments
 *  @var array $usersList
 */

?>
<div class="edit_newsform_container">
    <form action="?action=edit&type=<?= $type ?>" method="post" class="edit_newsform edit_appform" enctype="multipart/form-data" >
        <input type="hidden" name="id" value="<?= $id ?>">
        <label for="edit_form_caption" class="header_form_edit"> <?= $comments['caption'] ?></label>
        <input id="edit_form_caption" type="tel" name="caption" value="<?= $fields['caption'] ?>">
        <label for="edit_app_content" class="header_form_edit"> <?= $comments['content'] ?></label>
        <textarea id="edit_app_content" name="content" cols="50" rows="5"><?=$fields['content'] ?></textarea>
        <label for="edit_app_img" id="edit_file" class="header_form_edit"> <?= $comments['image'] ?></label>
        <input id="edit_app_img" class="file" type="file" name="image" >
        <label > <?= $comments['users_id'] ?></label>
        <?= (new Select())->setName('users_id')->setId('edit_users_id')->setData($usersList)->setSelectedValues([(string) $fields['users_id']])->html() ?>
        <input class="edit_form_btn" type="submit" value="edit">
    </form>
</div>