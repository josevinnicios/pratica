<h2>Criar Conta</h2>
<!-- Título da página exibido para o usuario -->

<form action="process_register.php" method="POST">
<!-- Início do formulario. od dados serão enviados para 'process_login.php' usando método POST -->

Nome: <input type="text" name="nome" required><br><br>
  <!-- Campo de entrada para o usuario digitar seu nome. Obrigatório (required) -->

  Email: <input type="email" name="email" required><br><br>
  <!-- Campo para o usuario digitar seu email. O navegador valida o formato de email. Obrigatorio-->

  Senha: <input type="password" name="senha" required><br><br>
  <!-- campo para digitar a senha. O tipo "password" oculta os caracteres. Obrigatorio -->

  <button type="submit">Cadastrar</button>
  <!-- botão que envia os dados do formulário ao clicar -->
</form>
<!-- Fim do formulário -->

<p>Já tem conta? <a href="login.php">Entrar</a></p>
<!-- Link para redirecionar à página de login, caso o usuario já tenha conta -->