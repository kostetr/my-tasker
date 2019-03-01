<form method="post" action="adduser">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>
            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Табельный" name="id_doc" id="id_doc">
                    <label class="login-field-icon fui-user" for="id_doc"></label>
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
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Отчество" name="patronymic" id="patronymic" autofocus>
                    <label class="login-field-icon fui-user" for="patronymic"></label>
                </div>
                <div class="control-group">
                    <input type="date" class="login-field"  name="birthday" id="birthday" autofocus>                    
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" placeholder="Пароль доступа" name="secret_pass" id="secret_pass" autofocus>
                    <label class="login-field-icon fui-user" for="secret_pass"></label>
                </div>
                <div class="control-group">
                    <select name="gender_id">
                        <option disabled selected>Пол</option>
                        <?php foreach ($this->gender as $gender_item): ?>  
                            <option value="<?= $gender_item['id'] ?>"><?= $gender_item['name'] ?></option>
                        <?php endforeach ?>
                    </select>   
                </div>
                <div class="control-group">
                    <select name="post_id">
                        <option disabled selected>Должность</option>
                        <?php foreach ($this->posts as $post_item): ?>  
                            <option value="<?= $post_item['id'] ?>"><?= $post_item['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться"/>
                <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
            </div>
        </div>
    </div>
</form> 