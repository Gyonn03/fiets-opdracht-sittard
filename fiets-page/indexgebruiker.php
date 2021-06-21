<?php include 'counter.php';?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Fiets-teller</title>
        <link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
	</head>
	<body>
		<div class="login">
			<h1>Vragen</h1>
			<form action="result.php" method="post" id="quiz" class="form">
			<h2>Waar woon je?</h2>			
 <div>
  <input type="checkbox" name="question-1-answers[]" id="question-1-answers-A" value="A" />
  <label for="question-1-answers-A">Ik woon in Sittard</label>
 </div>

 <div>
  <input type="checkbox" name="question-1-answers[]" id="question-1-answers-B" value="B" />
  <label for="question-1-answers-B">Ik woon in een van de deelgemeenten van Sittard-Geleen</label>
 </div>

 <div>
  <input type="checkbox" name="question-1-answers[]" id="question-1-answers-C" value="C" />
  <label for="question-1-answers-C">Ik woon op fiets afstand</label>
 </div>

 <div>
   <input type="checkbox" name="question-1-answers[]" id="question-1-answers-D" value="D" />
   <label for="question-1-answers-D">Ik ben hier op vakantie</label>
 </div>
 <h2>Waarom ben je vandaag in de stad?</h2>
 <div>
  <input type="checkbox" name="question-2-answers[]" id="question-2-answers-A" value="A" />
  <label for="question-1-answers-A">Om boodschappen te doen of te winkelen</label>
 </div>

 <div>
  <input type="checkbox" name="question-2-answers[]" id="question-2-answers-B" value="B" />
  <label for="question-1-answers-B">Om iets te eten of te drinken</label>
 </div>

 <div>
  <input type="checkbox" name="question-2-answers[]" id="question-2-answers-C" value="C" />
  <label for="question-1-answers-C">Om uit te gaan (film, theater)</label>
 </div>

 <div>
   <input type="checkbox" name="question-2-answers[]" id="question-2-answers-D" value="D" />
   <label for="question-1-answers-D">Om de stad te bekijken</label>
 </div>
<br>
        <input type="submit" value="Verstuur!" />
</form>

		</div>
	</body>
</html>