
<?php
// Include config file
require_once "config.php";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  $name = $_POST['name'];
  $cpf = $_POST['cpf'];
  $address = $_POST['address'];
  $type = $_POST['type'];

  $insert = mysqli_query($conexao, "INSERT INTO usuario (nome, cpf, endereco, tipo) VALUES ('$name', '$cpf', '$address', '$type')");

  if($insert){ 
    $_SESSION['mensagem'] = 'Registro adicionado com sucesso!';
    header('Location: http://localhost/trabalho-tenis/crud/read.php');
    mysqli_close($conexao);
  }  
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/trabalho-tenis/style/styleForm.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Login</title>
</head>

<body class="body-create">
<div class="container quadro-login">
<section class="vh-100">
  <div class="container-fluid h-custom">
    <div class="row d-flex justify-content-center align-items-center h-100">
     
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <h1>Faça Seu Cadastrar</h1>
          </div>

          <div class="divider d-flex align-items-center my-4">
          </div>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Nome</label>
            <input type="text" id="form3Example3" name="name" id="name" class="form-control form-control-lg"placeholder="Nome" required />            
          </div>

          <!-- Password input -->
          <div class="form-outline mb-3">
            <label class="form-label" for="form3Example3">CPF</label>
            <input type="text" id="form3Example3" name="cpf" id="cpf" class="form-control form-control-lg"placeholder="CPF" required/>   
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Endereço</label>
            <input type="text" id="form3Example3" name="address" id="address" class="form-control form-control-lg"placeholder="Endereço" required/>            
          </div>

          <div class="form-outline mb-4">
            <label class="form-label" for="form3Example3">Tipo</label>
            <select class="form-select" name="type" id="type">
                <option value="Colaborador">Colaborador</option>
                <option value="Cliente">Cliente</option>
            </select>           
          </div>

          <div class="d-flex justify-content-between align-items-center">
            <!-- Checkbox -->
          </div>

          <div class="text-center text-lg-start mt-4 pt-2">
            <button type="submit" class="btn btn btn-primary btn-lg"
              style="padding-left: 2.5rem; padding-right: 2.5rem;">Cadastrar</button>
              <a href="http://localhost/trabalho-tenis/crud/read.php">  
                <button type="button" class="btn btn btn-dark btn-lg"
                style="padding-left: 2.5rem; padding-right: 2.5rem;">Cancelar</button>
              </a>
          </div>

        </form>
      </div>
    </div>
  </div>
</section>
</div>

    
</body>
</html>




