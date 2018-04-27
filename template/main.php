<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Main page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
        <style>
            .container{
                margin: 0;
            }   
        </style>
    </head>
    <body>
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">Личный кабинет</a>
        </nav>
        <div class="container">
            <table class="table">
                <tr>
                    <td>
                        <nav class="nav flex-column " >
<<<<<<< HEAD
                            <a class="nav-link" href="#">Все задачи</a>
                            <a class="nav-link" href="#">Мои задачи</a>
                            <a class="nav-link" href="#">Архив</a>
                            <a class="nav-link" href='#'>Добавить задачу</a>
=======
                            <a class="nav-link" href="/index">Назначенные</a>
                            <a class="nav-link" href="/my">Выполняемые</a>
                            <a class="nav-link" href="/appointed">Мои задачи</a>
                            <a class="nav-link" href="/ahchive">Архив</a>
                            <a class="nav-link" href="/add">Добавить задачу</a>
>>>>>>> 607591410f0f57b003bb6a44b6d121c61e049b01
                            <a class="nav-link" href="#">Все пользователи</a>
                        </nav>
                    </td>
                    <td>
                        <?php include_once 'template' . DIRECTORY_SEPARATOR . $this->content_view ; ?>
                    </td>
                </tr>
            </table>
        </div>
        <nav class="navbar fixed-bottom navbar-dark bg-dark">
            
        </nav>
        <!-- Bootstrap core JavaScript-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>

</html>
