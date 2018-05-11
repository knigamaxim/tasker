<form method="POST" action="/tasks/addTask">
    <table>
        <tr>
            <th colspan="2"><h2>Добавить задачу</h2></th>
        </tr>
        <tr>
            <td>Название:</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Приоритет:</td>
            <td>
                <select name="priority_id">
                    <?php foreach ($this->priority as $priority_item): ?>     
                    <option value="<?= $priority_item['id'] ?>"><?= $priority_item['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Выполнить до:</td>
            <td><input type="date" name="deadline" value="<?= date('Y-m-d') ?>"></td>
        </tr>
        <tr>
            <td colspan="2"><textarea rows="10" cols="45" name="description"></textarea></td>
        </tr>
        <tr>
            <td>Дать задание:</td> 
            <td>             
                <select name="user_id">
                    <?php foreach ($this->users as $users_item): ?>     
                    <option value="<?= $users_item['id'] ?>"><?= $users_item['login'].' - '.$users_item['surname'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="hidden" name="statrus_id" value="1">
                <input type="hidden" name="master_id" value="<?= $_SESSION['id']; ?>">
                <input type="hidden" name="add_date" value="<?= date("Y,m,d"); ?>"> 
                <input type="submit" value="Добавить">
            </td>
        </tr>
    </table>
    
</form>