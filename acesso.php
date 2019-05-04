<?php
$login_cookie = $_COOKIE['login'];
 if(isset($login_cookie)){
   echo"Bem-Vindo, $login_cookie <br>";
 }else{
   echo"Essas informações não podem ser acessadas";
 }
 ?>
