<?php
$login = $_POST['login'];
$senha = $_POST['senha'];
$entrar = $_POST['acessar'];
$connect = mysqli_connect('localhost','admin','123Cartola','cartolacs');
if ($login == ""){
  echo "Vc precisa por um usuário né";
}elseif (isset($entrar)) {
    $verifica = mysqli_query($connect,"SELECT * FROM usuarios WHERE user = '$login' AND senha = '$senha'") or die("erro ao selecionar");
    if (mysqli_num_rows($verifica)<=0){
      echo "Login/Senha incorretos";
      die();
    }else{
      setcookie("login",$login);
      header("Location:acesso.php");
    }
  }
?>
