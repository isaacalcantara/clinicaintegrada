<?php
    switch ($_REQUEST['acao']){
        case 'cadastrar':
            $nome = $_POST['cargo_nome'];

            $sql = "INSERT INTO cargo(nome) VALUES ('{$nome}')";

            $res = $conn->query($sql) or die($conn->error);

            if($res==true){
				print "<script>alert('Cadastrado com sucesso');</script>";
				print "<script>location.href='?page=cargo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível cadastrar');</script>";
				print "<script>location.href='?page=cargo-listar';</script>";
            } 
        break;
        case 'editar':
			$nome = $_POST["cargo_nome"];

			$sql = "UPDATE cargo SET
						nome ='{$nome}'
					WHERE
						id =".$_POST['cargo_id'];

			$res = $conn->query($sql) or die($conn->error);

			if($res==true){
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=cargo-listar';</script>";
			}else{
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=cargo-listar';</script>";
			}

			break;

            case 'excluir':
                $sql = "DELETE FROM cargo 
                        WHERE id=".$_REQUEST["cargo_id"];
    
                $res = $conn->query($sql) or die($conn->error);
    
                if($res==true){
                    print "<script>alert('Excluído com sucesso!');</script>";
                    print "<script>location.href='?page=cargo-listar';</script>";
                }else{
                    print "<script>alert('Não foi possível excluir!');</script>";
                    print "<script>location.href='?page=cargo-listar';</script>";
                }
                break;

    }
?>