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
    $nome = $_POST["nome"];
    $experiencia = $_POST["experiencia"];
    $educacao = $_POST["educacao"];
    $habilidades = $_POST["habilidades"];

    // Inserir dados na tabela do currículo
    $sql = "INSERT INTO curriculo (nome, experiencia, educacao, habilidades) VALUES ('$nome', '$experiencia', '$educacao', '$habilidades')";

    if ($conn->query($sql) === TRUE) {
        echo "Dados do currículo inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados do currículo: " . $conn->error;
    }
}

// Fechar a conexão
$conn->close();
?>
