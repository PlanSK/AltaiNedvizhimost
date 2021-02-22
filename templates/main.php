
        <div id="unit1">
            <div class="z1">
                <h1 id="about">Алтай Недвижимость</h1>
            </div>
            <div class="flexed">
                <div id="op1">
                   <?php foreach($description as $d) :
                    echo '<p>'.$d.'</p>';
                    endforeach; ?>
                </div>
                <div id="logob1">
                    <img src="images/logo_big.png" alt="">
                </div>
            </div>
        </div>
            <?php require('templates/service.php'); ?>
            <?php require('templates/member.php'); ?>
            <?php require('templates/pluses.php'); ?>
            <?php require('templates/feedback.php'); ?>
        <div id="unit6">
            <div class="z1">
                <h1 id="contact">Нас можно найти</h1>
            </div>
            <div class="flexed" id="map_bl">
                <div id="map">
               <a class="dg-widget-link" href="http://2gis.ru/barnaul/firm/70000001042525621/center/83.696953,53.360334/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Барнаула</a><div class="dg-widget-link"><a href="http://2gis.ru/barnaul/center/83.696953,53.360334/zoom/16/routeTab/rsType/bus/to/83.696953,53.360334╎Алтай Недвижимость, агентство недвижимости?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до Алтай Недвижимость, агентство недвижимости</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":635,"height":375,"borderColor":"#a3a3a3","pos":{"lat":53.360334,"lon":83.696953,"zoom":16},"opt":{"city":"barnaul"},"org":[{"id":"70000001042525621"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
                </div>
                <div id="cont_data">
                    <p>Контактная информация: <br><br>
                        Агентство недвижимости “Алтай недвижимость”<br>
                        <?php echo $main_data['address']; ?> <br><br>
                        <a href="mailto: <?php echo $main_data['mail']; ?>">Напишите нам</a><br>
                        <a href="tel: <?php echo $main_data['telefon']; ?>">тел. <?php echo $main_data['telefon']; ?></a></p>
                </div>
            </div>
        </div>
