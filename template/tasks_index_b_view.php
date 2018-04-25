<h2> Не подтверждено</h2>
<table>
             <tr>
                 <th>Название</th>
                 <th>Описание</th>
                 <th>Статус</th>
                 <th>Приоритет</th>
                 <th>Выдано</th>
                 <th>Выполнить до</th>
                 <th>Добавлено</th>
                 <th>Удалить</th>
             </tr>
             <?php 
             $i=1;
             foreach ($this->tasks as $task_item):?>
             <tr>
                 <td>><?= $task_item['name'] ?></td>
                 <td>><?= $task_item['description'] ?></td>
                 <td>><?= $task_item['status.name'] ?></td>
                 <td>><?= $task_item['priority.name'] ?></td>
                 <td>><?= $task_item['start_date'] ?></td>
                 <td>><?= $task_item['deadline'] ?></td>
                 <td>><?= $task_item['user.name'] ?></td>
                 <td><form action="delete.php" method="post" >
                         
                         <input type="hidden" name="string_number" value="<?=$i?>"/>
                         <input type="submit" value="delete" />
                     </form>
                 </td>
             </tr>
             <?php $i++?>
                <?php endforeach ?>
         </table>
     
         <p>





