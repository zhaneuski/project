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
    <form action="?action=edit&type=<?= $type ?>" method="post" class="edit_newsform" >
        <input type="hidden" name="id" value="<?= $id ?>">

        <label for="edit_form_header" class="header_form_edit" > <?= $comments['header'] ?></label>
        <input id="edit_form_header" type="tel" name="header" value="<?= $fields['header'] ?>">

        <label for="edit_form_content" class="header_form_edit" > <?= $comments['newscontent'] ?></label>
        <textarea id="edit_form_content" name="newscontent" cols="0" rows="10"><?=$fields['newscontent'] ?></textarea>

        <input class="edit_form_btn" type="submit" value="edit">
    </form>
</div>

