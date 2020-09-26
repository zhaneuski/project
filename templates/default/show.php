<?php

use TexLab\Html\Select;
use View\Html\Html;

/** @var array $table */
?>
<!-- Intro -->

<div class="intro">
    <div class="container">
        <div class="intro__inner">
            <!-- effects -->
            <h1>
                Lorem ipsum dolor sit amet consectetur adipisicing elit
            </h1>
            <a href="?action=loginform&type=auth" class="default_button">
                <svg class="button__svg">
                    <rect class="button_rect"></rect>
                </svg>
                Login
            </a>
        </div>
    </div>
</div>

<!-- About us -->

<div class="about">
    <div class="container">
        <h2 class="header2">About Us</h2>
        <div class="about__inner">
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Explicabo reprehenderit porro repellendus unde
            at ea tempora vitae deleniti voluptas illo veniam corporis a, sed quisquam nulla sequi saepe, quaerat
            quia.
            Repellat vel quasi fugiat debitis accusantium minima culpa saepe possimus magni eligendi doloremque
            eaque itaque consequatur aliquam nulla, quia quidem aut voluptatibus eos autem placeat quis! Labore, nam
            vel? Cupiditate?
            Maxime molestias veniam modi iusto commodi corporis quam consequatur omnis iste nam. Quae error quos
            magnam ducimus ex nulla animi, eligendi totam in rerum reiciendis optio sed esse tempora perferendis!
        </div>
    </div>
</div>


<!-- News -->

<div class="news">
    <div class="container" id="news_container">

        <div class="container_header">
            <h2 class="header3"> Actual news</h2>
        </div>

        <?php
        echo Html::create('DefaultDiv')
            ->data($table)
            ->html();
        ?>

    </div>
</div>


<!-- footer -->

<footer class="footer">
    <div class="container">
        <div class="footer__inner">
            <div class="footer_content">
                <div class="footer_logo"><a href="?action=show&type=default">Z.V</a></div>
            </div>

            <div class="footer_content">
                <div class="footer_img">
                    <i class="fa fa-envelope" aria-hidden="true"></i>
                </div>

                <h4 class="footer_header">mail</h4>

                <div class="footer_item">
                    klibariy@mail.ru
                </div>
            </div>

            <div class="footer_content">

                <div class="footer_img">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <h4 class="footer_header">call</h4>
                <div class="footer_item">
                    +123456789
                </div>
            </div>

            <div class="footer_content">
                <div class="footer_img">
                    <i class="fa fa-bus" aria-hidden="true"></i>
                </div>
                <h4 class="footer_header">find us</h4>
                <div class="footer_item">
                    Vitebsk, Republic of Belarus
                </div>

            </div>
        </div>
    </div>
</footer>
<script src="https://use.fontawesome.com/191ec19d10.js"></script>
