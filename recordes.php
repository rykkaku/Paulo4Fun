<h1>Cadastrar Recordes</h1>
<p></p>
<form action="?page=salvar" method="POST">
	<input type="hidden" name="acao" value="cadastrar">
	<div class="form-group">
		<input type="text" name="nome" class="form-control" placeholder="Nome do jogador">
	</div>
	<div class="form-group">
		<input name="numero" type="number" rows="4" class="form-control" placeholder="Pontuação"></input>
	</div>
	<div class="form-group">
		<button type="submit" class="btn btn-dark">Cadastrar</button>
	</div>
</form>