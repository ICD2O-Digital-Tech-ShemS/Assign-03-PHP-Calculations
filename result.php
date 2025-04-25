<?php
	$Y1int = $_POST['Y1int'];
	$Y2int = $_POST['Y2int'];
	$X1int = $_POST['X1int'];
	$X2int = $_POST['X2int'];

	$Slope = (Y2int - Y1int)/(X2int - X1int);
	$Calculate = Y2int - (slope * X2int);
	$Calculate = round($Calculate,1);
?>
<h3>Results:</h3>
Your slope is <?php echo "$Slope" ?>
Your Y-int is <?php echo "$Calculate" ?>