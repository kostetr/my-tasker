<script>
    var passError = "<?php echo $_SESSION['Errors']['registr']['pass'] ?>";
    var loginError = "<?php echo $_SESSION['Errors']['registr']['login'] ?>";
    var secretPassError = "<?php echo $_SESSION['Errors']['registr']['secretPass'] ?>";
    var idDocError = "<?php echo $_SESSION['Errors']['registr']['idDoc'] ?>";
</script>
<form method="post" action="adduser" id="registerForm">
    <div class="login">
        <div class="login-screen">
            <div class="app-title">
                <h1>Регистрация</h1>
            </div>
            <?php if ($_SESSION['Errors']['registr'] !== null): ?>
                <div class="alert alert-danger alert-registr" role="alert">Ошибки:
                    <?php foreach ($_SESSION['Errors']['registr'] as $error_item): ?>
                    <p><?= $error_item ?></p>
                    <?php endforeach ?>
                </div>

                <div class="login-form">
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Табельный" name="id_doc" id="id-doc" value="<?=  $_SESSION['user']['id_doc'] ?>" autocomplete="off" pattern="[0-9]{,5" required autofocus>
                        <label class="login-field-icon fui-user" for="id_doc"></label>                    
                    </div>
                    <div class="control-group input-wrapper">
                        <input type="text" class="login-field " placeholder="Логин" name="login" id="login" value="<?=  $_SESSION['user']['login'] ?>" autocomplete="off">
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
                        <input type="text" class="login-field" placeholder="Фамилия" name="surname" id="surname" value="<?=  $_SESSION['user']['surname'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="surname"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Имя" name="name" id="name" value="<?=  $_SESSION['user']['name'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="name"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Отчество" name="patronymic" id="patronymic" value="<?=  $_SESSION['user']['patronymic'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="patronymic"></label>
                    </div>
                    <div class="control-group" data-provide="datepicker">
                        <input type="text" class="login-field" placeholder="дд-мм-гггг" name="birthday" id="birthday" value="<?=  $_SESSION['user']['birthday'] ?>" autocomplete="off" required>
                        <label class="login-field-icon fui-user" for="birthday"></label>
                    </div>
                    <div class="control-group">
                        <input type="text" class="login-field" placeholder="Телефон" name="phone" id="phone" value="<?=  $_SESSION['user']['phone'] ?>" autocomplete="off" required>
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
                                <?php if ($gender_item['id'] ==  $_SESSION['user']['gender_id']): ?>
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
                                <?php if ($post_item['id'] ==  $_SESSION['user']['post_id']): ?>
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
