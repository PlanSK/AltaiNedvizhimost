<?php if ($main_data['instagram']): ?>
<a href="https://www.instagram.com/<?php echo $main_data['instagram']; ?>/"><img src="images/Inst.png" alt=""></a>
<?php endif; ?>
<?php if ($main_data['whatsapp']): ?>
<a href="https://wa.me/<?php echo $main_data['whatsapp']; ?>"><img src="images/Whatsap.png" alt=""></a>
<?php endif; ?>
<?php if ($main_data['telefon']): ?>
<img src="images/Telefon.png" alt="">
<a href="tel: <?php echo $main_data['telefon']; ?>"><h1><?php echo $main_data['telefon']; ?></h1></a>
<?php endif; ?>