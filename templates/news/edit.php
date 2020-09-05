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

<form action="?action=edit&type=<?= $type ?>" method="post" class="guestbookform" >
    <input type="hidden" name="id" value="<?= $id ?>">
    <label> <?= $comments['header'] ?>
        <input type="tel" name="header" value="<?= $fields['header'] ?>">
    </label>
    <label> <?= $comments['newscontent'] ?>
        <textarea name="newscontent" cols="50" rows="10"><?=$fields['newscontent'] ?></textarea>
    </label>
    <input type="submit" value="Отправить">
</form>
