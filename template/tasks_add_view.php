<form method="POST" action="/tasks/save">
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
                <select name="priority">
                    <?php foreach ($this->priority as $priority_item): ?>     
                    <option value="<?= $priority_item['id'] ?>"><?= $priority_item['name'] ?></option>
                    <?php endforeach ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Выполнить до:</td>
            <td><input type="date" name="deadline"></td>
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
                <input type="hidden" name="" value="">
                <input type="submit" value="Добавить">
            </td>
        </tr>
    </table>
    
</form>