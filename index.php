<!DOCTYPE html> 
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no"/>
      <title>Login </title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <style>
      body {
        background-color: #f8f9fa;
      }
      .container {
        max-width: 400px;
        margin: 80px auto;
        padding: 20px;
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }
      .form-group {
        margin-bottom: 15px;
      }
      label {
        font-weight: bold;
      }
    </style>
</head>
<body>
    <div class="container" >

      <form>
        <div class="form-group">

        <img src="imagem/cadeado.png" alt="Logo" class="img-fluid" style="display: block; margin: 0 auto 20px; max-width: 100px;">

          <label>Usuário</label>
          <input type="text" name="usuario" class="form-control" placeholder="Digite seu usuario" autocomplete="off" required>
        </div>

        <div class="form-group">
          <label>Senha</label>
          <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" autocomplete="off" required>
        </div>
      </form>
        <div style="text-align: right; margin-top: 20px;">
          <button type="submit" class="btn btn-sm btn-success">Entrar</button>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
