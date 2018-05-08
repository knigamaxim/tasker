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
                    <option>Пункт 1</option>
                    <option>Пункт 2</option>
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
                    <option>Пункт 1</option>
                    <option>Пункт 2</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Добавить"></td>
        </tr>
    </table>
</form>