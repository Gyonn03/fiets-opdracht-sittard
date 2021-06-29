<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Vragenlijst</title>
    <link href="assets/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <script src="js/myscripts.js"></script>
	</head>
	<body>
    <?php
      include("functions.php");
    ?>
		<div class="counter"> 
			<form action="verwerkt.php" method="post" id="quiz" class="form">
      <h1>Vragen</h1>
        <!-- Vraag 1 -->
			  <h2>Waar woon je?</h2>	
        <?php
          $result = GetData('SELECT antwoord_een FROM vraag_een;');
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div>";
              echo "<input type='radio' id='" . $row["antwoord_een"] . "' name='woonplaats' value='" . $row["antwoord_een"] . "' />";
              echo "<label for='" . $row["antwoord_een"] . "'>" . $row["antwoord_een"] . "</label><br />";
              echo "</div>";
            }
          }
        ?>
        <!-- Vraag 2 -->
        <h2>Waarom ben je vandaag in de stad?</h2>
        <?php
          $result = GetData('SELECT antwoord_twee FROM vraag_twee;');
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              echo "<div>";
              echo "<input type='radio' id='" . $row["antwoord_twee"] . "' name='stad' value='" . $row["antwoord_twee"] . "' />";
              echo "<label for='" . $row["antwoord_twee"] . "'>" . $row["antwoord_twee"] . "</label><br />";
              echo "</div>";
            }
          }
        ?>
        <br />
        <br />
        <br />
        <!-- <input type="submit" name="vragenlijstSubmit" value="Verstuur" /> -->
        <div class="container">
          <button onclick="window.location.href = 'index.php';" type="submit" name="vragenlijstSubmit" value="Verstuur"></button>
        </div>
        <br />
        <br />
        <a href="index.php">Terug</a>
        <br />
        <br />
      </form>
		</div>
    <!-- <center>
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
        </center> -->
	</body>
</html>