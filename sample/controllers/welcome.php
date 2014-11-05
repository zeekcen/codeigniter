<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		/*
		// 测试config
		$this->config->load('test', TRUE);
		$test = $this->config->item('test');
		var_dump($test);
		*/

		/*
		// 测试辅助函数
		$this->load->helper('test');
		test();
		*/

		/*
		// 测试语言类
		$this->lang->load('test', 'english');
		echo $this->lang->line('test_lang');
		*/

		// 测试加载类库
		/*
		$this->load->library('myclass', array('test_param1', 'test_param2'));
		$this->myclass->test();
		*/
		/*
		$this->load->library('email');
		$this->email->send();
		*/
		$this->load->model('test', '_Mtest');
		$this->_Mtest->test();
		//$this->load->view('welcome_message');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
