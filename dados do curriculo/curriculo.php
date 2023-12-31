<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Currículo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #2D4059;
            color: #fff;


        }

        .container {
            width: 60%;
        }

        label {
            display: block;
            margin-bottom: 8px;
            margin-left: 5px;
            margin-left: 265px;
        }

        nav {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            background: #fff;
            height: 65px;
            padding-left: 20px;
        }

        nav img {
            width: 40px;
            margin-right: 1000px;
        }

        .container {
            width: 60%;
        }

        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 20px;
            border: 1px solid #ccc;
            margin-left: 260px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            box-sizing: border-box;
            border-radius: 50px;
            border: 1px solid #ccc;
            margin-left: 260px;
            border-radius: 200px;
        }

        button {
            background-color: #ffffff;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 585px;
            color: #000;
        }

        h1 {
            text-align: center;
            color: #fff;
        }

        nav {
            height: 65px;
            flex-shrink: 0;
            background: white;
            text-align: center;
            justify-content: center;
        }

        select {
            margin-bottom: 11px;
            margin-left: 265px;
            border-radius: 40px;
            font-size: 14px;
        }
    </style>
</head>

<body>
    <nav>
        <a href="../home/index.php"><img src="img/logo 1.png" alt="Logo"></a>
    </nav>
    <h1>Dados do Currículo</h1>
    <br><br>
    <div class="container">
        <form action="#" method="post">
            <label for="nome">Nome Completo:</label>
            <input type="text" id="nome" name="nome" required>

            <label for="telefone">Telefone:</label>
            <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>

            <label for="estadoCivil">Estado Civil:</label>
            <input type="text" id="estadoCivil" name="estadoCivil" required>


            <label for="genero">Gênero:</label>
            <select id="generoSelect" name="genero" onchange="exibirOpcaoSelecionada()">
                <option value="Homem">Homem</option>
                <option value="Mulher">Mulher</option>
                <option value="Indefinido">Prefiro não dizer</option>
                <option value="Outros">Outros</option>
            </select>

            <input type="text" id="generoTexto" name="genero" readonly required>

            <script>
                function exibirOpcaoSelecionada() {
                    var select = document.getElementById("generoSelect");
                    var texto = document.getElementById("generoTexto");
                    texto.value = select.value;
                }
            </script>


            <label for="endereco">Endereço:</label>
            <input type="text" id="endereco" name="endereco" required>

            <label for="objetivo">Objetivo Profissional ou Resumo:</label>
            <textarea cols="50" rows="10" id="objetivo" name="objetivo" required></textarea>

            <label for="adicionais">Adicionais:</label>
            <textarea cols="30" rows="5" id="adicionais" name="adicionais" required></textarea>

            <a href="../formulariotv/agradecimento.html"><button class="submit">Enviar</button></a>

        </form>
    </div>
</body>

</html>

<?php

