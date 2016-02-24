<?php include('header.php');?>
<div class="page-title">Регистрация</div>
<div class="register-form grid">
	<div class="grid col-12">
		<div class="field col-3">
			<input type="radio" checked name="usertype" value="v1" id="usertype-v1"/>
			<label class="radio-lbl btn-toggle-block" data-hide-block=".ul-field" data-show-block=".fl-field" for="usertype-v1">Физическое лицо</label>
		</div>
		<div class="field col-3">
			<input type="radio" name="usertype" value="v2" id="usertype-v2"/>
			<label class="radio-lbl btn-toggle-block" data-hide-block=".fl-field" data-show-block=".ul-field" for="usertype-v2">Юридическое лицо</label>
		</div>
	</div>
	<div class="col-6">
		<div class="grid-noGutter">
			<div class="col-11">
				<div class="field required">
					<label class="label">Имя</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">E-mail</label>
					<input type="email" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern">Введите e-mail в формате ___@___.__</span>
				</div>
				<div class="field required">
					<label class="label">Телефон</label>
					<input type="tel" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field ul-field hide required">
					<label class="label">Компания</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field ul-field hide required">
					<label class="label">Должность</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">Пароль</label>
					<input type="password" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">Повторите пароль</label>
					<input type="password" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<a href="#" class="btn primary mediumsize btn-right fl-field">Зарегистрироваться</a>
			</div>
		</div>
	</div>
	<div class="col-6 ul-field hide">
		<div class="grid-noGutter">
			<div class="col-11">
				<div class="field required">
					<label class="label">Юридический адрес</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">ИНН</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">КПП</label>
					<input type="text" />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">Банк</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">Расчетный счет</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">Корреспондентский счет банка</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<div class="field required">
					<label class="label">БИК банка</label>
					<input type="text" required />
					<span class="error-text error-required">Поле обязательно для заполнения</span>
					<span class="error-text error-pattern"></span>
				</div>
				<a href="#" class="btn primary mediumsize btn-right">Зарегистрироваться</a>
			</div>
		</div>
	</div>
</div>
<?php include('footer.php');?>