<?php 
if (isset($_GET['sucesso'])) {
// Verifica se há o parâmetro 'sucesso' na URL (ex: login.php?sucesso=1)
// Se exist, mostra uma mensagem de sucesso
echo "<p style=' color: green; '>Conta criada com sucesso! Faça login.</p>";
}
if (isset($_GET['erro'])) {
  // Verifica se há o parâmetro 'erro' na URL (ex: login.php?erro=senha)

  if ($_GET['erro'] == 'senha') { 
  // Se o erro for 'senha', mostra mensagem de erro para a senha incorreta
  echo "<p style='color: red;' >senha incorreta.</p>";
  }
   elseif ($_GET['erro'] == 'email') {
  // Se o eero for 'email', mostra mensagem de erro para email não encontrado
  echo "<p style='color: red;'>Email não encontrado.</p>";
  }
}
?>

<h2>login</h2>
<!-- Título da página -->

<form action="process_login.php" method="POST">
<!-- Início do formulario. Ao enviar, os dados orão para 'process_login.php' usando método POST -->

  Email: <input type="email" name="email" required><br><br>
  <!-- Campo de entrada para o email. Obrigatório (required) -->

  Senha: <input type="password" name="senha" required><br><br>
  <!-- campo de entrada para senha. Os caracteres são ocultos. Obrigatorio -->

  <button type="submit">Entrar</button>
  <!-- botão que envia o formulário para ser processado -->
</form>
<!-- Fim do formulário -->

<p>não tem conta? <a href="register.php">criar conta</a></p>
<!-- Link para redirecionar à tela de cadastro caso o usuário ainda não tenha conta -->