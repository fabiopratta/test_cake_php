<?php
$this->assign('titlePage', "Vendedores");
$this->Html->script('Vendedore/index.js', array('inline' => false));
?>
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

