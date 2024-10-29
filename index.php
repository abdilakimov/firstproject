<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>smart sayt</title>
    <link rel="stylesheet" href="smart sayt.css">
</head>
<body>  


    <div class="container1">
        <div class="left-section">
            <div class="logo">logo</div>
            <h1>Письменные курсы</h1>
            <p>Экономия до 50%</p>
            <div class="button" onclick="modalOpen()">Посмотреть все</div>
        </div>
        <div class="right-section">
            <img src="001.jpg" alt="Изображение" class="course-image">
        </div>
    </div>
    
    <!-- <div class="modal" id="modal"> -->
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
        <!-- <a class="x" href="#" onclick="modalClose()">X</a>
     </div> -->

    <!-- Секция с карточками -->
    <div class="container">
        <div class="card">
            <div class="icon-placeholder"></div>
            <h2>Онлайн-классы</h2>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
        <div class="card">
            <div class="icon-placeholder"></div>
            <h2>Рассказывание историй</h2>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
        <div class="card">
            <div class="icon-placeholder"></div>
            <h2>Написание привычек</h2>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
        <div class="card">
            <div class="icon-placeholder"></div>
            <h2>Наши учителя</h2>
            <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
        </div>
    </div>

    <div class="container1">
        <div class="image">
            <img src="002.jpg" alt="Изображение студентов">
        </div>
        <div class="content2">
            <h1>О наших студентах</h1>
            <p>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>


    <header>
        <h1>Онлайн-курсы письма, обучение и сообщество</h1>
        <p>Параграф. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur id suscipit ex.</p>
    </header>
 
    <div class="container0">
        <div class="content">
            <div class="item">
                <h2>01</h2>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
            <div class="item">
                <h2>02</h2>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
            <div class="item">
                <h2>03</h2>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
            <div class="item">
                <h2>04</h2>
                <p>Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
            </div>
            <div class="more">
                <p>БОЛЬШЕ</p>
            </div>
        </div>
        <div class="image-container">
            <img src="002.jpg" alt="изображение">
        </div>
    </div>

    <div class="footer-image-container">
        <img src="003.jpeg" alt="Описание изображения">
    </div>
    
    <div class="creative-background">
        <div class="text-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi.</p>
        </div>
    </div>

    
    <div class="nature-image-container">
        <img src="005.jpg" alt="Как описывать природу" class="nature-image">
        <div class="nature-text">
            <h2>Как описывать природу</h2>
            <h2>Sample text. Lorem ipsum dolor sit amet, consectetur adipiscing elit nullam nunc justo sagittis suscipit ultrices.</h2>
        </div>
        <div class="learn-more-button">УЧИТЬ БОЛЬШЕ</div>
    </div>
    

    <div class="container7">
        <div class="contact-info">
            <h2>ВОПРОСОВ? КОММЕНТАРИИ?</h2>
            <p>Школа письма открыта с 10:00 до 17:00 со вторника по пятницу и с 10:00 до 15:00 в субботу.</p>
            <p>Наш почтовый адрес: 152A Charlotte Street, Peterborough ON</p>
            <p>Телефон: 705-742-3221</p>
            <div class="social-media">
                <a href="#">Facebook</a>
                <a href="#">Instagram</a>
                <a href="#">Twitter</a>
                <a href="#">Pinterest</a>
                <a href="#">Behance</a>
            </div>
        </div>
        <div class="contact-form">
            <input type="text" placeholder="Введите ваше имя" required>
            <input type="email" placeholder="Введите действительный адрес электронной почты" required>
            <textarea placeholder="Введите ваше сообщение" required></textarea>
            <button type="submit">РАЗМЕСТИТЬ</button>
        </div>
    </div>
    <div class="modal" id="modal">
        <div class="modal-main">
             <h1>Sign In</h1>
             <form action="register.php" method="POST">
                <input type="text" name="email" placeholder="Почта или телефон">
                <input type="text" name="full_name" placeholder="Полное имя">
                <input type="text" name="nickname" placeholder="Nickname">
                <input type="password" name="password" placeholder="Введите пароль">
                <input type="password" name="password2" placeholder="Подтвердить пароль">

                <?php
    if (isset($_GET["error"]) && $_GET['error'] == 1){
        ?>
                <h2 class="text-danger">Толық енгіз!</h2>
        <?php
                } else if (isset($_GET["error"]) && $_GET['error'] == 2){
                    ?>
                <h2 class="text-danger">Пароль кате!</h2>
           <?php
                }else if (isset($_GET["error"]) && $_GET['error'] == 3){
                    ?>
                <h2 class="text-danger">Тіркелген аккаунт!</h2>
    <?php
                }
                ?>
    
                <button type="submit">Sign In</button>
                <a href="http://bekk/smart%20sayt.html#">Sign Up</a>
            </form>
        </div>
        <a class="x" href="#" onclick="modalClose()">X</a>
     </div>


<script src="inde.js"></script> 
</body>
</html>
