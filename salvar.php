<?php
	switch ($_REQUEST["acao"]) {
		case 'cadastrar':
			$sql = "INSERT INTO recordes (nome, numero) VALUES ('".$_POST["nome"]."', '".$_POST["numero"]."')";
			$res = $conn ->query($sql);

			if ($res==true) {
				print "<div class='alert alert-success' role='alert'>
					  Seu Recorde foi cadastrado com sucesso!
					</div>";
			}else{
				print "<div class'alert alert-danger' role='alert'>
					  Seu Recorde não foi efetuado!
					</div>";
			}
			break;
	}	
?>