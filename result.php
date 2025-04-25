<?php
	$Y1int = $_POST['Y1int'];
	$Y2int = $_POST['Y2int'];
	$X1int = $_POST['X1int'];
	$X2int = $_POST['X2int'];

	$slope = (Y2int - Y1int)/(X2int - X1int);
	$calculation = Y2int - (slope * X2int)
	$calculation = round($calculation;1)
?>
<h3>Results:</h3>
Your slope is <?php echo "$slope" ?>
Your Yint is <?php echo "$calculation" ?>