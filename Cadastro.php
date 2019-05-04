<?php
$email = $_POST['email'];
$user = $_POST['user'];
$senha = $_POST['password'];
$nome_time = $_POST['nome_time'];
$connect = mysqli_connect('localhost','admin','123Cartola','cartolacs');
$query = "INSERT INTO usuarios (email,user,senha,nome_time) VALUES ('$email','$user','$senha','$nome_time')";
$insert = mysqli_query($connect,$query);
echo "<script>alert('Cadastrado com sucesso!');location.href=\"index.html\";</script>";
?>
