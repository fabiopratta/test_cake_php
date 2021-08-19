<?php
$this->assign('titlePage', "Vendedores");
$this->Html->script('Vendedore/index.js', array('inline' => false));
?>
<div class="row">
	<div>
		<button type="button" class="btn btn-primary" data-bind='click: buttonNovoVendendor'>Novo Vendedor</button>
		<!-- Modal -->
		<div class="modal fade" id="novoVendedorModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="titleModal">Novo Vendedor</h5>
						<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
					</div>
					<div class="modal-body">
						<form>
							<input type="hidden" class="form-control" id="id">
							<div class="mb-3">
								<label for="nome" class="form-label">Nome</label>
								<input type="text" class="form-control" id="nome">
							</div>
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="email" class="form-control" id="email" aria-describedby="emailHelp">
								<div id="emailHelp" class="form-text">Nunca compartilhamos seu email.</div>
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
						<button type="button" class="btn btn-primary" id="buttonCadastro" data-bind='click: cadastrarVendedor'>Cadastrar</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<table class="table table-striped" data-bind='visible: vendedores().length > 0'>
		<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Nome</th>
			<th scope="col">Email</th>
			<th scope="col">Ação</th>
		</tr>
		</thead>
		<tbody data-bind='foreach: vendedores'>
		<tr>
			<th data-bind='text: id'>1</th>
			<td data-bind='text: nome'></td>
			<td data-bind='text: email'></td>
			<td>
				<button data-bind='click: $root.removeVendedor' type="button" class="btn btn-danger btn-sm">
					<i class="bi bi-trash-fill"></i>
				</button>
				<button data-bind='click: $root.alterarVendedor' type="button" class="btn btn-warning btn-sm">
					<i class="bi bi-pen-fill"></i>
				</button>
			</td>
		</tr>
		</tbody>
	</table>
</div>
