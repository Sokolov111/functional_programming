<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FTD team</title>
    <link rel="stylesheet" href="all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<body>
    <form onsubmit="registration(event)" id="register">
        <section class="image">
            <div class="logo_contain regi">
                <img src="img/head/logo3.png" alt="ftd" class="logo logo_login">
                <p>Регистрация</p>
            <div class="logo_div register">
                <input type="text" class="logo_input" placeholder="Придумайте ник" id="nick">
                <input type="text" class="logo_input" placeholder="Придумайте логин" id="login">
                <input type="password" class="logo_input" placeholder="Придумайте пароль" id="password">
                <input type="password" class="logo_input" id="repeat_pass" placeholder="Повторите пароль">
                <button type="submit" class="btn_logo" form="register">Зарегистрироваться</button>
            </div>
                <button class="btn_logo btn_l"><a href="index.php" ><i class="fas fa-chevron-right"></i>Назад на главную</a></button>
            </div>
        </section>
    </form>
    <script src="script/register.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" referrerpolicy="no-referrer"></script>
</body>
</html>