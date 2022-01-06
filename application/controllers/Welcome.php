<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth/Auth_model');
        $this->load->model('Admin/Admin_model');
    }
	public function index()
	{
		$data['categories'] = $this->Admin_model->get_all_cat();
		$data['subcategories'] = $this->Admin_model->get_all_subcat();
		$data['slider_data'] = $this->Admin_model->get_slider_data(3);
		$this->load->view('welcome_message',$data);
	}
	// Product page single
	public function product_single_page($product_id)
	{

	}
	// Adbout Us
	public function about_us()
	{

	}
	// Contact page
	public function contact_us()
	{

	}
	// Download Template
	public function download_bro()
	{

	}
	// Category fetching
	public function category_fetching($id)
	{
		echo $id;
	}	
}
