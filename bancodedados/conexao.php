<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "empregaki";

// Criar conexão
$conn = new mysqli($localhost, $root, $root, $empregaki);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}
    
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NomeCompleto = $_POST["nome"];
    $Telefone = $_POST["telefone"];
    $EstadoCivil = $_POST["estadoCivil"];
    $Genero = $_POST["genero"];
    $Endereco = $_POST["endereco"];
    $Objetivo = $_POST["objetivo"];
    $Adicionais = $_POST["adicionais"];


    // Inserir dados na tabela do currículo
    $sql = "INSERT INTO curriculo (nome, telefone, estadoCivil, genero, endereco, objetivo, adicionais) VALUES ('$NomeCompleto', '$Telefone', '$EstadoCivil', '$Genero','$Endereco', '$Objetivo', '$Adicionais')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados do currículo inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados do currículo: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
