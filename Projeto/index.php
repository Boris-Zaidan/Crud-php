<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
<nav class="navbar navbar-expand-md bg-body-secondary">
  <div class="container-fluid">
       <a class="navbar-brand" href="#">Cadastro</a>
         <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=novo">Novo Usuário</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=listar">Listar Usuário</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
  <div class="row">
    <div class="col mt-5">
    <?php
        include("config.php");
        if (isset($_REQUEST["page"])) {
            switch ($_REQUEST["page"]) {
                case "novo":
                    include("novo-usuario.php");
                    break;
                case "listar":
                    include("listar-usuario.php");
                    break;
                case "deletar":
                    include("deletar-usuario.php");
                    break;
                case "salvar";
                    include("salvar-usuario.php");
                    break;
                case "editar";
                    include("editar-usuario.php");
                    break;
                default:
                    print "<h1>Página não encontrada.</h1>";
                    break;
        } 
    } else {
        print "<div class='container overflow-hidden col-sm-8 col-md-10 col-lg-8 col-xl-8 col-xxl-6'>       
                  <img src='../img/home.svg' class='img-fluid ' alt='Imagem da Home'>  
                 </div>
"; 
    }
?>

   </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">

</script>
</body>
</html>