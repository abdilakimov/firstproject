<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="smart sayt.css">
</head>
<body>

<div class="modal-main">
    <h1>Sign In</h1>
    <form action="register.php" method="POST">
        <input type="text" name="email" placeholder="Почта или телефон">
        <input type="text" name="full_name" placeholder="Полное имя">
        <input type="text" name="nickname" placeholder="Nickname">
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="password" name="password2" placeholder="Подтвердить пароль">
        <!-- <h2 class="text-danger">Толық енгіз!</h2> -->

        <?php
        if (isset($_GET['error'])) {
            $error = $_GET['error'];
            if ($error == 1) {
                echo '<p class="error">Толық енгіз</p>';
            } elseif ($error == 2) {
                echo '<p class="error">Пароль кате!</p>';
            } elseif ($error == 3) {
                echo '<p class="error">Тіркелген аккаунт</p>';
            }
        } elseif (isset($_GET['success'])) {
            $success = $_GET['success'];
            if ($success == 1) {
                echo '<p class="success">Registration successful!</p>';
            } elseif ($success == 4) {
                echo '<p class="error">Registration failed. Please try again.</p>';
            }
        }
        ?>
        <button type="submit">Sign In</button>
        <a href="http://bekk/smart%20sayt.html#">Sign Up</a>
    </form>
</div>

</body>
</html>
