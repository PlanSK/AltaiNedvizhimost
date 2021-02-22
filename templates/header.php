    <?php
    $logo_img = "m_logo.png";

    if (strtotime(date("d.m.Y")) < strtotime($date_of_end_new_year)) {
        $logo_img = "m_logo_winter.png";
    }
    ?>
    <header>
        <div id="logo">
            <a href="/"><img src="images/<?php echo $logo_img ?>" alt=""></a>
        </div>
        <div class="flexed cont">
            <div class="flexed" id="ankor">
                <a href="/">Главная</a>
                <a href="/#pluses">Преимущества работы с нами</a>
                <a href="/#team">Наша команда</a>
                <a href="/#uslugi">Перечень услуг</a>
                <a href="/#otzyv">Отзывы о нас</a>
                <a href="/#contact">Контакты</a>
            </div>
            <div id="deviz">
                Алтай Недвижимость - Надёжность и честность!
            </div>
            <div class="flexed contacts" id="cont_top">
                <?php require('templates/contact.php'); ?>
            </div>
        </div>
    </header>