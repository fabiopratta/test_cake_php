<?php

App::uses('AppController', 'Controller');
App::uses('ControllerRestInterface', 'Controller');

class VendaController extends AppController
{
	/**
	 * @var string
	 */
	public $name = 'Venda';

	/**
	 * @var string[]
	 */
	public $components = ['RequestHandler'];

	/**
	 * Retornar todos registros no metodo GET {URL}/{CONTROLLER}
	 * @return mixed|void
	 */
	public function index() {
		$vendas = $this->Venda->find('all');
		$this->set(['vendas' => $vendas,'_serialize' => ['vendas']]);
	}

	/**
	 * Retornar um unico registro no metodo GET {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 */
	public function view($id) {
		$vendas = $this->Venda->findById($id);
		$this->set(['vendas' => $vendas,'_serialize' => ['vendas']]);
	}

	/**
	 * incluir dado no metodo POST {URL}/{CONTROLLER}
	 * @return mixed|void
	 * @throws Exception
	 */
	public function add() {
		$this->Venda->create();
		$this->request->data['valor_comissao'] = ($this->request->data['valor_venda'] / 100) * 8.5;
		$this->save($this->request->data);
	}

	/**
	 * editar um unico resgitro no metodo PUT {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 * @throws Exception
	 */
	public function edit($id) {
		$this->Venda->id = $id;
		$this->save($this->request->data);
	}

	/**
	 * deletar um unico resgitro no metodo DELETE {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 */
	public function delete($id) {
		$message = ($this->Venda->delete($id)) ? $this->name.' deletado!' : 'Error';
		$this->set(['message' => $message,'_serialize' => ['message']]);
	}

	/**
	 * @param $request
	 * @throws Exception
	 */
	public function save($request) {
		$this->Venda->set($request);
		$validator = ($this->Venda->validates());
		if($validator) {
			$message['success'] = true;
			$message['data'] = ($this->Venda->save()) ? $request : 'Error';
			$message['data']['id'] = $this->Venda->getLastInsertID();
		}else{
			$message = $this->Venda->validationErrors;
		}
		$this->set(['message' => $message,'_serialize' => ['message']]);
	}
}
