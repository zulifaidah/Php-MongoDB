<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
	
	public $collection = 'users';
	public $fields = array();
	public $limit = 10;
	public $default_order_by = array('username' => 'ASC');
	public $custom_action = array();
	public $url = '';

	public function __construct() {
		parent::__construct();
		$this->url = $this->router->fetch_class();
		$this->set_header();
		$this->set_custom_action();
	}
	
	private function set_header() {
		
		/* set kolom di tabel header */
		$tmp = new stdClass();
		$tmp->type = 'string';
		$tmp->name = 'username';
		array_push($this->fields, $tmp);
		unset($tmp);

		$tmp = new stdClass();
		$tmp->type = 'string';
		$tmp->name = 'email';
		array_push($this->fields, $tmp);
		unset($tmp);

		$tmp = new stdClass();
		$tmp->type = 'boolean';
		$tmp->name = 'isDelete';
		$tmp->button_style = 'danger';
		array_push($this->fields, $tmp);
		unset($tmp);

	}

	private function set_custom_action() {
		/* set button di tabel header */
		$tmp = new stdClass();
		$tmp->name = 'Ubah';
		$tmp->function_name = 'edit';
		$tmp->button_style = 'info';
		$tmp->icon_name = 'fa fa-edit';
		array_push($this->custom_action, $tmp);
		unset($tmp);
		
		$tmp = new stdClass();
		$tmp->name = 'Hapus';
		$tmp->function_name = 'delete';
		$tmp->button_style = 'danger';
		$tmp->icon_name = 'fa fa-trash-o';
		array_push($this->custom_action, $tmp);
		unset($tmp);
	}

	public function index() {
        if ($this->add_on->user_is_login(true)) {
			$this->view();
        } else {
            redirect(base_url());
        }
	}
	
	public function view($offset = 0) {
		$this->generate_view->generate_header($offset);
	}

	public function add() {
		echo 1;
	}

}

