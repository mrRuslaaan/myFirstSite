<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Угадайка</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">

		var answer = parseInt(Math.random() * 100);
		var i = 1; //общее число ходов
		i = parseInt(i);

		function readInt(){
			return +document.getElementById("userAnswer").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function guess(){

			player = 0; // переменная для сохранения отстатка от деления на общего числа ходов на 2, чтобы можно было узнать какой игрок сейчас ходит
			playerNum = 0;

			write("Ход " + i + " игрока");

			var userAnswer = readInt();

				if ((userAnswer == answer) && (i % 2 == 0)){
					write("Победил 2 игрок!");
					hide("userAnswer");
					hide("button");
				} else if ((userAnswer == answer) && (i % 2 == 1)){
					write("Победил 1 игрок!");
					hide("userAnswer");
					hide("button");
				} 
				else if (userAnswer > answer){
					player = i % 2;
					if (player == 1) {
						playerNum = 2;
					} else {
						playerNum = 1;
					}
					write("Вы ввели большее число<br>Ход " + playerNum + " игрока");
					i = i + 1;
				} else if (userAnswer < answer){
					player = i % 2;
					if (player == 1) {
						playerNum = 2;
					} else {
						playerNum = 1;
					}
					write("Вы ввели меньшее число<br>Ход " + playerNum + " игрока");
					i = i + 1;
				}
		}

	</script>
</head>
<body>

<div class="content">
	<?php
		include ("menu.php");
	?>

<div class="contentWrap">
    <div class="content">
        <div class="center">

			<h1>Игра угадайка</h1>

			<div class="box">

				<p id="info">Угадайте число от 0 до 100</p>
				<input type="text" id="userAnswer">
				<br>
				<a href="#" onClick="guess();" id="button">Ответить</a>				
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