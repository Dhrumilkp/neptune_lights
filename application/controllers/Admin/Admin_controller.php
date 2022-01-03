<?php 

Class Admin_controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth/Auth_model');
        $this->load->model('Admin/Admin_model');
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
            $data['categories'] = $this->Admin_model->get_all_cat();
            $data['subcategories'] = $this->Admin_model->get_all_subcat();
            $this->load->view('Admin/Categories_view',$data);
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
            $data['categories'] = $this->Admin_model->get_all_cat();
            $data['subcategories'] = $this->Admin_model->get_all_subcat();
            if(empty($data['categories']) && empty($data['subcategories']))
            {
                redirect(base_url()."categories");
            }
            else
            {
                $data['product_data'] = $this->Admin_model->get_all_product();
                $this->load->view('Admin/Product_view',$data);
            }
        }
        else
        {
            redirect(base_url().'admin');
        }
    }
    public function createnewmaincat()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->Admin_model->create_new_main_cat($_POST['cat_name']);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Not authorized'
            );
            echo json_encode($response);
        }
    }
    public function delete_cat()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->Admin_model->delete_cat_id($_POST['cat_id']);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Not authorized'
            );
            echo json_encode($response);
        }
    }
    public function add_new_sub_cat()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->Admin_model->add_new_sub_cat_model();
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Not authorized'
            );
            echo json_encode($response);
        }
    }
    public function delete_sub_cat()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->Admin_model->delete_sub_cata($_POST['sub_cat_id']);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Not authorized'
            );
            echo json_encode($response);
        }
    }
    public function upload_new_product()
    {
        if(isset($_SESSION['firstname']))
        {
            $this->Admin_model->add_new_product_data();
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Not authorized'
            );
            echo json_encode($response);
        }
    }
}
