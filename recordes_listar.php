<h1>Recordes</h1>
<?php
	$sql = "SELECT * From recordes";
	$res = $conn->query($sql) or die ($conn->error);
	$qtd = $res->num_rows;

	if ($qtd > 0) {
		print "<p>Encontramos <b>$qtd</b> resultado(s)</p>";
		print "<table class='table table-dark table-hover'>";
		print "<thead>";
			print "<tr>";
			print "<th scope='col'>Nome do Jogador</th>";
			print "<th scope='col'>Recorde</th>";
			print "</tr>";
		print "</thead>";
	while ($row = $res->fetch_object()) {
		print "<tr>";
		print "<td>".$row->nome."</td>";
		print "<td>".$row->numero."</td>";
		print "</tr>";
	}
		print "</table>";
	}else{
		print "<div class='alert alert-danger' role='alert'>
  				Nenhum cadastro encontrado!
		</div>";
	}
?>