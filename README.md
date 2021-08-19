****# CakePHP

[![Latest Stable Version](https://poser.pugx.org/cakephp/cakephp/v/stable.svg)](https://packagist.org/packages/cakephp/cakephp)
[![License](https://poser.pugx.org/cakephp/cakephp/license.svg)](https://packagist.org/packages/cakephp/cakephp)
[![Bake Status](https://secure.travis-ci.org/cakephp/cakephp.png?branch=master)](https://travis-ci.org/cakephp/cakephp)
[![Code consistency](https://squizlabs.github.io/PHP_CodeSniffer/analysis/cakephp/cakephp/grade.svg)](https://squizlabs.github.io/PHP_CodeSniffer/analysis/cakephp/cakephp/)

## Projeto de Teste em Cake PHP e Knouckout.Js

### Para usar rode os seguintes comandos:
	- docker-compose build
	- docker-compose up -d

### Logo apos acesse a url:
	- localhost:8080

<p>Usando as credenciais root/root e importe o arquivo:</p>
	<code>
	- importer_mysql.sql
	</code>

### agora e so acessar:
	- localhost:8000


## Criar Vendedor
<img id="Criar Vendedor" src="https://img.shields.io/static/v1?label=&message=POST&color=blue"> <code>
{{URL}}/vendedore.json </code>
<br/>Retorna os dados do vendedor inserido

### Parametros
<table>
    <tr>
        <td>nome <code>STRING</code></td>
        <td>obrigatório</td>
    </tr>
    <tr>
        <td>email <code>STRING</code></td>
        <td>obrigatório</td>
    </tr>
</table>

### Resposta
```json
{
  "message": {
	"success": true,
	"data": {
	  "nome": "asd",
	  "email": "asdf@asdf.com.br",
	  "id": "25"
	}
  }
}
```

## Listar todos os Vendedores
<img id="Listar todos os Vendedores" src="https://img.shields.io/static/v1?label=&message=GET&color=green"> <code> {{URL}}/vendedore.json </code>
<br/>Retorna todos os vendedores

### Resposta
```json
{
  "vendedoresArr": [
	{
	  "Vendedore": {
		"id": "1",
		"nome": "Fabio Pratta",
		"email": "fabiobrotas@hotmail.com"
	  },
	  "Venda": [
		{
		  "id": "1",
		  "id_vendedor": "1",
		  "valor_venda": "10.000",
		  "valor_comissao": "3.000"
		},
		{
		  "id": "2",
		  "id_vendedor": "1",
		  "valor_venda": "12.000",
		  "valor_comissao": "4.000"
		}
	  ],
	  "total_venda": 22,
	  "total_comissao": 7
	},.....
```

## Lançar nova Venda
<img id="Lançar nova Venda" src="https://img.shields.io/static/v1?label=&message=POST&color=blue"> <code> {{URL}}/venda.json </code>
<br/>Retorna os dados da venda inserida

### Parametros
<table>
    <tr>
        <td>id_vendedor <code>INT</code></td>
        <td>obrigatório</td>
    </tr>
    <tr>
        <td>valor_venda <code>DECIMAL</code></td>
        <td>obrigatório</td>
    </tr>
</table>

### Resposta
```json
{
  "message": {
	"success": true,
	"data": {
	  "id_vendedor": "4",
	  "valor_venda": "12.00",
	  "valor_comissao": 1.02,
	  "id": "10"
	}
  }
}
```

## Listar todas as vendas de um vendedor
<img id="Listar todas as vendas de um vendedor" src="https://img.shields.io/static/v1?label=&message=GET&color=green"> <code> {{URL}}/vendedore/{ID_VENDEDOR}.json </code>
<br/>Retorna todas as vendas do vendedor

### Resposta
```json
{
  "vendedor": {
	"Vendedore": {
	  "id": "1",
	  "nome": "Fabio Pratta",
	  "email": "fabiobrotas@hotmail.com"
	},
	"Venda": [
	  {
		"id": "1",
		"id_vendedor": "1",
		"valor_venda": "10.000",
		"valor_comissao": "3.000"
	  },
	  {
		"id": "2",
		"id_vendedor": "1",
		"valor_venda": "12.000",
		"valor_comissao": "4.000"
	  }
	],
	"total_venda": 22,
	"total_comissao": 7
  }
}
```

## Some Handy Links

[CakePHP](https://cakephp.org) - The rapid development PHP framework

[KnockOut](https://knockoutjs.com/) - Simplify dynamic JavaScript UIs with the Model-View-View Model (MVVM)

[Bootstrap](https://getbootstrap.com/docs/5.1/getting-started/introduction/) - Quickly design and customize responsive mobile-first sites with Bootstrap****

