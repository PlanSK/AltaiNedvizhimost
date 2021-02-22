<div id="unit4">
<div class="z1 otstup">
    <h1 id="uslugi">Мы оказываем следующие услуги:</h1>
</div>
<div class="flexed bloks">
<?php
$services = [
    'Покупка и продажа квартир<br>на вторичном рынке',
    'Коммерческая недвижимость',
    'Юридическое сопровождение<br>сделки',
    'Покупка и продажа квартир<br>в новостройках',
    'Ипотечное кредитование<br>в банках-партнерах <br>по сниженной ставке',
    'Работа со всеми видами<br>субсидий и сертификатов'
];
    for ($is=0; $is <= 2; $is++) : ?>
    <div class="flexed bl_usl">
        <h1><?php echo $services[$is]; ?></h1>
    </div>
<?php endfor; ?>
</div>
<div class="flexed bloks">
<?php
    for ($is=3; $is <= 5; $is++) : ?>
    <div class="flexed bl_usl">
        <h1><?php echo $services[$is]; ?></h1>
    </div>
<?php endfor; ?>
</div>
</div>
