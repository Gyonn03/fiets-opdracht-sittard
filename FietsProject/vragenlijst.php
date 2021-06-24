<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vragenlijst</title>
    <link href="assets/style_tijdelijk.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="script/myscripts.js"></script>
  </head>
	<body>
		<div class="counter"> 
			<form action="verwerkt.php" method="post" id="quiz" class="form">
      <h1>Vragen</h1>
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
        <div class="container">
        <button onclick="window.location.href = 'index.php';" type="submit" name="vragenlijstSubmit" value="Verstuur"></button>
        <br />
        <br />
      </form>
		</div>
    
    <center>
    <div class="wrapper">
  <div class="icon facebook">
    <div class="tooltip">Facebook</div>
    <span><i class="fab fa-facebook-f"></i></span>
  </div>
  <div class="icon twitter">
    <div class="tooltip">Twitter</div>
    <span><i class="fab fa-twitter"></i></span>
  </div>
  <div class="icon instagram">
    <div class="tooltip">Instagram</div>
    <span><i class="fab fa-instagram"></i></span>
  </div>
        </center>
	</body>
</html>