<!DOCTYPE html>
<html lang="ru">
<head>
    <link href="../CSS/LogFormStyles.css" rel="stylesheet">
    <meta charset="UTF-8">
    <title>Форма регистрации/авторизации</title>
</head>
<body>
<div class="formContainer">
    <form action="" method="post">
        <h2>Регистрация</h2>
        <div class="formField multiInput">
            <label for="name">Name</label>
            <input type="text" name="first-name" id="name" placeholder="Имя" value="">
            <input type="text" name="last-name" placeholder="Фамилия">
        </div>
        <div class="formField inputRight">
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="Youremail@gmail.com" value="">
        </div>
        <div class="formField inputRight">
            <label for="email">Passwd</label>
            <input type="password" name="pass" id="pass" placeholder="pswd" value="">
        </div>
        <div class="formField inputRight submitField">
            <input type="submit" value="Зарегестрироваться">
        </div>
    </form>
</div>
</body>
</html>