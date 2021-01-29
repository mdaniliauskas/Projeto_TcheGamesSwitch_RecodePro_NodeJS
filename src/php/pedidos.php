<?php

header("Access-Control-Allow-Origin: *");

$servername = "localhost";
$username = "root";
$password = "";
$database = "tchegames";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Problemas de conexão com o banco de dados.<br> ".mysqli_connect_error());
};

$nomeClientes = $_POST['nomeClientes'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$produto_id = $_POST['produto_id'];
$quantidade = $_POST['quantidade'];

$sql = "insert into pedidos (nomeClientes, email, telefone, endereco, produto_id, quantidade) values ('$nomeClientes', '$email', '$telefone', '$endereco', '$produto_id', '$quantidade')";
$result = $conn->query($sql);  
mysqli_close($conn);     

?>