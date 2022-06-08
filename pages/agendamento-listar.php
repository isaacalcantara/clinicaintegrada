<?php

    $sql = "SELECT * FROM agendamento AS a
    INNER JOIN paciente AS p ON p.id_paciente = a.paciente_id
    INNER JOIN profissional AS pr ON pr.id_profissional = a.profissional_id
    ORDER BY data_agendamento, hora_agendamento";

    $res = $conn->query($sql) or die($conn->error);

    $qtd = $res->num_rows;

print "<div class='col-8'>";
                print "<table class='table table-striped'>";
                   print " <thead class='table-light'>";
                   print " <div class='row mt-1'>";
                        print "<div class='col'>";
                            
                        print "</div>";
                        print "<div class='col d-flex justify-content-end'>";
                              print "<a href='?page=agendamento-cadastrar'>";
                            print "<button class='btn btn-primary me-1'>Novo Agendamento</button>";
                            print "</a>";
                        print "</div>";
                   print  "</div>";
                   if($qtd > 0){
                     print "<tr>";
                        print "<th scope='col'>Horario</th>";
                        print "<th scope='col'>Paciente</th>";
                        print "<th scope='col'>Profissional</th>";
                        print "<th scope='col'>Data</th>";
                      print "</tr>";
                    print "</thead>";
                    print "<tbody>";
                    while($row = $res->fetch_object()){
                      print "<tr>";
                        print "<td><buttom class='btn btn-light'>".$row->hora_agendamento."</button></td>";
                        print "<td>".$row->nome_paciente."</td>";
                        print "<td>".$row->nome_profissional."</td>";
                        print "<td> <button class='btn btn-danger'>".ExibeData($row->data_agendamento)."</button></td>";
                      print "</tr>";
                    }
                    print "</tbody>";
                  print "</table>";
           print  "</div>";
                   }
?>