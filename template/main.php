<!doctype html>
<html lang="ru">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link href="template/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="template/css/main.css" rel="stylesheet" type="text/css"/>

        <title>Задания группы 3.16</title>
        <style>
            .card-header {
                margin-bottom: 15px;
            }
            .in-line {
                white-space: nowrap;
            }

        </style>
    </head>
    <body>

        <main>
            <div class="card text-center">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Active</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                </div>
                <table class="table table-bordered table-sm ">
                    <tr>
                        <td rowspan="6">1.</td>
                        <th>Название</th>
                        <th colspan="3" >Задание №1</th>
                        <th>Добавлено</th>
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <th rowspan="5">Описание</th>
                        <td colspan="3" rowspan="5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </td>
                        <th>Статус</th>        
                        <td>Новое</td>
                    </tr>
                    <tr>
                        <th>Приоритет</th>        
                        <td>Высокий</td>
                    </tr>
                    <tr>
                        <th>Выдано</th>        
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <th class="in-line">Выполнить до:</th>        
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form method="POST" action="/tasks/changStatus">
                                <input type="hidden" name="task_id" value="">
                                <input type="hidden" name="status_id" value="2">
                                <input type="hidden" name="field_bd" value="start_date">
                                <input type="hidden" name="redirect" value="tasks">   
                                <button type="button" class="btn btn-success">Активировать задание</button>
<!--                                <input type="submit" value="Активировать задание">-->
                            </form>
                        </td> 
                    </tr>

                </table>
                <table class="table table-bordered table-sm ">
                    <tr>
                        <td rowspan="6">2.</td>
                        <th>Название</th>
                        <th colspan="3" >Задание №2</th>
                        <th>Добавлено</th>
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <th rowspan="5">Описание</th>
                        <td colspan="3" rowspan="5">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                        </td>
                        <th>Статус</th>        
                        <td>Новое</td>
                    </tr>
                    <tr>
                        <th>Приоритет</th>        
                        <td>Высокий</td>
                    </tr>
                    <tr>
                        <th>Выдано</th>        
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <th class="in-line">Выполнить до:</th>        
                        <td class="in-line">28-04-1988</td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <form method="POST" action="/tasks/changStatus">
                                <input type="hidden" name="task_id" value="">
                                <input type="hidden" name="status_id" value="2">
                                <input type="hidden" name="field_bd" value="start_date">
                                <input type="hidden" name="redirect" value="tasks">   
                                <input type="submit" value="Активировать задание">
                            </form>
                        </td> 
                    </tr>

                </table>
            </div>




        </main>

        <!-- Footer -->
        <footer>
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2018 Copyright:
                <a href="https://mdbootstrap.com/bootstrap-tutorial/"> переделать.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="template/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>