<h2 style="text-align: center">Архив выполненных задач</h2>
<table>
    <?php
    $i = 1;
    foreach ($this->tasks as $task_item):
        ?>

        <tr>
            <td rowspan="6"><?= $i . '.' ?></td>
            <th>Название</th>
            <th colspan="3" ><?= $task_item['name'] ?></th>
            <th>Добавлено</th>
            <td><?= $task_item['users.login'] ?></td>
        </tr>
        <tr>
            <th rowspan="5">Описание</th>
            <td class='with-br' colspan="3" rowspan="5"><?= $task_item['description'] ?></td>
            <th>Статус</th>        
            <td><?= $task_item['status.name'] ?></td>
        </tr>
        <tr>
            <th>Выдано:</th>        
            <td><?= $this->checkDate($task_item['add_date']) ?></td>
        </tr>
        <tr>
            <th>В работе с:</th>        
            <td><?= $this->checkDate($task_item['start_date']) ?></td>
        </tr>
        <tr>
            <th>Завершено:</th>        
            <td><?= $this->checkDate($task_item['end_date']) ?></td>
        </tr>
        <tr>
            <th>Сроки:</th>        
            <td><?= $this->checkDate($task_item['deadline']) ?></td>
        </tr>



        <?php $i++ ?>
<?php endforeach ?>
</table>



