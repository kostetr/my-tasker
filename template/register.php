<script>
    var passError = "<?php echo $this->arrayErrors['passError'] ?>";
    var loginError = "<?php echo $this->arrayErrors['loginError'] ?>";
    var secretPassError = "<?php echo $this->arrayErrors['secretPassError'] ?>";
</script>
<form method="post" action="adduser" id="registerForm">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>
            <?php if ($this->arrayErrors !== null): ?>
                <div class="alert alert-danger alert-registr" role="alert">Ошибки:
                    <?php foreach ($this->arrayErrors as $error_item): ?>
                        <p><?= $error_item ?></p>
                    <?php endforeach ?>
                </div>

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Табельный" name="id_doc" id="id-doc" value="<?= $this->user['id_doc'] ?>" autocomplete="off" pattern="[0-9]{,5" required autofocus>
                        <label class="login-field-icon fui-user" for="id_doc"></label>                    
                    </div>
                    <div class="control-group input-wrapper">
                        <input type="text" class="login-field " placeholder="Логин" name="login" id="login" value="<?= $this->user['login'] ?>" autocomplete="off">
                        <label class="login-field-icon fui-user" for="login"></label>

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
                        <input type="text" class="login-field" placeholder="Фамилия" name="surname" id="surname" value="<?= $this->user['surname'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="surname"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Имя" name="name" id="name" value="<?= $this->user['name'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="name"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Отчество" name="patronymic" id="patronymic" value="<?= $this->user['patronymic'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="patronymic"></label>
                    </div>
                    <div class="control-group" data-provide="datepicker">
                        <input type="text" class="login-field" placeholder="дд-мм-гггг" name="birthday" id="birthday" value="<?= $this->user['birthday'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="birthday"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Телефон" name="phone" id="phone" value="<?= $this->user['phone'] ?>" autocomplete="off" required>
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
                                <?php if ($gender_item['id'] == $this->user['gender_id']): ?>
                                    <option selected  value="<?= $gender_item['id'] ?>"><?= $gender_item['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?= $gender_item['id'] ?>"><?= $gender_item['name'] ?></option>
                                <?php endif ?>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="select-width">                    
                        <select name="post_id" class="form-control" id="post_id" required>
                            <option disabled selected>Должность</option>
                            <?php foreach ($this->posts as $post_item): ?> 
                                <?php if ($post_item['id'] == $this->user['post_id']): ?>
                                    <option selected value="<?= $post_item['id'] ?>"><?= $post_item['name'] ?></option>
                                <?php else: ?>
                                    <option value="<?= $post_item['id'] ?>"><?= $post_item['name'] ?></option>
                                <?php endif ?>                                
                            <?php endforeach ?>
                        </select>
                    </div>
                    <input type="submit" id="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться" disabled />
                    <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
                </div>
            <?php else: ?>
                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Табельный" name="id_doc" id="id-doc" autocomplete="off" pattern="[0-9]{,5" required autofocus>
                        <label class="login-field-icon fui-user" for="id_doc"></label>                    
                    </div>
                    <div class="control-group input-wrapper">
                        <input type="text" class="login-field " placeholder="Логин" name="login" id="login" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="login"></label>

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
                    <input type="submit" id="submit" class="btn btn-primary btn-large btn-block" value="Зарегистрироваться" disabled />
                    <a class="login-link" href="/auth">Уже зарегистрированы? Войти.</a>
                </div>

            <?php endif ?>

        </div>
    </div>
</form>
