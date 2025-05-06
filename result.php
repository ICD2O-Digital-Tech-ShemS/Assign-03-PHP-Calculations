<?php
// Get form data
$Y1int = $_POST['Y1int'] ?? null;
$Y2int = $_POST['Y2int'] ?? null;
$X1int = $_POST['X1int'] ?? null;
$X2int = $_POST['X2int'] ?? null;

// Calculate the slope (m = (y2 - y1) / (x2 - x1))
$slope = ($Y2int - $Y1int) / ($X2int - $X1int);
?>