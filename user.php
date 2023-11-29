<!DOCTYPE html>
<html lang="ru">

<head>
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Авторизация</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">


<body>
	
	<center>

		<! форма для вывода данных !>
			<form class="decor" action="user.php" method="post" name="r_form">
				<div class="form-left-decoration"></div>
				<div class="form-right-decoration"></div>
				<div class="circle"></div>
				<div class="form-inner">
					<h1>Авторизация</h1>
					<input type="text" placeholder="Логин" name="r_login" required=" " />
					<input type="password" placeholder="Пароль" name="r_password" required=" " />
					<input type="submit" name="r_send" value="Авторизоваться" />
					<a href="registration.php">Регистрация</a>
				</div>
				<section2>

					<p></p>

					<?php
					require_once("dbconnect.php");
					if (isset($_POST["r_login"])) {
						$r_login = $_POST["r_login"];
					}
					if (isset($_POST["r_password"])) {
						$r_password = $_POST["r_password"];
					}
					if (isset($_POST["r_send"])) {
						$r_send = $_POST["r_send"];
					}
					if (isset($r_send)) {
						$result = mysqli_query($connect, "SELECT * FROM user WHERE login='$r_login' AND password='$r_password'") or die("Error:" . mysqli_error());


						if (mysqli_num_rows($result) < 1) {
							echo "неправильный логин или пароль";
						} else {
							if($_SESSION['login'] = $r_login && $_SESSION['password'] = $r_password) {
								header('Location: ./index.php');
							}
						}

						while ($a = mysqli_fetch_array($result)) {
							$name = $a['name'];
							echo "<form action='index.php' metod='post'>
				</form>";
							echo "<br>";
						}
					}
					?>
					</div>
					<br><br><br><br><br>
				</section2>
				</div>

	</center>			
</body>

</html>