<!DOCTYPE html>
<html lang="ru">

<head>

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Регистрация</title>
	<link rel="stylesheet" href="css/styles.css" type="text/css">

<body>
	<center>
		<form class="decor" action="registration.php" method="post" name="r_form">
			<div class="form-left-decoration"></div>
			<div class="form-right-decoration"></div>
			<div class="circle"></div>
			<div class="form-inner">
				<h1>Регистрация</h1>
				<input type="text" placeholder="Имя" name="r_Name" required=" " />
				<input type="text" placeholder="Логин" name="r_Login" required=" " />
				<input type="text" placeholder="Пароль" name="r_Password" required=" " /></td>
				<input type="submit" name="r_send" value="Зарегистрироватся" /></td>
				<a href="user.php">Авторизация</a>
			</div>
			<section2>

				<p></p>

				<?php
				require_once 'dbconnect.php';

				if (isset($_POST["r_Name"])) {
					$r_Name = $_POST["r_Name"];
				}
				if (isset($_POST["r_Login"])) {
					$r_Login = $_POST["r_Login"];
				}
				if (isset($_POST["r_Password"])) {
					$r_Password = $_POST["r_Password"];
				}
				if (isset($_POST["r_role"])) {
					$r_role = $_POST["r_role"];
				}
				if (isset($_POST["r_send"])) {
					$r_send = $_POST["r_send"];
				}
				if (isset($r_send)) {

					$result = mysqli_query($connect, "INSERT INTO user (name, login, password) VALUES ('$r_Name', '$r_Login', '$r_Password' )") or die("Error : " . mysqli_error("Error"));

					if ($result) {
						echo "Регистрация прошла успешно. Перейдите на вкладку авторизация!";
						exit();
					}
				} 
				?>


				</div>
				<br><br><br><br><br>
			</section2>
			</div>
			<footer>

			</footer>

		</form>
	</center>
	</body>

</html>