var vendedorModel = function(vendedores) {
	var self = this;
	self.vendedores = ko.observableArray(vendedores);

	self.removeVendedor = function(vendedor) {
		$.ajax({
			url: 'http://localhost:8000/vendedore/'+vendedor.id+'.json',
			type: 'DELETE',
			success: function(response) {
				self.vendedores.remove(vendedor);
			}
		});

	};
};

$.getJSON("http://localhost:8000/vendedore.json", function(data) {
	var arrayVendedores = [];
	$.each(data.vendedoresArr, function(i, item) {
		arrayVendedores.push(item.Vendedore);
	});
	var viewModel = new vendedorModel(arrayVendedores);
	ko.applyBindings(viewModel);
})
