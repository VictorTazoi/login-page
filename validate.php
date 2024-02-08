<?php
    $login = $_POST['login']; //Coleta o texto do input com o name="login"
    $password = $_POST['password']; //Coleta o texto do input com o name="password"

    if(($login == 'admin') && ($password == 'admin')){
        echo('Login e senha corretos'); //Se o login e senha estiverem corretos
    }else{
        echo('Login e senha incorretos'); //Se o login e senha estiverem incorretos
    }
?>
