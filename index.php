<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Главная страница</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        a {
            text-decoration: none;
            color: #007BFF;
            margin: 0 10px;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_COOKIE['User'])) {
        echo "Привет, " . $_COOKIE['User'];
    } else {
        echo '<a href="login.php">Вход</a> | <a href="register.php">Регистрация</a>';
    }
    ?>
</body>
</html>