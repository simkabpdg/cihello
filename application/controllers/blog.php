<?php if ( ! defined('BASEPATH'))
	exit('No direct script access allowed');

class Blog extends CI_Controller {

	function __construct()
	{
		parent::__construct();
	}
	function index()
	{
		$this->load->view("hello_codeigniter");
	}
	function view()
	{
		$data['judul'] = "Judul blog";
		$data['isi'] = "Isi blog";
		$out = $this->load->view("blog_view",$data,true);
		echo $out;
	}
}
/* End of file Blog.php */
/* Location: ./application/controllers/blog.php */
