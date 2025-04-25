<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Title -->
    <title>Fahrenheit to Celsius</title>
  </head>
  <body>
		<!-- php echo to print the html to the page -->
    <?php 
			echo "<h3>Fahrenheit to Celsius</h3>";
		?>
		<!-- form to get the base and height from the user -->
    <form action="./result.php" method="post" target="results">
        <label for="fahrenheit">Fahrenheit</label>
        <input type="text" id="fahrenheit" placeholder="Enter fahrenheit" name="fahrenheit">
        <br><br>
        <input type="submit" value="Calculate degrees">
		</form>

			<iframe id="results" name="results">			
        <div id="user-info">
          <div id="$Conversion"></div>
        </div>
	    </iframe>
	</body>
	</body>
</html>
