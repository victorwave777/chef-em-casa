<?php

 $pageInfo = array(
  'title' => 'Cadastro - Chef em Casa',
  'description' => 'Cadastre-se no Chef em Casa.',
  'pageName' => 'register',
);

$pageName = $pageInfo['pageName'];
include_once(__DIR__ . '/components/public/header.php');
?>

<main class="container py-5">
  <div class="row justify-content-center">
    <div class="col-md-8 col-lg-6">
      <div class="card shadow">
        <div class="card-body">
          <h2 class="text-center mb-4">Cadastre-se</h2>
          
          <!-- Formulário de Cadastro -->
          <form action="requests/register_post.php" method="POST">
            <div class="mb-3">
              <label for="name" class="form-label">Nome completo</label>
              <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">E-mail</label>
              <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Senha</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
          </form>
          
          <div class="text-center mt-3">
            <p>Já tem uma conta? <a href="login.php">Faça login aqui.</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</main>

<?php
  include_once(__DIR__ . '/components/public/footer.php');
?>
