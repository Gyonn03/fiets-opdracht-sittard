  <?php
    include("functions.php");
    ?>
    <html>
    <head>
    <link rel="icon" href="images/icon.ico" type="image/gif" sizes="16x16">
    <title>View</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link href="assets/styles.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    </head>
    <!-- Klein menu voor alle knoppen -->
    <div class="view">
    <h1>Gegevens</h1>
    <form method="post">
        <input type="submit" name="SubmitFilterFietsen" class="myButton" value="Filter fietsen" />
        <input type="submit" name="SubmitFilterVragen" class="myButton" value="Filter vragen" />
        <input type="submit" name="SubmitHoeveelFietsen" class="myButton" value="Hoeveel fietsen zijn er?" />
        <input type="submit" name="SubmitHoeveelVragen" class="myButton" value="Hoeveel vragen zijn er?" />
    </form>
    <br />
    <a href="index.php">Terug</a>
    </div>
    </body>
</html>
