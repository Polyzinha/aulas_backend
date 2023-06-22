<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticia extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');
	}

	public function index()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('noticia');
			$crud->set_field_upload("foto");
			$crud->required_fields('titulo','materia');
			$crud->display_as("data_publicacao", "Data da Publicação");
			$crud->display_as("categoria_id", "Categoria");
			$crud->set_relation('categoria_id','categoria','nome');
			$output = $crud->render();
			$this->load->view('example.php',$output);
		}
	}