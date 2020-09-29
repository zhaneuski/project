<?php
/** @var string $action */
?>

<div class="auth">
    <div class="container_auth">
        <h2 class="login_header">Authorization</h2>
        <form class="form_auth" action="<?= $action ?>" method="POST">
            <div class="form-group">
                <label for="login_auth">Apartment number</label>
                <input type="text" name="login" class="login_auth"
                       id="login_auth">
            </div>
            <div class="form-group">
                <label for="password_auth">Phone number</label>
                <input type="text" name="password" class="login_auth"
                       id="password_auth">
            </div>

            <?php
            if (!empty($_SESSION['errors'])) {
                foreach ($_SESSION['errors'] as $error) {
                    echo '<div class="reg_error" role="alert">' . $error . '</div>';
                }
                unset($_SESSION['errors']);
            }
            ?>

            <div class="form-group">
                <button type="submit" class="btn_auth">Login</button>
            </div>

        </form>
    </div>
</div>