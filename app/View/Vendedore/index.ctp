<?php
$this->assign('titlePage', "Vendedores");
$this->Html->script('Vendedore/index.js', array('inline' => false));
?>
<table class="table" data-bind='visible: vendedores().length > 0'>
	<thead>
	<tr>
		<th scope="col">#</th>
		<th scope="col">Nome</th>
		<th scope="col">Email</th>
		<th scope="col">Ação</th>
	</tr>
	</thead>
	<tbody data-bind='foreach: vendedores'>
	<tr>
		<th scope="row" data-bind='text: id'>1</th>
		<td data-bind='text: nome'></td>
		<td data-bind='text: email'></td>
		<td></td>
	</tr>
	</tbody>
</table>

