<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro de Usuário</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

  <div class="container" style="width: 500px; margin-top: 100px;">
    <div style="text-align: right;">
        <a href="index.php" role="button" class="btn btn-sm btn-primary">Voltar</a>
    </div>
    <h4>Cadastro de Usuário</h4>
    <form onsubmit="return validarSenha();" action="_insert_usuario_externo.php" method="post" style="margin-top: 20px;">
        <div class="form-group">
            <label>Nome</label>
            <input type="text" name="nome" class="form-control" placeholder="Digite seu nome" autocomplete="off" required>
        </div>

        <div class="form-group">
            <label>E-mail</label>
            <input type="email" name="mail" class="form-control" placeholder="Digite seu e-mail" autocomplete="off" required>
        </div>

        <div class="form-group">
        <label>Senha</label>
        <input id="senha" type="password" name="senha" class="form-control" placeholder="Digite a senha" required>
        </div>

        <div class="form-group">
        <label>Repetir Senha</label>
        <input id="repetir_senha" type="password" name="repetir_senha" oninput="validarSenha()" class="form-control" placeholder="Repita a senha" required>
        <small id="msgSenha" class="text-danger d-none">As senhas devem ser iguais!</small>
        </div>

        <div style="text-align: right; margin-top: 10px;">
            <button type="submit" class="btn btn-sm btn-success">Cadastrar</button>
        </div>  
     </form>
 </div>
  
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" 
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0VdN6+WsvLkX8fN6q4py+XoF6p3Kfrwu2DzwrZveV0LcU2gPjL8JYzSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
function validarSenha() {
  var senha = document.getElementById("senha").value;
  var repetir = document.getElementById("repetir_senha").value;
  var msg = document.getElementById("msgSenha");

  if (senha !== repetir) {
    msg.classList.remove("d-none");
    return false;
  } else {
    msg.classList.add("d-none");
    return true;
  }
}
</script>

</body>
</html>