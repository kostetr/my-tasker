<form method="post" action="adduser">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Логин" name="login" id="login">
                    <label class="login-field-icon fui-user" for="login"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Фамилия" name="surname" id="surname">
                    <label class="login-field-icon fui-user" for="surname"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Имя" name="name" id="name" autofocus>
                    <label class="login-field-icon fui-user" for="name"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" placeholder="Пароль" name="password" id="pass">
                    <label class="login-field-icon fui-lock" for="pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field"  placeholder="Подтвердите пароль" name="password_confirm" id="pass-confirm">
                    <label class="login-field-icon fui-lock" for="pass-confirm"></label>
                </div>
                <input type="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться"/>
                <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
            </div>
        </div>
    </div>
</form> 