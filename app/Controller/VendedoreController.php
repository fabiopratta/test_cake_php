<?php

App::uses('AppController', 'Controller');
App::uses('ControllerRestInterface', 'Controller');


class VendedoreController extends AppController implements ControllerRestInterface
{
	/**
	 * name controller / Model
	 * @var string
	 */
	public $name = 'Vendedore';

	/**
	 * @var string[]
	 */
	public $components = ['RequestHandler'];

	/**
	 * Retornar todos registros no metodo GET {URL}/{CONTROLLER}
	 * @return mixed|void
	 */
	public function index() {
		$vendedores = $this->Vendedore->find('all');
		$this->set(['vendedores' => $vendedores,'_serialize' => ['vendedores']]);
	}

	/**
	 * Retornar um unico registro no metodo GET {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 */
	public function view($id) {
		$vendedor = $this->Vendedore->findById($id);
		$this->set(['vendedor' => $vendedor,'_serialize' => ['vendedor']]);
	}

	/**
	 * incluir dado no metodo POST {URL}/{CONTROLLER}
	 * @return mixed|void
	 * @throws Exception
	 */
	public function add() {
		$this->Vendedore->create();
		$this->save($this->request->data);
	}

	/**
	 * editar um unico resgitro no metodo PUT {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 * @throws Exception
	 */
	public function edit($id) {
		$this->Vendedore->id = $id;
		$this->Vendedore->set($this->request->data);
		$this->save($this->request->data);
	}

	/**
	 * deletar um unico resgitro no metodo DELETE {URL}/{CONTROLLER}/{ID}
	 * @param $id
	 * @return mixed|void
	 */
	public function delete($id) {
		$message = ($this->Vendedore->delete($id)) ? $this->name.' deletado!' : 'Error';
		$this->set(['message' => $message,'_serialize' => ['message']]);
	}

	/**
	 * @param $request
	 * @throws Exception
	 */
	public function save($request) {
		$this->Vendedore->set($request);
		$validator = ($this->Vendedore->validates());
		if($validator) {
			$message = ($this->Vendedore->save()) ? $this->name.' Salvo!' : 'Error';
		}else{
			$message = $this->Vendedore->validationErrors;
		}
		$this->set(['message' => $message,'_serialize' => ['message']]);
	}

}
