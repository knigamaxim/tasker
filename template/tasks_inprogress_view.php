<h2 style="text-align: center">Выполняемые</h2>
<table>
    <?php
    $i = 1;
    foreach ($this->tasks as $task_item):
        ?>
        <tr>
            <td rowspan="7"><?= $i . '.' ?></td>
            <th>Название:</th>
            <th colspan="3" ><?= $task_item['name'] ?></th>
            <th>Добавлено:</th>
            <td><?= $task_item['users.login'] ?></td>
        </tr>
        <tr>
            <th rowspan="6">Описание:</th>
            <td class='with-br' colspan="3" rowspan="6"><?= $task_item['description'] ?></td>
            <th>Статус:</th>        
            <td><?= $task_item['status.name'] ?></td>
        </tr>
        <tr>
            <th>Приоритет:</th>        
            <td><?= $task_item['priority.name'] ?></td>
        </tr>
        <tr>
            <th>Выдано:</th>        
            <td><?= $this->checkDate($task_item['add_date']) ?></td>
        </tr>
        <tr>
            <th>Выполняется с:</th>        
            <td><?= $this->checkDate($task_item['start_date']) ?></td>
        </tr>
        <tr>
            <th>Выполнить до:</th>        
            <td><?= $this->checkDate($task_item['deadline']) ?> </td>
        </tr>
        <tr>
            <td colspan="2">
                <form method="POST" action="/tasks/changStatus">
                    <input type="hidden" name="task_id" value="<?= $task_item['id'] ?>">
                    <input type="hidden" name="status_id" value="3">
                    <input type="hidden" name="field_bd" value="end_date">                    
                    <input type="hidden" name="redirect" value="tasks/inprogress">                    
                    <input type="submit" value="Завершить задание">
                </form>
            </td> 
        </tr>


        <?php $i++ ?>
    <?php endforeach ?>
</table>
