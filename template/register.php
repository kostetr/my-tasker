<form method="post" action="adduser">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>

            <div class="login-form">
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Табельный" name="id_doc" id="id-doc" autocomplete="off" pattern="[0-9]{,5" required autofocus>
                    <label class="login-field-icon fui-user" for="id_doc"></label>                    
                </div>
                <div class="control-group">
                    <input type="text" class="login-field " data-title="Something comment is here!" placeholder="Логин" name="login" id="login" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="login"></label>
                    <p class="block">Lorem ipsum <span class="tooltip" data-title="Something comment is here!">dolor</span> sit amet, consectetur adipisicing elit. Quasi, vel molestias dignissimos eaque praesentium earum quaerat vero adipisci, debitis omnis non nam facilis <span class="tooltip" data-title="Another tooltip is here!">voluptate</span> possimus? <span class="tooltip" data-title="Something comment is here!">Nostrum</span> minima, porro quisquam est.</p>
                </div>                
                <div class="control-group">
                    <input type="password" class="login-field" placeholder="Пароль" name="password" id="pass" required>
                    <label class="login-field-icon fui-lock" for="pass"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field"  placeholder="Подтвердите пароль" name="password_confirm" id="pass-confirm" required>
                    <label class="login-field-icon fui-lock" for="pass-confirm"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Фамилия" name="surname" id="surname" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="surname"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Имя" name="name" id="name" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="name"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Отчество" name="patronymic" id="patronymic" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="patronymic"></label>
                </div>
                <div class="control-group" data-provide="datepicker">
                    <input type="text" class="login-field" placeholder="дд-мм-гггг" name="birthday" id="birthday" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="birthday"></label>
                </div>
                <div class="control-group">
                    <input type="text" class="login-field" placeholder="Телефон" name="phone" id="phone" autocomplete="off" required>
                    <label class="login-field-icon fui-user" for="phone"></label>
                </div>
                <div class="control-group">
                    <input type="password" class="login-field" placeholder="Пароль доступа" name="secret_pass" id="secret_pass" required>
                    <label class="login-field-icon fui-user" for="secret_pass"></label>
                </div>
                <div class="select-width">                    
                    <select name="gender_id" class="form-control" id="gender_id" required>
                        <option disabled selected>Пол</option>
                        <?php foreach ($this->gender as $gender_item): ?>  
                            <option value="<?= $gender_item['id'] ?>"><?= $gender_item['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <div class="select-width">                    
                    <select name="post_id" class="form-control" id="post_id" required>
                        <option disabled selected>Должность</option>
                        <?php foreach ($this->posts as $post_item): ?>  
                            <option value="<?= $post_item['id'] ?>"><?= $post_item['name'] ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
                <input type="submit" id="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться" disabled/>
                <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
            </div>
        </div>
    </div>
</form>
<script> var logins = <?php echo json_encode($this->logins); ?>;</script>