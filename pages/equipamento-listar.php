<?php

    $sql = 'SELECT * FROM equipamento';

    $res = $conn->query($sql) or die($conn->error);

    $qtd = $res->num_rows;

    print '<p>Encontrou <b>'.$qtd.'</b> resultado(s)</p>'; 

    print "<div class='tab-pane fade show active' id='equipamento-tab-pane' role='tabpanel' aria-labelledby='cargo-tab' tabindex='0'>";
                        print "<table class='table table-striped'>";
                            print "<thead class='table-light'>";
                            print "<div class='row mt-1'>";
                                print "<div class='col'>";
                                print "</div>";
                                print "<a class='dropdown-item' href='?page=equipamento-cadastrar'>";
                                print "<div class='col d-flex justify-content-end'>";
                                    print "<button class='btn btn-primary me-1'>
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-file-plus' viewBox='0 0 16 16'>
                                            <path d='M8.5 6a.5.5 0 0 0-1 0v1.5H6a.5.5 0 0 0 0 1h1.5V10a.5.5 0 0 0 1 0V8.5H10a.5.5 0 0 0 0-1H8.5V6z'/>
                                            <path d='M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z'/>
                                        </svg>
                                        Cadastrar
                                    </button>";
                                print "</div>";
                               print  "</a>";
                            print "</div>";
                            if($qtd > 0){
                              print "<tr>";
                                print "<th scope='col'> # </th>";
                                print "<th scope='col'>Descrição</th>";
                                print "<th scope='col'>Custo</th>";
                                print "<th scope='col'>Data de Manutenção</th>";
                                print "<th></th>";
                              print "</tr>";
                            print "</thead>";
                            print "<tbody>";
                            while($row = $res->fetch_object()){
                              print "<tr>";
                                print "<td>".$row->id_equipamento."</td>";
                                print "<td>".$row->nome_equipamento."</td>";
                                print "<td>R$ ".$row->custo_equipamento."</td>";
                                print "<td>".$row->manutencao_equipamento."</td>";
                                print "
                                <td class='d-flex justify-content-end p-3'>
                                    <button class='btn btn-primary me-1' onclick=\"location.href='?page=equipamento-editar&id_equipamento=".$row->id_equipamento."';\">
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil-square' viewBox='0 0 16 16'>
                                            <path d='M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z'/>
                                            <path fill-rule='evenodd' d='M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z'/>
                                          </svg>
                                    </button>
                                    <button class='btn btn-danger me-1' onclick=\"if(confirm('Tem certeza que deseja excluir?')){location.href='?page=equipamento-salvar&acao=excluir&id_equipamento=".$row->id_equipamento."';}else{false;}\">
                                        <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                            <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                          </svg>
                                    </button>
                                </td>
                                ";
                              print "</tr>";
                            }
                            }
?>