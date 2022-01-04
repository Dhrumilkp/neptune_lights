<?php 

class Admin_model extends CI_Model 
{
    public function create_new_main_cat($catname)
    {
        $query = $this->db->get('nep_main_categories');
        if($query->num_rows() > 5)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot create more cat reach out to info@kpitotal.com'
            );
            echo json_encode($response);
        }
        else
        {
            $this->db->where('name',$catname);
            $query = $this->db->get('nep_main_categories');
            if($query->num_rows() > 0)
            {
                $response = array(
                    'status' => 'err',
                    'message' => 'category already present'
                );
                echo json_encode($response);
            }
            else
            {
                // Upload image to a folder
                $create_path = "uploads/cat_img/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                if( $_FILES['cat_img']['name'] != "" ) {
                    $path=$_FILES['cat_img']['name'];
                    $pathto="uploads/cat_img/".$path;
                    move_uploaded_file( $_FILES['cat_img']['tmp_name'],$pathto) or die( "Could not copy file!");
                    // Save the data
                    $data = array(
                        'name' => $catname,
                        'img_path' => $pathto,
                        'created_on' => date("Y/m/d")
                    );
                    $this->db->insert('nep_main_categories',$data);
                    if($this->db->affected_rows() > 0)
                    {
                        $id = $this->db->insert_id();
                        $response = array(
                            'status' => 'success',
                            'message' => 'created new cat',
                            'cat_name' => $catname,
                            'id' => $id
                        );
                        echo json_encode($response);
                    } 
                    else
                    {
                        $response = array(
                            'status' => 'err',
                            'message' => 'failed to create new cat'
                        );
                        echo json_encode($response);
                    }
                }

            }
        } 
    } 
    public function get_all_cat()
    {
        $this->db->limit(5);
        $query = $this->db->get('nep_main_categories');
        if($query -> num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }  
    public function delete_cat_id($id)
    {
        // Check if there is sub cat 
        $this->db->where('main_cat',$id);
        $query = $this->db->get('nep_sub_categories');
        if($query->num_rows() > 0)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot delete the main category you need to delete the sub cat first'
            );
            echo json_encode($response);
        }
        else
        {
            // 
            $this->db->where('id',$id);
            if($this->db->delete('nep_main_categories'))
            {
                $response = array(
                    'status' => 'success'
                );
                echo json_encode($response);
            }
            else
            {
                $response = array(
                    'status' => 'err',
                    'message' => 'Cannot delete this cat'
                );
                echo json_encode($response);
            }
        }
       
    }
    public function add_new_sub_cat_model()
    {
        $query = $this->db->get('nep_sub_categories');
        if($query->num_rows() > 10)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot create more sub cat reach out to info@kpitotal.com'
            );
            echo json_encode($response);
        }
        else
        {
            $this->db->where('name',$_POST['sub_cat_name']);
            $query = $this->db->get('nep_sub_categories');
            if($query->num_rows() > 0)
            {
                $response = array(
                    'status' => 'err',
                    'message' => 'category already present'
                );
                echo json_encode($response);
            }
            else
            {
                // Upload image to folder
                // Upload image to a folder
                $create_path = "uploads/sub_cat_img/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                if( $_FILES['sub_cat_img']['name'] != "" ) {
                    $path=$_FILES['sub_cat_img']['name'];
                    $pathto="uploads/sub_cat_img/".$path;
                    move_uploaded_file( $_FILES['sub_cat_img']['tmp_name'],$pathto) or die( "Could not copy file!");
                    // Push data to database

                    $data = array(
                        'name' => $_POST['sub_cat_name'],
                        'img_path' => $pathto,
                        'created_on' => date("Y/m/d"),
                        'main_cat' => $_POST['main_cat_id']
                    );
                    $this->db->insert('nep_sub_categories',$data);
                    if($this->db->affected_rows() > 0)
                    {
                        $id = $this->db->insert_id();
                        $response = array(
                            'status' => 'success',
                            'message' => 'created new cat'
                        );
                        echo json_encode($response);
                    } 
                    else
                    {
                        $response = array(
                            'status' => 'err',
                            'message' => 'failed to create new cat'
                        );
                        echo json_encode($response);
                    }
                }
                
            }
        }
    }
    public function get_all_subcat()
    {
        $query = $this->db->get('nep_sub_categories');
        if($query -> num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
    public function delete_sub_cata($sub_cat_id)
    {
        // Check for exisiting product add that later

        $this->db->where('id',$sub_cat_id);
        if($this->db->delete('nep_sub_categories'))
        {
            $response = array(
                'status' => 'success'
            );
            echo json_encode($response);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Cannot delete this cat'
            );
            echo json_encode($response);
        }
    }
    public function add_new_product_data()
    {
        if(isset($_FILES))
        {
            // Upload product images
            $create_path = "uploads/products/";
            if (!file_exists($create_path)) {
                mkdir($create_path, 0777, true);
            }
            // Upload product to folder
            if( $_FILES['product_img']['name'] != "" ) {
                // Counting the number of files
                $total = count($_FILES['product_img']);
                // Checking the path
                $create_path = "uploads/products/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                // Creating an empty array
                $img_array = array();
                // Loop through each file
                for( $i=0 ; $i < $total ; $i++ ) {
                    
                    $path=$_FILES['product_img']['name'];
                    $pathto="uploads/products/".time().$path;
                    // Find the issue in the file upload error
                    move_uploaded_file($_FILES['product_img']['tmp_name'],$pathto) or die("Error in upload");
                    array_push($img_array,$pathto);
                }
                $img_paths = serialize($img_array);
                $data = array(
                    'main_cat' => $_POST['select_main_cat_id'],
                    'sub_cat'  => $_POST['select_sub_cat_id'],
                    'title'    => $_POST['product_name'],
                    'description' => $_POST['product_description'],
                    'created_on'  => date("Y/m/d"),
                    'img_paths'  => $img_paths
                );
                $this->db->insert('nep_products',$data);
                if($this->db->affected_rows() > 0)
                {
                    // Product upload compelte
                    $response = array(
                        'status' => 'success',
                        'message' => 'Product uploaded success'
                    );
                    echo json_encode($response);
                }
            }
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'please add photo to the product'
            );
            echo json_encode($response);
        }
    }
    public function get_all_product()
    {
        $query = $this->db->get('nep_products');
        if($query -> num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }
        else
        {
            return false;
        }
    }
}
