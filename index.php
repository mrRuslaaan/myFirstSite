<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Личный сайт</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<div class="content">
		<?php
			include ("menu.php");
		?>

		<h1>Личный сайт Руслана Аннаева</h1>

		<div class="center">
			<img src="https://st.kp.yandex.net/im/kadr/5/5/8/kinopoisk.ru-Johnny-Knoxville-558077.jpg">

			<div class="box_text">
				<p>Здаравствуйте!</p>
				<p>Меня зовут Аннаев Руслан, мне <?php $nowDate = date(Y); $myDate = "1996"; $dif = $nowDate - $myDate; echo $dif;?> года, я родился в городе Ноябрьск, в данный момент уже <?php $nowDate = date(Y); $myDate = "2014"; $dif = $nowDate - $myDate; echo $dif;?> лет проживаю в городе Санкт-Петербург! В 2019 году окончил Университет ИТМО по направлению «бизнес-информатика»</p>
				<p>На данном сайте вы можете прочитать <a href="about.php">обо мне</a>, а также поиграть в <a href="puzzle.php">загадки</a> и <a href="guess.php">угадайку</a>.</p>
				<p>На случай, если Вам нужен надежный пароль вы можете его <a href="generator.php">сгенерировать</a>.</p>
			</div>

		</div>		
	</div>

	<div class="footer">
		Copyright &copy; <?php echo date("Y");?> Ruslan Annaev
	</div>
		
</body>
</html>