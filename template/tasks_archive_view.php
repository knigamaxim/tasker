<h2 style="text-align: center"> Архив выполненных задач</h2>
<table>
             <tr>
                 <th>Название</th>
                 <th>Описание</th>
                 <th>Статус</th>
                 <th>Приоритет</th>
                 <th>Выдано</th>
                 <th>Выполнено</th>
                 <th>Добавлено</th>
                 
             </tr>
             <?php 
             $i=1;
             foreach ($this->tasks as $task_item):?>
             <tr>
                 <td><?= $task_item['name'] ?></td>
                 <td><?= $task_item['description'] ?></td>
                 <td><?= $task_item['status.name'] ?></td>
                 <td><?= $task_item['priority.name'] ?></td>
                 <td><?= $task_item['start_date'] ?></td>
                 <td><?= $task_item['deadline'] ?></td>
                 <td><?= $task_item['users.name'] ?></td>
                 
             </tr>
             <?php $i++?>
                <?php endforeach ?>
         </table>
     
         <p>