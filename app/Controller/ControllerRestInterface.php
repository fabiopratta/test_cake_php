<?php

interface ControllerRestInterface {
	/**
	 * Retornar todos resgitros no metodo GET {URL}/{CONTROLLER}
	 * @return mixed
	 */
	public function index();

	/**
	 * Retornar um unico registro no metodo GET {URL}/{CONTROLLER}/{ID}
	 * @return mixed
	 */
	public function view($id);

	/**
	 * incluir dado no metodo POST {URL}/{CONTROLLER}
	 * @return mixed
	 */
	public function add();

	/**
	 * editar um unico resgitro no metodo PUT {URL}/{CONTROLLER}/{ID}
	 * @return mixed
	 */
	public function edit($id);

	/**
	 * deletar um unico resgitro no metodo DELETE {URL}/{CONTROLLER}/{ID}
	 * @return mixed
	 */
	public function delete($id);
}
