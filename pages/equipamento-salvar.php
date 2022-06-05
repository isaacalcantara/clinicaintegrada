<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['nome_equipamento'];
            $custo = $_POST['custo_equipamento'];
            $data_manutencao = $_POST['manutencao_equipamento'];

            $sql = "INSERT INTO equipamento(nome_equipamento, custo_equipamento, manutencao_equipamento) VALUES ('{$nome}', {$custo}, '{$data_manutencao}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=equipamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=equipamento-listar';</script>";
            } 
        break;
        case 'editar':
            $nome = $_POST['nome_equipamento'];
            $custo = $_POST['custo_equipamento'];
            $data_manutencao = $_POST['manutencao_equipamento']; 

			$sql = "UPDATE equipamento SET
						nome_equipamento ='{$nome}',
                        custo_equipamento = {$custo},
                        manutencao_equipamento = '{$data_manutencao}'
					WHERE
						id_equipamento =".$_POST['id_equipamento'];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=equipamento-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=equipamento-listar';</script>";
			}

			break;
			case 'excluir':
                $sql = "DELETE FROM equipamento 
                        WHERE id_equipamento=".$_REQUEST["id_equipamento"];
    
                $res = $conn->query($sql) or die($conn->error);
    
                if($res==true){
                    print "<script>alert('Excluído com sucesso!');</script>";
                    print "<script>location.href='?page=equipamento-listar';</script>";
                }else{
                    print "<script>alert('Não foi possível excluir!');</script>";
                    print "<script>location.href='?page=equipamento-listar';</script>";
                }
                break;
    }
?>