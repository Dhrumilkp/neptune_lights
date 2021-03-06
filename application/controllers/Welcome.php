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
		$this->load->view('comingsoon');
	}
	public function landing()
	{
		$data['categories'] = $this->Admin_model->get_all_cat();
		$data['subcategories'] = $this->Admin_model->get_all_subcat();
		$data['slider_data'] = $this->Admin_model->get_slider_data(3);
		$this->load->view('welcome_message',$data);
	}
	// Product page single
	public function product_single_page($product_id)
	{
		$data['product_data'] = $this->Admin_model->fetch_product_data($product_id);
		$this->load->view('productSingal_view',$data);
	}
	// Adbout Us
	public function about_us()
	{

	}
	// Contact page
	public function contact_us()
	{
		$data['contact_us_data'] = $this->Admin_model->getcontactdata();
		$this->load->view('contact_us',$data);
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
	// All product with filter
	public function product_all($type)
	{
		echo $type;
	}
}
