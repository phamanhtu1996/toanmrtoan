<?php
/**
 * Created by IntelliJ IDEA.
 * User: phama
 * Date: 02/20/2018
 * Time: 18:08
 */

class Table extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Account');
		$this->load->database();
	}

	public function index() {
		$config['base_url'] = base_url().'index.php/view/index';
		$config['total_rows'] = $this->Account->countAll();
		$config['per_page'] = 20;
		$this->load->library('pagination', $config);
		$start = $this->uri->segment(3);
		$tmp['data'] = $this->Account->getList($config['per_page'], $start);
		$data['content'] = $this->load->view('admin/table/content', $tmp, true);
		$data['sidebar'] = $this->load->view('admin/left-sidebar', '', true);
		$data['navbar'] = $this->load->view('admin/navbar', '', true);
		$data['footer'] = $this->load->view('admin/footer', '', true);
		$this->load->view('admin/header');
		$this->load->view('admin/middle', $data);
		$this->load->view('admin/jquery');
	}

	public function form() {
		$this->load->model('province');
		$this->load->helper('form');
		$this->load->library('form_validation');
		$tmp = $this->province->getName();
		$option = array('');
		foreach ($tmp as $key => $value) {
			array_push($option, $value['name']);
		}
		$tmp['options'] = $option;
		$data['content'] = $this->load->view('admin/table/form', $tmp, true);
		$data['sidebar'] = $this->load->view('admin/left-sidebar', '', true);
		$data['navbar'] = $this->load->view('admin/navbar', '', true);
		$data['footer'] = $this->load->view('admin/footer', '', true);
		$config = array(
			array(
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required|min_length[8]|max_length[16]|is_unique[users.username]',
				'callback' => 'callback_username_check',
				array(
					'required' => 'You have not provided %s.',
					'is_unique' => 'This %s already exists.'
				)
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[8]|max_length[16]'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[users.email]'
			),
			array(
				'field' => 'address',
				'label' => 'Address',
				'rules' => 'required|valid_email|is_unique[users.email]'
			)
		);
		$this->form_validation->set_rules($config);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/header');
			$this->load->view('admin/middle', $data);
			$this->load->view('admin/jquery');
		}
		else {
			echo 'success';
		}
	}

	public function ajax_call() {
		$this->load->library('ajax');
		//echo $as;
		$province = $_POST['prov'];
		//echo "<script type='text/javascript'>alert('$province');</script>";
		$this->load->model('state');
		$this->db->select('provinceid');
		$this->db->where('name', "$province");
		$query = $this->db->get("province");
		$tmp = $query->result_array();
		$data = $this->state->getName($tmp[0]);
		$this->ajax->output_ajax($data);
	}

	public function username_check($user) {

	}
}
