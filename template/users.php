<?php foreach ($this->users as $users_item) : ?>
    <p><?= $users_item['name'] ?></p>
    <p><?= $users_item['surname'] ?></p>
    <p><?= $users_item['login'] ?></p>   
<?php endforeach; ?>