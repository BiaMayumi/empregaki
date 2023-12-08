<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Usuário</title>
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
  <form action="processa_formulario.php" method="post">
  <label for="nome">Nome:</label>
  <br>
  <input type="text" id="nome" name="nome" required>
  <br>
  <label for="telefone">Telefone:</label>
  <br>
  <input type="tel" id="telefone" name="telefone" placeholder="(xx) xxxxx-xxxx" required>
  <br>
  <label for="estadoCivil">Estado Civil:</label>
  <br>
  <input type="text" id="estadoCivil" name="estadoCivil" required>
  <br>
  <label for="genero">Gênero:</label>
  <br>
  <select id="genero" name="genero">
    <option value="masculino">Masculino</option>
    <option value="feminino">Feminino</option>
    <option value="outro">Outro</option>
  </select>
  <br>
  <label for="endereco">Endereço:</label>
  <br>
  <input type="text" id="endereco" name="endereco" required>
  <br>
  <label for="objetivo">Objetivo Profissional ou Resumo:</label>
  <br>
  <textarea cols="50" rows="10" id="objetivo" name="objetivo" required></textarea>
  <br><br>
  <label for="adicionais">Adicionais:</label>
  <br>
  <textarea cols="30" rows="5" id="adicionais" name="adicionais" required></textarea>
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

