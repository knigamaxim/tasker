<h2 style="text-align: center"> Не подтверждено</h2>
<table>
             <tr>
                 <th>Название</th>
                 <th>Описание</th>
                 <th>Статус </th>
                 <th>Изменить статус</th>
                 <th>Приоритет</th>
                 <th>Выдано</th>
                 <th>Выполнить до</th>
                 <th>Добавлено</th>
                
             </tr>
             <?php
             var_dump($this->tasks); 
             var_dump($_SESSION['login']); 
             var_dump($_SESSION); 
             $i=1;
             foreach ($this->tasks as $task_item):?>
             <tr>
                 <td><?= $task_item['name'] ?></td>
                 <td><?= $task_item['description'] ?></td>
                 <td><?= $task_item['status.name'] ?></td>
                 <td><form action="template/edit.php" method="post" >
                         
                         <input type="hidden" name="task_id" value="<?=$i?>"/>
                         <input type="submit" value="Edit" />
                     </form>
                 </td>
                <td><?= $task_item['priority.name'] ?></td>
                 <td><?= $task_item['start_date'] ?></td>
                 <td><?= $task_item['deadline'] ?></td>
                 <td><?= $task_item['users.name'] ?></td>
                 
             </tr>
             <?php $i++?>
                <?php endforeach ?>
         </table>
     
         <p>