<h2 style="text-align: center">  Архив выполненных задач</h2>
<?php
$i = 1;
foreach ($this->tasks as $task_item):
    ?>
    <table>
        <tr>
            <td rowspan="5"><?= $i . '.' ?></td>
            <th>Название</th>
            <th colspan="3" ><?= $task_item['name'] ?></th>
            <th>Добавлено</th>
            <td><?= $task_item['users.login'] ?></td>
        </tr>
        <tr>
            <th rowspan="4">Описание</th>
            <td class='with-br' colspan="3" rowspan="4"><?= $task_item['description'] ?></td>
            <th>Статус</th>        
            <td><?= $task_item['status.name'] ?></td>
        </tr>
        <tr>
            <th>Приоритет</th>        
            <td><?= $task_item['priority.name'] ?></td>
        </tr>
        <tr>
            <th>Завершено:</th>        
            <td><?= $task_item['end_date'] ?></td>
        </tr>
        <tr>
            <th>Сроки:</th>        
            <td><?= $task_item['deadline'] ?></td>
        </tr>
    </table>

    <?php $i++ ?>
<?php endforeach ?>



