<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Генератор паролей</title>
	<link rel="stylesheet" href="style.css"> 
	<script type="text/javascript">


		function readInt(){
			return +document.getElementById("len").value;
		}

		function write(text){
			document.getElementById("info").innerHTML = text;
		}

		function hide(id){
			document.getElementById(id).style.display = "none";
		}

		function generate(){
			var len = readInt();
			var pas = "";
			var dic = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
			for (var i = 0; i < len; i++){
				pas += dic.charAt(Math.floor(Math.random() * dic.length));
			}
			
				write("Ваш пароль: " + pas);
				hide("button");
				hide("len");

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

			<h1>Генератор паролей</h1>

			<div class="box">

				<p id="info">Пароль какой длины вы хотите сгенерировать?</p>
				<input type="text" id="len">
				<br>
				<a href="#" onClick="generate();" id="button">Сгенерировать</a>				
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