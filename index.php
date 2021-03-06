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
                  <li><a class='dropdown-item' href='configs.php'>Configurações</a></li>
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
    <div class='container-fluid mt-3'>
        <div class='row'>
            <div class='col-4 mt-1'>
                <div class='row'>
                    <div class='col'>
                        <button class='btn btn-light'>Agenda</button>
                    </div>
                    <div class='col'>
                        <select class='form-select' name='' id=''>
                            <option selected>Especialidade</option>
                        </select>
                    </div>
                    <div class='col'>
                        <select class='form-select' name='' id=''>
                            <option selected>Turno</option>
                        </select>
                    </div>
                </div>
                <div class='container'>
                <div class='row'>
                    <div class='card'>
                        <div class='card-body'>
                            <div class='row'>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 1</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 2</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 3</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 4</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 5</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 6</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 7</button>
                            </div>
                            <div class='col mt-1'>
                                <buttom class='btn btn-light'>Profissional 8</button>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
                <div class='row'>
                    <div class='datepicker'>
                        <div class='datepicker-header'></div>
                    </div>
                </div>
            </div>
            <div class='col-8'>
                <table class='table table-striped'>
                    <thead class='table-light'>
                    <div class='row mt-1'>
                        <div class='col'>
                            
                        </div>
                        <div class='col d-flex justify-content-end'>
                            <button class='btn btn-primary me-1'>Não confirmado</button>
            
                            <button class='btn btn-success me-1'>Confirmado</button>
                       
                            <button class='btn btn-warning me-1' style='color: #FFF;'>Desmarcou</button>
                        
                            <button class='btn btn-danger me-1'>Faltou</button>
                        </div>
                    </div>
                      <tr>
                        <th scope='col'>Horario</th>
                        <th scope='col'>Paciente</th>
                        <th scope='col'>Tipo de Atendimento</th>
                        <th scope='col'>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><buttom class='btn btn-light'>08:00:00</button></td>
                        <td>Paciente 1</td>
                        <td>Consulta | Nutricionista</td>
                        <td> <button class='btn btn-success'>Confirmado</button></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>08:30:00</button></td>
                        <td>Paciente 2</td>
                        <td>Consulta | Nutricionista</td>
                        <td> <button class='btn btn-warning' style='color: #FFF;'>Desmarcou</button></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>09:00:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>09:30:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>10:00:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>10:30:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>11:00:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>11:30:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>12:00:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>12:30:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>13:00:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <td><buttom class='btn btn-light'>13:30:00</button></td>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table>
            </div>
        </div>
    </div>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js' integrity='sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2' crossorigin='anonymous'></script>
    <script src='js/index.js'></script>
    <script src="js/bootstrap.bundle.min.js"></script>    
</body>
</html>