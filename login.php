<!DOCTYPE html>
<html lang="en">
<head>
    <title>Войти в систему</title>
	<?php include "views/head.php"; ?>
</head>
<body>
	<?php include "views/header.php"; ?>	

	<section class="container page">
		<div class="auth-form">
            <h1>Вход</h1>
			<form class="form" method="POST">
                <fieldset class="fieldset">
                    <input class="input" type="text" name="title" placeholder="Введите email">
                </fieldset>
                <fieldset class="fieldset">
                    <input class="input" type="password" name="title" placeholder="Введите пароль">
                </fieldset>

                <fieldset class="fieldset">
                    <button class="button" type="submit">Войти</button>
                </fieldset>
			</form>
		</div>
	</section>
</body>
</html>