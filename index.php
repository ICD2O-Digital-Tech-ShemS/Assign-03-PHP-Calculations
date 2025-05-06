<!DOCTYPE html>
<html lang="en-ca">
<head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Shem Irekpita">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slope Calculation</title>
</head>
<body>
    <!-- Display title and formula -->
    <h1>Calculation of a Slope and Find the Y-Intercept</h1>
    <h2>Formula: m = (y2 - y1) / (x2 - x1)</h2>

    <!-- Form to get rise and run values -->
    <form action="./result" method="post">
        <p>Rise</p>
        <label for="Y1int">Y1:</label>
        <input type="number" step="any" name="Y1int" id="Y1int" placeholder="Y1int" required>
        <label for="Y2int">Y2:</label>
        <input type="number" step="any" name="Y2int" id="Y2int" placeholder="Y2int" required>
        <p>Run</p>
        <label for="X1int">X1:</label>
        <input type="number" step="any" name="X1int" id="X1int" placeholder="X1int" required>
        <label for="X2int">X2:</label>
        <input type="number" step="any" name="X2int" id="X2int" placeholder="X2int" required>
        <br><br>
        <input type="submit" value="Calculate Slope">
    </form>

    <!-- Display the result below the form -->
    <h3>Result:</h3>
    Your slope is: <?php echo "$slope"; ?>
</body>
</html>
