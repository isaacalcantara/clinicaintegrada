<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor' crossorigin='anonymous'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css'>
    <link rel='stylesheet' href='css/style.css'>
    <title>Home</title>
</head>
<body>
    <nav id='menu' class='navbar bg-light container-fluid'>
    <div class='row navbar navbar-expand-lg'>
      <div id='logomarca' class='col'>
        <img src='../assets/imgs/logomarca/logo_sem_bg.png' alt='Logomarca'>
      </div>
      <div class='col d-flex justify-content-end'>
          <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarSupportedContent' aria-controls='navbarSupportedContent' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
          </button>
          <div class='collapse navbar-collapse' id='navbarSupportedContent'>
            <ul class='navbar-nav me-auto mb-2 mb-lg-0'>
              <li class='nav-item'>
                <a class='nav-link active' aria-current='page' href='/home.html'>Consultório</a>
              </li>
              <li class='nav-item'>
                <a class='nav-link' href='#'>Prontuários</a>
              </li>
              <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' data-bs-toggle='dropdown' href='#' role='button' aria-expanded='false'>Configurações</a>
                <ul class='dropdown-menu'>
                  <li><a class='dropdown-item' href='./'>Configurações</a></li>
                  <li><hr class='dropdown-divider'></li>
                  <li><a class='dropdown-item' href='#'>Ajuda</a></li>
                  <li><a class='dropdown-item' href='#'>Fale Conosco</a></li>
                  <li><a class='dropdown-item' href='#'>FAQ</a></li>
                </ul>
              </li>
            </ul>
          </div>
      </div>
    </div>
  </nav>
    <div class='container'>
        <div class='row'>
            <div class='col'>
                <ul class='nav nav-tabs' id='myTab' role='tablist'>
                <a href="?page=cargo-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link " id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="click">Cargos</button>
                    </li>
                </a>
                <a href="?page=especialidade-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="">Especialidades</button>
                </li>
                </a>
                <a href="?page=equipamento-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="">Equipamentos</button>
                </li>
                </a>
                <a href="?page=exame-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="">Exames</button>
                </li>
                </a>
                <a href="?page=funcionario-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="">Funcionários</button>
                </li>
                </a>
                <a href="?page=laudo-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Laudos</button>
                </li>
                </a>
                <a href="?page=material-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Materiais</button>
                </li>
                </a>
                <a href="?page=medicamento-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Medicamentos</button>
                </li>
                </a>
                <a href="?page=profissional-listar" style="text-decoration: none;">
                <li class="nav-item" role="presentation">
                      <button class="nav-link" id="cargo-tab" data-bs-toggle="tab" data-bs-target="#cargo-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="false">Profissionais</button>
                </li>
                </a>

                  </ul>
                  </div>
            </div>
        </div>

        <div class='container mt-5'>
        <div class='row'>
        <div class='col-lg-12'>
        <?php
                    //arquivo de conexão com o banco de dados
                    include('configbd.php');
                    //chamar cada página
                    switch(@$_REQUEST['page']){
                      //cargo
                      case 'cargo-listar':
                        include('pages/cargo-listar.php');
                      break;
                      case 'cargo-cadastrar':
                        include('pages/cargo-cadastrar.php');
                      break;
                      case 'cargo-editar':
                        include('pages/cargo-editar.php');
                      break;
                      case 'cargo-salvar':
                        include('pages/cargo-salvar.php');
                      break;
                      //especialidade
                      case 'especialidade-listar':
                        include('pages/especialidade-listar.php');
                      break;
                      case 'especialidade-cadastrar':
                        include('pages/especialidade-cadastrar.php');
                      break;
                      case 'especialidade-editar':
                        include('pages/especialidade-editar.php');
                      break;
                      case 'especialidade-salvar':
                        include('pages/especialidade-salvar.php');
                      break;
                      // equipamento
                      case 'equipamento-listar':
                        include('pages/equipamento-listar.php');
                      break;
                      case 'equipamento-cadastrar':
                        include('pages/equipamento-cadastrar.php');
                      break;
                      case 'equipamento-editar':
                        include('pages/equipamento-editar.php');
                      break;
                      case 'equipamento-salvar':
                        include('pages/equipamento-salvar.php');
                      break;
                      // exame
                      case 'exame-listar':
                        include('pages/exame-listar.php');
                      case 'exame-cadastrar':
                      break;
                        include('pages/exame-cadastrar.php');
                      break;
                      case 'exame-editar':
                        include('pages/exame-editar.php');
                      break;
                      case 'exame-salvar':
                        include('pages/exame-salvar.php');
                      break;
                      //funcionario
                      case 'funcionario-listar':
                        include('pages/funcionario-listar.php');
                      break;
                      case 'funcionario-cadastrar':
                        include('pages/funcionario-cadastrar.php');
                      break;
                      case 'funcionario-editar':
                        include('pages/funcionario-editar.php');
                      break;
                      case 'funcionario-salvar':
                        include('pages/funcionario-salvar.php');
                      break;
                      // laudo
                      case 'laudo-listar':
                        include('pages/laudo-listar.php');
                      break;
                      case 'laudo-cadastrar':
                        include('pages/laudo-cadastrar.php');
                      break;
                      case 'laudo-editar':
                        include('pages/laudo-editar.php');
                      break;
                      case 'laudo-salvar':
                        include('pages/laudo-salvar.php');
                      break;
                      // material
                      case 'material-listar':
                        include('pages/material-listar.php');
                      break;
                      case 'material-cadastrar':
                        include('pages/material-cadastrar.php');
                      break;
                      case 'material-editar':
                        include('pages/material-editar.php');
                      break;
                      case 'material-salvar':
                        include('pages/material-salvar.php');
                      break;
                      //medicamento
                      case 'medicamento-listar':
                        include('pages/medicamento-listar.php');
                      break;
                      case 'medicamento-cadastrar':
                        include('pages/medicamento-cadastrar.php');
                      break;
                      case 'medicamento-editar':
                        include('pages/medicamento-editar.php');
                      break;
                      case 'medicamento-salvar':
                        include('pages/medicamento-salvar.php');
                      break;
                      //profissional
                      case 'profissional-listar':
                        include('pages/profissional-listar.php');
                      break;
                      case 'profissional-cadastrar':
                        include('pages/profissional-cadastrar.php');
                      break;
                      case 'profissional-editar':
                        include('pages/profissional-editar.php');
                      break;
                      case 'profissional-salvar':
                        include('pages/profissional-salvar.php');
                      break;
                        // default
                      default:
                      include('bem-vindo.php');
                    }
                  ?>
        </div>
      </div>
    </div>

    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js' integrity='sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2' crossorigin='anonymous'></script>
    <script src='js/index.js'></script>
</body>
</html>