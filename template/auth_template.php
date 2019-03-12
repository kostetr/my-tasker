<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Авторизация</title>
        <link href="<?= \core\Router::root() ?>/template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?= \core\Router::root() ?>/template/css/main.css" rel="stylesheet" type="text/css"/>
        <style>
            * {
                box-sizing: border-box;
            }

            *:focus {
                outline: none;
            }
            body {
                font-family: Arial;
                background-color: #3498DB;
                padding: 50px;
            }
            .login {
                margin: 20px auto;
                width: 300px;
            }
            .login-screen {
                background-color: #FFF;
                padding: 20px;
                border-radius: 5px
            }

            .app-title {
                text-align: center;
                color: #777;
            }

            .login-form {
                text-align: center;
            }
            .control-group {
                margin-bottom: 10px;                
            }
            .select-width {
                width: 255px;
                margin-bottom: 10px;  
            }

            input {
                text-align: center;
                background-color: #ECF0F1;
                border: 2px solid transparent;
                border-radius: 3px;
                font-size: 16px;
                font-weight: 200;
                padding: 10px 0;
                width: 250px;
                transition: border .5s;
            }

            input:focus {
                border: 2px solid #3498DB;
                box-shadow: none;
            }

            .btn {
                border: 2px solid transparent;
                background: #3498DB;
                color: #ffffff;
                font-size: 16px;
                line-height: 25px;
                padding: 10px 0;
                text-decoration: none;
                text-shadow: none;
                border-radius: 3px;
                box-shadow: none;
                transition: 0.25s;
                display: block;
                width: 250px;
                margin: 0 auto;
            }

            .btn:hover {
                background-color: #2980B9;
            }

            .login-link {
                font-size: 12px;
                color: #444;
                display: block;
                margin-top: 12px;
            }
            /*подсказки*/
            .tooltip:before,
            .tooltip:after {
                display: block;
                position: absolute;
                visibility: hidden;
                opacity: 0; 
                margin-bottom: 15px;
                transition: opacity .7s, margin-bottom .7s;
                left: 50%;
            }

            .tooltip {
                color: #1f8b8a;
                border-bottom: 1px dashed #1f8b8a;
                position: relative;
                cursor: pointer;

            }

            .tooltip:before {
                bottom: 30px;
                left: 50%;
                padding: 10px;
                width: 200px;
                margin-left: -100px;
                color: white;
                background-color: rgba(0,0,0,.85);
                content: attr(data-title);
                border-radius: 5px;
                box-shadow: border-box;
                text-align: center;
            }

            .tooltip:after {
                content: "";
                border-top: 10px solid rgba(0,0,0,.85);
                border-left: 10px solid transparent;
                border-right: 10px solid transparent;
                bottom: 20px;
                margin-left: -10px;
            }

            .tooltip:hover:before,
            .tooltip:hover:after {
                opacity: 1;
                margin-bottom: 0;
                visibility: visible;
            }
            .block {
                width: 400px;
                height: 150px;
                margin: auto;
                position: absolute;
                top: 0;
                left: 0;
                bottom: 0;
                right: 0;
            }
        </style>


    </head>
    <body>
        <main>
            <?php include_once $this->content_view; ?>
        </main>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="<?= \core\Router::root() ?>/template/js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?= \core\Router::root() ?>/template/js/jquery.maskedinput.min.js" type="text/javascript"></script>
        <script src="<?= \core\Router::root() ?>/template/js/main.js" type="text/javascript"></script>
    </body>
</html>
