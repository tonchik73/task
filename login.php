<?php
require 'header.php';
require 'func.php';

$username = $_POST['login'] ?? null;
$password = $_POST['password'] ?? null;
// Проверка пользователя
if (checkPassword($username, $password)) {
    session_start();
    $_SESSION['auth'] = true;
    $_SESSION['login'] = $username;
    echo "Вы вошли как " . $_SESSION['login'] . "!";
    header( "refresh:0;url=index.php#sale" );
} 

$auth = $_SESSION['auth'] ?? null;

// Показ формы авторизации
if (!$auth) {?>
<div class="login-page">
    <form action="login.php" class="form" method="post">
        <input name="login" type="text" placeholder="Логин"/>
        <input name="password" type="password" placeholder="Пароль"/>
        <input name="submit" class="button-login" type="submit" value="Войти">
    </form>
</div>
<?php }

// Очистка сессии
if (isset($_REQUEST['loguot'])) {
    unset($_SESSION['auth']);
    unset($_SESSION['login']);
    header("Refresh:0");
}
?>