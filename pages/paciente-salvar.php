<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_paciente'];
            $cpf = $_POST['cpf_paciente'];
            $birthdate = $_POST['birthdate_paciente'];
            $genero = $_POST['genero_paciente'];
            $email = $_POST['email_paciente'];


            $sql = "INSERT INTO paciente(nome_paciente,
                                            cpf_paciente,
                                            birthdate_paciente,
                                            genero_paciente,
                                            email_paciente) VALUES ('{$nome}', '{$cpf}', '{$birthdate}', '{$genero}', '{$email}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=paciente-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=paciente-listar';</script>";
            } 
        break; 
    }
?>