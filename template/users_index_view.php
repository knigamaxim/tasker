<table>
        <tr>
        <th>№</th>
        <th>Логин</th>
        <th>Фамилия</th>
        <th>Имя</th>
        <th>Рейтинг</th>
 
    </tr>
<?php 
$i=1;
foreach ($this->users as $users_item) : ?>
    <tr>
        <td><?=$i;?></td>
        <td><?= $users_item['login'] ?></td>
        <td><?= $users_item['surname'] ?></td>
        <td><?= $users_item['name'] ?></td>
        <td></td>
 
    </tr>
<?php 
$i++;
endforeach; ?>
</table>