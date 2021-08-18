var vendedorModel = function(vendedores) {
	var self = this;
	self.vendedores = ko.observableArray(vendedores);
};

$.getJSON("http://localhost:8000/vendedore.json", function(data) {
	var arrayVendedores = [];
	$.each(data.vendedoresArr, function(i, item) {
		arrayVendedores.push(item.Vendedore);
	});
	var viewModel = new vendedorModel(arrayVendedores);
	ko.applyBindings(viewModel);
})
