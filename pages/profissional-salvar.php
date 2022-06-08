<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_profissional'];
            $cpf = $_POST['cpf_profissional'];
            $especialidade = $_POST['especialidade_id_especialidade'];
            $conselho = $_POST['numero_conselho'];


            $sql = "INSERT INTO profissional(nome_profissional,
                                            cpf_profissional,
                                            especialidade_id,
                                            numero_conselho) VALUES ('{$nome}', '{$cpf}', {$especialidade}, {$conselho})";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=profissional-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=profissional-listar';</script>";
            } 
        break; 
    }
?>