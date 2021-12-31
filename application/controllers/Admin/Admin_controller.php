<?php 

Class Admin_controller extends CI_Controller
{
    public function index()
    {
       $this->load->view('Admin/Login_view');
    }
}
