<div id="unit5">
<?php
$count_max = 2;
if (isset($fm)):
$table = $connect->query('SELECT * FROM feedbacks WHERE id_member='.$m_id);
else: ?>
<div class="r">
    <hr>
</div>
<?php
$table = $connect->query('SELECT * FROM feedbacks ORDER BY RAND() LIMIT '.$count_max);
endif; ?>
<div class="z1">
    <h1 id="otzyv">Отзывы наших клиентов</h1>
</div>
<?php
while($f = $table->fetch_assoc()) : 
$name = $connect->query('SELECT name FROM members WHERE id = '.$f['id_member']); ?>
                <div class="name_o">
                    <p><?php echo $f['name'].', '.$f['service']; ?></p>
                </div>
                <div class="date_feed">
                    <p><?php echo date("d.m.Y", strtotime($f['date'])).', Специалист: <a href="#m'.$f['id_member'].'">'.$name->fetch_row()[0]; ?></a></p>
                </div>
                <div class="flexed member">
                    <div class="otz_txt">
                        <p><?php echo $f['text']; ?></p>
                    </div>
                    <div class="otz_img">
                        <img src="images/otz1.png" alt="">
                    </div>
                </div>
                <div class="r">
                    <hr>
                </div>
<?php 
endwhile;

?>
</div>