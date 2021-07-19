<div id="unit3">

<?php
$i = 0;
if (isset($fm)): ?>
<div class="r">
    <hr>
</div>
<?php
    $table = $test; 
else: ?> 
<div class="z1 otstup">
    <h1 id="team">Наша команда</h1>
</div>
<?php
$table = $connect->query("SELECT * FROM members WHERE isactive=1"); 
endif;

while($m = $table->fetch_assoc()) : 
    $m_id = 0;
    $feed_member = $connect->query('SELECT * FROM feedbacks WHERE id_member='.$m['id']);
    if ($feed_member->num_rows) { 
        $m_id=$m['id'];
    }
    if ($m['img'] == "") {
        $m['img'] = "photo0.png";
    }
?>
<div class="flexed member" id="<?php echo 'm'.$m['id'] ?>">
<?php if (($i % 2) == 0): ?>
    <div class="flexed photo">
        <?php  if ($m_id): ?>
            <a href="/?feed_member=<?php echo($m_id); ?>" target="_blank">
        <?php endif; ?>
        <?php if (file_exists('images/'.$m['img'])): ?>
            <img src="images/<?php echo $m['img']; ?>" alt="">
        <?php else: ?>
            <img src="images/photo0.png" alt="">
        <?php endif; ?>
        <?php  if ($m_id): ?>
            </a>
        <?php endif; ?>
    </div>
<?php else: ?>
    <div class="flexed photo photo_ots">
       <?php  if ($m_id): ?>
            <a href="/?feed_member=<?php echo($m_id); ?>" target="_blank">
        <?php endif; ?>
        <?php if (file_exists('images/'.$m['img'])): ?>
            <img src="images/<?php echo $m['img']; ?>" alt="">
        <?php else: ?>
            <img src="images/photo0.png" alt="">
        <?php endif; ?>
        <?php  if ($m_id): ?>
            </a>
        <?php endif; ?>
    </div>
<?php endif; ?>
    <div class="flexed bio">
        <div class="flexed name">
            <h1>
            <?php 
            if ($m_id): ?>
                <a href="/?feed_member=<?php echo($m_id); ?>" target="_blank"><?php echo $m['name']; ?></a>
            <?php 
            else: echo $m['name'];
            endif; ?>
            </h1>
        </div>
        <div class="flexed posit">
            <?php echo $m['position']; ?>
        </div>
        <div class="flexed desc_bio">
            <p><?php echo $m['bio']; ?>
            <?php if ($m['sertificate']): ?>
            <a href="<?php echo $m['sert_src']; ?>" target="_blank">Квалификация: <?php echo $m['sertificate']; ?></a>
            <?php endif; ?></p>
        </div>
        <div class="flexed">
        <?php if ($m['wa'] || $m['istg']): ?>
        <div class="flexed cont_m">
            Контакты: 
            <?php if ($m['istg']): ?>
            <a target="_blank" href="https://www.instagram.com/<?php echo $m['istg']; ?>/"><img src="images/Inst.png" alt="" width="20px"></a>
            <?php endif; ?>
            <?php if ($m['wa']): ?>
            <a href="https://wa.me/<?php echo $m['wa']; ?>"><img src="images/Whatsap.png" alt="" width="20px"></a>
            <?php endif; ?>
        </div>
        <?php endif; ?>
        <?php
            if ($m_id): ?>
        <div class="flexed cont_m">
          <a href="/?feed_member=<?php echo($m_id); ?>" target="_blank">Отзывы: <?php echo($feed_member->num_rows); ?></a>
        </div>
        <?php endif; ?>
        </div>
    </div>
</div>
<div class="r">
    <hr>
</div>
<?php 
$i++;
endwhile; 
?>
</div>