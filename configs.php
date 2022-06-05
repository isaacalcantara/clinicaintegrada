<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <nav id="menu" class="navbar bg-light container-fluid">
    <div class="row navbar navbar-expand-lg">
      <div id="logomarca" class="col">
        <img src="../assets/imgs/logomarca/logo_sem_bg.png" alt="Logomarca">
      </div>
      <div class="col d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/home.html">Consultório</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Prontuários</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Configurações</a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="./">Configurações</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Ajuda</a></li>
                  <li><a class="dropdown-item" href="#">Fale Conosco</a></li>
                  <li><a class="dropdown-item" href="#">FAQ</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=cargo-listar">Cargos</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=especialidade-listar">Especialidades</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=equipamento-listar">Equipamentos</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=exame-listar">Exames</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=funcionario-listar">Funcionários</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=laudo-listar">Laudos</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=material-listar">Materiais</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=medicamento-listar">Medicamentos</a>
                    </li>
                    <li class="nav-link" id="especialidade-tab" data-bs-toggle="tab" data-bs-target="#especialidades-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">
                    <a class="dropdown-item" href="?page=profissional-listar">Profissionais</a>
                    </li>

                  </ul>
                  </div>
            </div>
        </div>

        <div class="container mt-5">
        <div class="row">
        <div class="col-lg-12">
        <?php
                    //arquivo de conexão com o banco de dados
                    include('configbd.php');
                    //chamar cada página
                    switch(@$_REQUEST["page"]){
                      //biblioteca
                      case "cargo-listar":
                        include("pages/cargo-listar.php");
                      break;
                      case "especialidade-listar":
                        include("pages/especialidade-listar.php");
                      break;
                      case "equipamento-listar":
                        include("pages/equipamento-listar.php");
                      break;
                      case "exame-listar":
                        include("pages/exame-listar.php");
                      break;
                      case "funcionario-listar":
                        include("pages/funcionario-listar.php");
                      break;
                      case "laudo-listar":
                        include("pages/laudo-listar.php");
                      break;
                      case "material-listar":
                        include("pages/material-listar.php");
                      break;
                      case "medicamento-listar":
                        include("pages/medicamento-listar.php");
                      break;
                      case "profissional-listar":
                        include("pages/profissional-listar.php");
                      break;
                        // default
                    }
                  ?>
        </div>
      </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="js/index.js"></script>
</body>
</html>