<div class="loginborder registerborder">
	<h1>Зарегистрировать аккаунт</h1>
	<form action="/registration" method="POST" id="registration">
		Логин<br>
		<input class="formlogtext" type="text" name="login" maxlength="30" value="<?=$_POST['login']?>" required>
		<br><br>
		email<br>
		<input class="formlogtext" type="email" name="email" maxlength="30" value="<?=$_POST['email']?>" required>
		<br><br>
		Пароль<br>
		<input class="formlogtext" type="password" name="password1" maxlength="30" required>
		<br><br>
		Повторите пароль<br>
		<input class="formlogtext" type="password" name="password2" maxlength="30" required>
		<br><br>
		<input id="formlogsub" type="submit" value="Регистрация" name="submit">
	</form>
	<p>Уже есть аккаунт? <a href="/login">Войти</a></p>
	<?php if($error !== '') { echo '<div class="logError">'.$error.'</div>'; } ?>
</div>