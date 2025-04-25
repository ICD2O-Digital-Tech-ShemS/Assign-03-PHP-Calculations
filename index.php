<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>slope</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h1>Calculation of a slope and find the Y-int</h1>
    <h1>m = (y2 - y1)/(x2 - x1)</h1>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="result">
        <p>Rise</p>
        <label for="Y1int">Y1</label>
        <input type="number" step="any" id="Y1int" placeholder="Y1int">
        <label for="Y2int">Y2</label>
        <input type="number" step="any" id="Y2int" placeholder="Y2int">
        <p>Run</p>
        <label for="X1int">X1</label>
        <input type="number" step="any" id="X1int" placeholder="X1int">
        <label for="X2int">X2</label>
        <input type="number" step="any" id="X2int" placeholder="X2int">
        <br><br>
        <input type="submit" value="Calculate">
		</form>

			<iframe id="result" name="result">			
        <div id="user-info">
          <div id="$slope"></div>
          <div id="$calculation"></div>
        </div>
	    </iframe>
	</body>
	</body>
</html>
