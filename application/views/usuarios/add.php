<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar Usuário</h3>

  <form action="<?=base_url(usuarios/add)?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome Usuário</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome e-mail</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="exampleInputEmail1">Nome Usuário</label>
  	  	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome">
          </div>

        </div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar</button>
		<a href="template.html" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>