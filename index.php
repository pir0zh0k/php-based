<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="handler.php" method="POST">
        <label>
            Имя: <br>
            <input type="text" name="name">
        </label>
        <br>
        <br>

        <label>
            Пол:
        </label>
        <br>

        <label>
            Мужской:
            <input type="radio" name="gender" value="male">
        </label>

        <label>Женский:
            <input type="radio" name="gender" value="female">
        </label>

        <br/>
        <br/>

        <label>
            Город:
            <select name="city" id="">
                <option value="msk">Москва</option>
                <option value="spb">Санкт-Петербург</option>
            </select>
        </label>

        <br/>
        <br/>

        <label>Хобби:</label>
        <br/>

        <label>
            <input type="checkbox" name="hobbies[]" value="sport"> Спорт
        </label>
        <br/>

        <label>
            <input type="checkbox" name="hobbies[]" value="music"> Музыка
        </label>
        <br/>

        <label>
            <input type="checkbox" name="hobbies[]" value="books"> Чтение
        </label>
        <br/>
        <br/>
        <br/>

        <label><input type="checkbox" name="agree" value="yes">Согласен с условиями</label>
        <br>

        <input type="hidden" name="secret" value="скрытая информация">

        <button type="submit">Отправить</button>
    </form>
</body>
</html>