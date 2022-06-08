<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $paciente = $_POST['paciente_id_paciente'];
            $profissional = $_POST['profissional_id_profissional'];
            $data = $_POST['data_agendamento'];
            $hora = $_POST['hora_agendamento'];

            $sql = "INSERT INTO agendamento(paciente_id, profissional_id, data_agendamento, hora_agendamento) VALUES ({$paciente}, {$profissional}, '{$data}', '{$hora}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=agendamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=agendamento-listar';</script>";
            } 
        break;
    }
    ?>