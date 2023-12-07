<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<a href="../home/index.php"><img src="../img/logo.png" alt="Descrição da imagem">
  </a>
<body><br><br>
  <h1>Perfil de Usuário</h1><br><br>
<img src="../img/foto mulher.png" class="mulher" alt="">
<br>
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
</body>
</html>