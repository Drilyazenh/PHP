<form class="form container" action="registration.php" method="post"> <!-- form--invalid -->
    <h2> Регистрация </h2>
    <div class="form__item">
    <label for="name">Имя*</label>
    <input id="name" type="text" name="name" placeholder="Ваше Имя" required>
    <span class="form__error">Ваше Имя</span>
    </div>
    <div class="form__item"> <!-- form__item--invalid -->
        <label for="email">E-mail*</label>
        <input id="email" type="text" name="email" placeholder="Введите e-mail" required>
        <p><?= $error ?></p>
        <span class="form__error">Введите e-mail</span>
    </div>
    <div class="form__item form__item--last">
        <label for="password">Пароль*</label>
        <input id="password" type="text" name="password" placeholder="Введите пароль" required>
        <span class="form__error">Введите пароль</span>
    </div>
    <button type="submit" class="button">Зарегистрироваться</button>
</form>
