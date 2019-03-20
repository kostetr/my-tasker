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
            /*
            sdfsdf
            */
            .input-wrapper {
                display: inline-block;
                position: relative;
            }
            .input-wrapper:hover:after {
                content: attr(data-title);
                position: absolute;
                left: 90%; top: 50%;
                z-index: 1;
                background: #ffffcc;
                font-size: 11px;
                padding: 5px 10px;
                border: 1px solid #000;
                box-shadow: 5px 5px 8px 0px rgba(119, 119, 119, 0.64);
                -moz-box-shadow: 5px 5px 8px 0px rgba(119, 119, 119, 0.64);
                -webkit-box-shadow: 5px 5px 8px 0px rgba(119, 119, 119, 0.64);
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
