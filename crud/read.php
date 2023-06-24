<?php
require_once "config.php";

$sql = mysqli_query($conexao, "SELECT * FROM usuario");

$usuarios = [];
while($dadosUser = mysqli_fetch_assoc($sql)){
    $usuarios[] = $dadosUser;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="http://localhost/trabalho-tenis/style/styleLogin.css">
    <link rel="stylesheet" href="http://localhost/trabalho-tenis/style/styleForm.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>Listagem</title>
</head>
<body class="body">

<input type="hidden" id="mensagem" value="<?=$_SESSION['mensagem']?>">
<?php $_SESSION['mensagem'] = '';?>
<div class="container quadro-login">
    <section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-50">

        <div class="box-items">
            <div class="buton-add">
                <div>
                    <h1 class="titulo">Registros</h1>
                </div>
                <div>
                    <h3 class="titulo">
                        <a href="http://localhost/trabalho-tenis/crud/create.php">
                            <i class="fa-solid fa-user-plus" style="color: #f5f5f5;"></i>
                        </a>
                    </h3>
                </div>
            </div>

            <div>
                <h3 class="titulo">
                    <a href="http://localhost/trabalho-tenis">
                        <i class="fa-solid fa-house-chimney" style="color: #f0f2f4;"></i>
                    </a>
                </h3>
            </div>
        </div>
            
            
            
          
        
        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">CPF</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Tipo</th>
                        <th scope="col">Ação</th>
                    </tr>
                </thead>
                <tbody>

                <?php foreach($usuarios as $usuario){ ?>
                    <tr>
                        <th scope="row"><?= $usuario['id'] ?></th>
                        <td><?= $usuario['nome'] ?></td>
                        <td><?= $usuario['cpf'] ?></td>
                        <td><?= $usuario['endereco'] ?></td>
                        <td><?= $usuario['tipo'] ?></td>
                        <td class="button-action">
                            <div title="Ver" onclick="visualizarUsuario('<?= $usuario['id'] ?>')">
                                <i class="fa-regular fa-eye" style="color: #eaecf0;"></i>
                            </div>
                            <div title="Editar" onclick="editarUsuario('<?= $usuario['id'] ?>')">
                                <i style="color: white" class="fa-solid fa-user-pen"></i>
                            </div>
                            <div title="Excluir" onclick="deletarUsuario('<?= $usuario['id'] ?>', '<?= $usuario['nome'] ?>')">
                                <i class="fa-solid fa-trash" style="color: #ebedef;"></i>
                            </div> 
                        </td>
                    </tr>
                <?php }?>                  
                    
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </section>
</div>

    
</body>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

$(function() {
    var mensagem = $('#mensagem').val();
    
    if(mensagem != ''){
        Swal.fire({
            position: 'top-center',
            icon: 'success',
            title: mensagem,
            showConfirmButton: false,
            timer: 1500
        })
    }
});

function deletarUsuario(idUsuario, nomeUsuario)
{
    Swal.fire({
        title: 'Você realmente deseja excluir o usuário '+ nomeUsuario +'?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Sim, deletar!',
        cancelButtonText: 'Cancelar'
        }).then((result) => {
        if (result.isConfirmed) {
           window.location.href = 'http://localhost/trabalho-tenis/crud/delete.php?id=' + idUsuario;
        }
    })
}

function editarUsuario(idUsuario)
{
    window.location.href = 'http://localhost/trabalho-tenis/crud/update.php?id=' + idUsuario;
}

function visualizarUsuario(idUsuario)
{
    window.location.href = 'http://localhost/trabalho-tenis/crud/view.php?id=' + idUsuario;
}

</script>
</html>


