<?php
/** @var string $action */
?>

<!--<div class="container">-->
<!--    <form action="--><? //=$action?><!--" method="post">-->
<!--        <div class="form-group">-->
<!--            <label for="exampleInputEmail1">Номер квартиры</label>-->
<!--            <input type="text" class="form-control" name="login">-->
<!--        </div>-->
<!--        <div class="form-group">-->
<!--            <label for="exampleInputPassword1">Номер телефона</label>-->
<!--            <input type="password" class="form-control" id="exampleInputPassword1" name="password">-->
<!--        </div>-->
<!--        <button type="submit" class="btn btn-primary">Отправить</button>-->
<!--    </form>-->
<!--</div>-->

<div class="auth">

    <div class="container_auth">

        <h2 class="login_header">Authorization</h2>

        <!--        <div class="form_auth">-->
        <form class="form_auth" action="<?= $action ?>" method="POST">
            <div class="form-group">
                <label for="login_auth">Apartment number</label>
                <input type="text" name="login" placeholder="enter your apartment" class="login_auth"
                       id="login_auth">
            </div>
            <div class="form-group">
                <label for="password_auth">Phone number</label>
                <input placeholder="enter your phone" type="text" name="password" class="login_auth"
                       id="password_auth">
            </div>

            <div class="form-group">
                <button type="submit" class="btn_auth">send</button>
            </div>

        </form>
        <!--        </div>-->

    </div>
</div>