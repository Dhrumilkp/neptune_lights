<?php 

Class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth/Auth_model');
    }
    public function index()
    {
        if(isset($_SESSION['firstname']))
        {
            redirect(base_url().'home');
        }
        else
        {
            $this->load->view('Admin/Login_view');
        }
    }
    public function auth()
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $headers = apache_request_headers();
        $this->Auth_model->auth_user($email,$password);
    }
    public function home()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->load->view('Admin/Home_view');
        }
        else
        {
            redirect(base_url().'admin');
        }
    }
    public function logout()
    {
        session_destroy();
        redirect(base_url().'admin');
    }
    public function categories()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->load->view('Admin/Categories_view');
        }
        else
        {
            redirect(base_url().'admin');
        }
    }
    public function products()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->load->view('Admin/Product_view');
        }
        else
        {
            redirect(base_url().'admin');
        }
    }
}
