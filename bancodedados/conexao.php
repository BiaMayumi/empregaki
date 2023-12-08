<?php
    // Conexão com o banco de dados
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "empregaki";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    // Obter dados do formulário
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $estadoCivil = $_POST["estadoCivil"];
    $genero = $_POST["genero"];
    $endereco = $_POST["endereco"];
    $objetivo = $_POST["objetivo"];
    $adicionais = $_POST["adicionais"];

    // Inserir dados no banco de dados
    $sql = "INSERT INTO Clientes (nome, telefone, estadoCivil, genero, endereco, objetivo, adicionais) VALUES ('$nome', '$telefone', '$estadoCivil', '$genero', '$endereco', '$objetivo', '$adicionais')";

    if ($conn->query($sql) === TRUE) {
        // Redirecionar para a página de usuário
        header("Location: usuario.php");
        exit();
    } else {
        echo "Erro ao inserir dados: " . $conn->error;
    }

    $conn->close();
?>
