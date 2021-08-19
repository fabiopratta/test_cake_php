var vendedorModel = function(vendedores) {
	var self = this;
	self.vendedores = ko.observableArray(vendedores);

	self.buttonNovoVendendor = function () {
		$("#id").val('');
		$("#nome").val('');
		$("#email").val('');
		$("#buttonCadastro").html('Cadastrar');
		$("#titleModal").html('Novo Vendedor');
		showModal();
	}

	//cadastrar vendedor
	self.cadastrarVendedor = function() {
		var nome = $("#nome").val();
		var email = $("#email").val();
		var id = $("#id").val();

		if(nome === "") {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Nome é obrigátorio!'
			});
			return;
		}

		if(email === "") {
			Swal.fire({
				icon: 'error',
				title: 'Oops...',
				text: 'Email é obrigátorio!'
			});
			return;
		}

		var URL = 'http://localhost:8000/vendedore.json';
		var METHOD = 'POST';
		if(id != ""){
			URL = 'http://localhost:8000/vendedore/'+id+'.json'
			METHOD = 'PUT';
		}

		$.ajax({
			url: URL,
			type: METHOD,
			data: {
				nome: nome,
				email: email,
				id: id
			},
			success: function(response) {
				if(response.message.success){
					if(response.message.data.id != null) {
						Swal.fire(
							'Salvo',
							response.message.data.nome + ' salvo com sucesso!',
							'success'
						)
						hideModal();
						self.vendedores.push(response.message.data);
					}else{
						Swal.fire(
							'Editado',
							response.message.data.nome + ' editado com sucesso!',
							'success'
						)
						const findVendedor = vendedores.find( vendedor => vendedor.id === id);
						response.message.data.id = id;
						self.vendedores.replace(findVendedor, response.message.data);
						hideModal();
					}
				}
			}
		});
	};

	//remover o vendedor
	self.removeVendedor = function(vendedor) {
		$.ajax({
			url: 'http://localhost:8000/vendedore/'+vendedor.id+'.json',
			type: 'DELETE',
			success: function(response) {
				Swal.fire(
					'Deletado',
					 vendedor.nome + ' deletado com sucesso!',
					'success'
				)
				self.vendedores.remove(vendedor);
			}
		});
	};


	//alterar o vendedor
	self.alterarVendedor = function(vendedor) {
		$("#nome").val(vendedor.nome);
		$("#email").val(vendedor.email);
		$("#id").val(vendedor.id);
		$("#buttonCadastro").html('Editar');
		$("#titleModal").html('Editar Vendedor');
		showModal();
	};
};

//esconder o modal
function hideModal() {
	var myModalEl = document.getElementById('novoVendedorModal');
	var modal = bootstrap.Modal.getInstance(myModalEl);
	modal.hide();
}

//exibir o modal
function showModal() {
	var myModal = new bootstrap.Modal(document.getElementById('novoVendedorModal'));
	myModal.show()
}

//pegar os vendedores
$.getJSON("http://localhost:8000/vendedore.json", function(data) {
	var arrayVendedores = [];
	if(data){
		$.each(data.vendedoresArr, function(i, item) {
			arrayVendedores.push(item.Vendedore);
		});
		var viewModel = new vendedorModel(arrayVendedores);
		ko.applyBindings(viewModel);
	}
});
