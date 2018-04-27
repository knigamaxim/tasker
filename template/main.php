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
            <a type="button" href="/auth/exit">Выйти</a>
        </nav>
        <div class="container">
            <table class="table">
                <tr>
                    <td>
                        <nav class="nav flex-column " >
                            <a class="nav-link" href="/tasks/index">Назначенные</a>
                            <a class="nav-link" href="/tasks/my">Выполняемые</a>
                            <a class="nav-link" href="/tasks/appointed">Мои задачи</a>
                            <a class="nav-link" href="/tasks/archive">Архив</a>
                            <a class="nav-link" href="/tasks/add">Добавить задачу</a>
                            <a class="nav-link" href="/index">Назначенные</a>
                            <a class="nav-link" href="/my">Выполняемые</a>
                            <a class="nav-link" href="/appointed">Мои задачи</a>
                            <a class="nav-link" href="/ahchive">Архив</a>
                            <a class="nav-link" href="/add">Добавить задачу</a>
