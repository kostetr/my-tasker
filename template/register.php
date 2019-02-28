<form method="post" action="adduser">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Табельный" name="idDoc" id="idDoc">
                    <label class="login-field-icon fui-user" for="idDoc"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Логин" name="login" id="login">
                    <label class="login-field-icon fui-user" for="login"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" placeholder="Пароль" name="password" id="pass">
                    <label class="login-field-icon fui-lock" for="pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field"  placeholder="Подтвердите пароль" name="password_confirm" id="pass-confirm">
                    <label class="login-field-icon fui-lock" for="pass-confirm"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Фамилия" name="surname" id="surname">
                    <label class="login-field-icon fui-user" for="surname"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Имя" name="name" id="name" autofocus>
                    <label class="login-field-icon fui-user" for="name"></label>
                </div>
                <select name="gender">
                    <option disabled selected>Пол</option>
                    <option value="id">Мужской</option>
                    <option value="id">Женский</option>
                </select>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Дата рождения" name="birthday" id="birthday" autofocus>
                    <label class="login-field-icon fui-user" for="birthday"></label>
                </div>
                <select name="post_id">
                    <option disabled selected>Должность</option>
                    <option value="post_id">Мужской</option>
                    <option value="post_id Гена">Женский</option>
                </select>

                <input type="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться"/>
                <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
            </div>
        </div>
    </div>
</form> 