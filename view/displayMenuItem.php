<?php
require_once "controller/menuItem.php";

foreach (($virginMojito -> getMenuItem()) as $key => $value) :
?>
<div><?php echo $key;?> : <?php echo $value;?></div>

<?php
endforeach;

foreach (($notVirginMojito -> getMenuItem()) as $key => $value) :
  ?>
  <div><?php echo $key;?> : <?php echo $value;?></div>
  
  <?php
  endforeach;
