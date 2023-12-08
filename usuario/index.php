<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<a href="../home/index.php"><img src="../home/img/logo.png" alt="Descrição da imagem">
  </a>
<body><br><br>
  <h1>Perfil de Usuário</h1><br>
  <div id="user_data">
    <p><img id="avatar" src="img/usermasc.png" alt="Avatar"></p>
</div>
<label for="genero" class="genero">Escolha o Gênero:</label>
<br>
    <button onclick="changeGender('masculino')" class="generos" id="homem">Homem</button>
    <button onclick="changeGender('feminino')" class="generos">Mulher</button>
    <br><br>
  <br>
<br>
<br><br>
<h4>Biografia</h4>
<br><br>
<h4>Qualidades</h4>
  <form action="processa_formulario.php" method="post">
  <label for="nome">Nome:</label>
  <input type="text" id="nome" name="nome" required><br><br>
  
  <label for="data_nascimento">Data de Nascimento:</label>
  <input type="date" id="data_nascimento" name="data_nascimento" required><br><br>
  
  <label for="telefone">Número de Telefone:</label>
  <input type="tel" id="telefone" name="telefone" required><br><br>
  
  <label for="cidade">Cidade:</label>
  <input type="text" id="cidade" name="cidade" required><br><br>
  
  <label for="genero">Gênero:</label>
  <select id="genero" name="genero">
    <option value="masculino">Masculino</option>
    <option value="feminino">Feminino</option>
    <option value="outro">Outro</option>
  </select><br><br>
  
  <label for="email">E-mail:</label>
  <input type="email" id="email" name="email" required><br><br>
  
  <label for="rede_social">Rede Social:</label>
  <input type="text" id="rede_social" name="rede_social"><br><br>
  
  <label for="idade">Idade:</label>
  <input type="number" id="idade" name="idade" required><br><br>
</form>
<!-- Div para o semi-círculo -->
<div class="semi-circle"></div>

<script>
 function changeGender(gender) {
            var avatarElement = document.getElementById('avatar');
            var randomIndex = Math.floor(Math.random() * 3) + 1;

            if (gender === 'masculino') {
                avatarElement.src = 'img/usermasc' + randomIndex + '.png';
            } else if (gender === 'feminino') {
                avatarElement.src = 'img/userfeminino' + randomIndex + '.png';
            }
        }
</script>
</body>
</html>