<?php include('header.php');?>
<div class="page-title">Авторизация</div>
<div class="grid">
	<div class="col-6">
		<div class="grid-noGutter">
			<div class="authorize-form col-11">
				<div class="field required">
					<label class="label">Электронная почта</label>
					<input type="email" />
				</div>
				<div class="field required">
					<label class="label">Пароль</label>
					<input type="password" />
					<a href="pass-rec.php">Забыли пароль?</a>
				</div>
				<a href="#" class="btn primary mediumsize btn-right">Войти</a>
			</div>
			<div class="col-11">
				<div class="title-h2">Нет аккаунта?</div>
				<p>Пройдите простую регистрацию, и заказать нашу продукцию станет еще легче!</p>
				<a href="registration.php" class="btn standart mediumsize btn-right">Зарегистрироваться</a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>