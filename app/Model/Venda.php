<?php

App::uses('AppModel','Model');

class Venda extends AppModel
{
	/**
	 * Nome da entity
	 * @var string
	 */
	public $name = 'Venda';

	/**
	 * relaciona a venda ao vendedor
	 * @var string[][]
	 */
	public $belongsTo =[
		'Vendedore' => [
			'className' => 'Vendedore',
			'foreignKey' => 'id_vendedor'
		]
	];

	/**
	 * Validacoes para a entity
	 * @var array[][]
	 */
	public $validate = [
		'id_vendedor' => [
			'required' => [
				'rule' => ['notBlank'],
				'message' => 'ID do vendedor é obrigátorio!'
			],
		],
		'valor_comissao' => [
			'required' => [
				'rule' => ['notBlank'],
				'message' => 'Valor Comissão é obrigátorio!'
			],
		],
		'valor_venda' => [
			'required' => [
				'rule' => ['notBlank'],
				'message' => 'Valor Venda é obrigátorio!'
			],
		],

	];
}
