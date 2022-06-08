<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_funcionario'];
            $cpf = $_POST['cpf_funcionario'];
            $birthdate = $_POST['birthdate_funcionario'];
            $genero = $_POST['genero_funcionario'];
            $email = $_POST['email_funcionario'];
            $cargo = $_POST['cargo_id_cargo'];


            $sql = "INSERT INTO funcionario(nome_funcionario,
                                            cpf_funcionario,
                                            birthdate_funcionario,
                                            genero_funcionario,
                                            email_funcionario,
                                            cargo_id) VALUES ('{$nome}', '{$cpf}', '{$birthdate}', '{$genero}', '{$email}', '{$cargo}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=funcionario-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=funcionario-listar';</script>";
            } 
        break; 
    }
?>