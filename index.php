<?php
require('templates/config.php');
?>
<!DOCTYPE html>
<html lang="ru">
<?php
    if (isset($_GET['feed_member'])):
        $fm = 0;
        $test = $connect->query("SELECT * FROM members WHERE id=".$_GET['feed_member']); 
        if ($test->num_rows) { $fm=$_GET['feed_member']; } 
    endif;
?>
<head>
    <meta charset="UTF-8">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1.0">-->
    <!--<meta name="google-site-verification" content="JekKnaeUEc1xCG3b84J-Dpy5mwBJXzzwli2FV2sOJE0" />-->
    <title>Алтай недвижимость - <?php
    if ($fm > 0):
        $m_title = $connect->query("SELECT * FROM members WHERE id=".$_GET['feed_member']); 
        while ($mt = $m_title->fetch_assoc()):
            echo('Отзывы о работе специалиста '.$mt['name'].'</title>');
            $t_desc=$mt['name'].' - '.$mt['position'];
        endwhile;
    else: 
        echo('услуги в сфере недвижимости в Алтайском крае</title>');
    endif;
?>
    
    <meta name="Description" content="<?php
    if ($t_desc):
        echo($t_desc.', высококлассный специалист в сфере недвижимости.');
    else:
        echo('Оказание юридических и риэлтерских услуг в Барнауле и на территории Алтайского края. Широкий спектр услуг по подбору недвижимости, оформлению, регистрации и сопровождению сделок. Высокая оперативность, гибкий подход и качественный сервис.');
    endif;
?>" />
    <meta name="keywords" content="Алтай недвижимость, недвижимость в Алтайском крае, риэлторские услуги, риэлтор, недвижимость, сделки с недвижимостью" />
    <meta name="robots" content="index, follow" />
    <link rel="icon" type="image/vnd.microsoft.icon" href="https://xn--80aagheinbdstfu6bdm4o.xn--p1ai/favicon.ico">
    <link rel="sitemap" type="application/xml" title="Sitemap" href="sitemap.xml" />
    <?php 
       require('templates/metric.php'); 
    ?>
    <link rel="stylesheet" href="styles/site.css?v=<?php echo $cssversion; ?>">
    <link rel="stylesheet" href="styles/media.css?v=<?php echo $cssversion; ?>">
</head>

<body>
   <?php require('templates/header.php'); ?>
    <div id="content">
<?php
    if (isset($fm)): 
            require('templates/member.php');
            require('templates/feedback.php');
    else: 
            require('templates/main.php');
    endif;
?>
    </div>
    <footer>
<?php if (!isset($fm)): ?>
        <div class="r">
            <hr>
        </div>
<?php endif; ?>
        <div class="flexed member">
            <div id="logo_bottom"><img src="images/<?php echo $logo_img ?>" alt=""></div>
            <div id="cont_info">
                <p>
                <?php   
                echo $main_data['name'].'<br>';
                echo $main_data['address'].'<br>';
                echo 'ИНН '.$main_data['inn'].'<br>';
                echo 'ОГРНИП '.$main_data['ogrnip']; 
                ?>
                </p>
            </div>
            <div class="cont">
                <div id="scn" class="flexed contacts">
                    <?php require('templates/contact.php'); ?>
                </div>
                <div class="flexed" id="author">
                    <p>Design by <script src="scripts/m.js" type="text/javascript"></script> <br>
                        2020 г.</p>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>
<?php $connect->close(); ?>