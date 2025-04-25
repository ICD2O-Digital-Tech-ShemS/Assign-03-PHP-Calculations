<?php
	$fahrenheit = $_POST['fahrenheit'];
	$Conversion =($fahrenheit - 32) * 5/9;
	$Conversion = round($Conversion,1);
?>
<h3>Results:</h3>
Volume of a sphere is <?php echo "$Conversion" ?>°F.