<?php

header("Access-Control-Allow-Origin: *");

$servername = "192.168.15.17";
$username = "marcelod";
$password = "lero";
$database = "tchegames";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Problemas de conexão com o banco de dados.<br> ".mysqli_connect_error());
}

$sql = "SELECT * FROM pedidos INNER JOIN produtos on pedidos.produto_id = produtos.idprodutos;";
$result = $conn->query($sql);
$controle = [];

If ($result->num_rows > 0) {
    while($rows = $result->fetch_assoc()){  
        $controle[] = $rows;};
};

echo json_encode($controle);

mysqli_close($conn);

?>