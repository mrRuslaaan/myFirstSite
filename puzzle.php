<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Загадки</title>
	<link rel="stylesheet" href="style.css"> 
</head>
<body>

<div class="content">
		<?php
			include ("menu.php");
		?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра в загадки</h1>

			<div class="box">

				<?php
					if (isset($_GET["userAnswer1"]) && isset($_GET["userAnswer2"]) && isset($_GET["userAnswer3"]) && isset($_GET["userAnswer4"]))
					{
						$score = 0;

						$userAnswer = $_GET["userAnswer1"];
						if ($userAnswer == "зуб" || $userAnswer == "зубы") {
							$score ++;
						}

						$userAnswer = $_GET["userAnswer2"];
						if ($userAnswer == "гора" || $userAnswer == "горы") {
							$score ++;
						}

						$userAnswer = $_GET["userAnswer3"];
						if ($userAnswer == "ветер" || $userAnswer == "буря" || $userAnswer == "вьюга" || $userAnswer == "метель") {
							$score ++;
						}

						$userAnswer = $_GET["userAnswer4"];
						if ($userAnswer == "яйца" || $userAnswer == "яйцо") {
							$score ++;
						}

						echo "Вы отгадали " . $score . " загадки";


					}
				?>

				<form method="GET">				
					<p>Тридцать белых коней<br>На двух красных холмах<br>Разбегутся, сшибутся<br>И снова затихнут впотьмах.</p>
					<input type="text" name="userAnswer1">

					<p>Не отыскать её корней<br>Верхушка выше тополей<br>Всё круче вверх она идёт<br>А не растёт.?</p>
					<input type="text" name="userAnswer2">

					<p>Без голоса кричит<br>Без крыльев — а летает<br>И безо рта свистит<br>И без зубов кусает.</p>
					<input type="text" name="userAnswer3">

					<p>Без замка, без крышки<br>Сделан сундучок<br>А внутри хранится<br>Золота кусок.</p>
					<input type="text" name="userAnswer4">

					<br>
					<input type="submit" value="Ответить" name="">					
				</form>

			</div>

        </div>
    </div>
</div>

	

</div>
<div class="footer">
	Copyright &copy; <?php echo date("Y");?> Ruslan Annaev
<div>


</body>
</html>