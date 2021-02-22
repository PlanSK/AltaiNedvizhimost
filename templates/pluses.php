<div id="unit2">
<div class="z1">
    <h1 id="pluses">Преимущества работы с нами</h1>
</div>
<div class="flexed bloks">
<?php
$pluses = [
    [
        'name' => 'Индивидуальный подход<br>к каждому клиенту',
        'img' => 'images/hands.png',
        'description' => 'Индивидуальный подход к каждому клиенту, основанный на знаниях конкретно о нем и дающий возможность предложить действительно то, что он хочет.',
    ],
    [
        'name' => 'Экономия <br>Вашего времени',
        'img' => 'images/times.png',
        'description' => 'Время является невосполнимым ресурсом. Потери времени невозможно восстановить, поэтому его следует расходовать крайне обдуманно и экономно.',
    ],
    [
        'name' => 'Юридическая чистота<br>и прозрачность сделок',
        'img' => 'images/justice.png',
        'description' => 'Проверка юридической чистоты сделки при операциях с недвижимостью – очень сложное дело. Снизить риск наступления отрицательных для клиента последствий возможно, тщательно проверив все нюансы при помощи наших профессионалов.',
    ],
    [
        'name' => 'Ответственность<br>перед каждым клиентом',
        'img' => 'images/shield.png',
        'description' => 'Соблюдение профессиональных стандартов ведения дел и правовых обязательств. Защита конфиденциальной информации Клиента.',
    ],
];
foreach ($pluses as $p) : ?>
                <div class="flexed bl_pr">
                    <div class="flexed ipr1">
                        <img src="<?php echo $p['img']; ?>" alt="">
                    </div>
                    <div class="ipr2">
                        <h1><?php echo $p['name']; ?></h1>
                    </div>
                    <div class="ipr3">
                        <p><?php echo $p['description']; ?></p>
                    </div>
                </div>
<?php endforeach; ?>
</div>
</div>