<?php foreach ($this->tasks as $task_item) : ?>
    <h2><a href="/tasks/<?= $task_item['id'] ?>"><?= $task_item['name'] ?></a></h2>
    <article><?= $task_item['description'] ?></article>
    <p><?= $task_item['start_date'] ?></p>   
<?php endforeach; ?>

