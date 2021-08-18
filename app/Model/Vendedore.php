<?php

App::uses('AppModel','Model');

class Vendedore extends AppModel
{
	/**
	 *
	 * @var string
	 */
	public $name = 'Vendedore';

	/**
	 * relaciona o vendedor as vendas
	 * @var string[][]
	 */
	public $hasMany = [
		'Venda' => [
			'className' => 'Venda',
			'foreignKey' => 'id_vendedor',
			'dependent' => true
		]
	];

	/**
	 * Validações para a entity
	 * @var array[][]
	 */
	public $validate = [
		'nome' => [
			'required' => [
				'rule' => ['notBlank'],
				'message' => 'Nome é obrigátorio!',
			],
		],
		'email' => [
			'required' => [
				'rule' => ['notBlank'],
				'message' => 'Email é obrigátorio!'
			],
			'isUnique' => [
				'rule' => ['notBlank'],
				'message' => 'Email já esta registrado!',
				'on' => 'create',
			],
			'email' => [
				'rule' => ['email'],
				'message' => 'Digite um email válido!'
			]
		]
	];
}
