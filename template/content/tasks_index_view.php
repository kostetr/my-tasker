<div class="card text-center">
    <div class="card-header">
        <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
                <a class="nav-link active" href="<?= \core\Router::root() ?>">Новые задания</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="<?= \core\Router::root() ?>/tasks/progress">Выполняемые</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= \core\Router::root() ?>/tasks/archive">Архив</a>
            </li>
            <li class="nav-item">
                <!--если дописать в линке class="nav-link disabled" будет недоступна ссылка-->
                <a class="nav-link" href="<?= \core\Router::root() ?>/tasks/mytasks">Мои задачи</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= \core\Router::root() ?>/tasks/addtasks">Добавить задачу</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= \core\Router::root() ?>/users/list">Пользователи</a>
            </li>
            <li class="rightbutton">
                <a href="<?= \core\Router::root() ?>/auth/exit" class="btn btn-secondary">Выход</a>
            </li>        
        </ul>
    </div>

    <div class="card-body">
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
<!-- TODO                                    <input type="submit" value="Активировать задание">-->
                        <button type="button" class="btn btn-secondary btn-sm btn-block">Активировать задание</button>
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

<!--  TODO                                  <input type="submit" value="Активировать задание">-->

                        <button type="button" class="btn btn-secondary btn-sm btn-block">Активировать задание</button>
                    </form>
                </td> 
            </tr>

        </table>

    </div>
</div>

