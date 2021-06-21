<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vragenlijst</title>
    <link href="assets/styles.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
	</head>
	<body>
		<div class="counter"> 
			<h1>Vragen</h1>
			<form action="verwerkt.php" method="post" id="quiz" class="form">
        <!-- Vraag 1 -->
			  <h2>Waar woon je?</h2>	
        <?php
          $woonplaatsen = array("Sittard", "Een van de deelgemeentes", "Op fiets afstand", "Ik ben een toerist");
          foreach ($woonplaatsen as $w) {
            echo "<div>";
            echo "<input type='radio' id='" . $w . "' name='woonplaats' value='" . $w . "' />";
            echo "<label for='" . $w . "'>" . $w . "</label><br />";
            echo "</div>";
          }
        ?>
        
        <!-- Vraag 2 -->
        <h2>Waarom ben je vandaag in de stad?</h2>
        <?php
          $waaromhier = array("Boodschappen/winkelen", "Eten/drinken", "dagje uit", "stad bezichtigen");
          foreach ($waaromhier as $w) {
            echo "<div>";
            echo "<input type='radio' id='" . $w . "' name='stad' value='" . $w . "' />";
            echo "<label for='" . $w . "'>" . $w . "</label><br />";
            echo "</div>";
          }
        ?>
        <br />
        <input onclick="window.location.href = 'index.php';" type="submit" name="vragenlijstSubmit" value="Verstuur" />
        <br />
        <br />
      </form>
		</div>
	</body>
</html>