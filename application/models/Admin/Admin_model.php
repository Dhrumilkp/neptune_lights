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
            if($_FILES['product_img']['name'] != "" ) {
                // Checking the path
                $create_path = "uploads/products/";
                if (!file_exists($create_path)) {
                    mkdir($create_path, 0777, true);
                }
                $imgs_src = array();
                $error=array();
                $extension=array("jpg");
                foreach($_FILES["product_img"]["tmp_name"] as $key=>$tmp_name) {

                    $file_name=time().$_FILES["product_img"]["name"][$key];
                    $file_tmp=$_FILES["product_img"]["tmp_name"][$key];
                    $ext=pathinfo($file_name,PATHINFO_EXTENSION);

                    if(in_array($ext,$extension)) {
                        if(!file_exists("uploads/products/".$file_name)) {
                            move_uploaded_file($file_tmp=$_FILES["product_img"]["tmp_name"][$key],"uploads/products/".$file_name);
                            array_push($imgs_src,'uploads/products/'.$file_name.'');
                        }
                        else {
                            $filename=basename($file_name,$ext);
                            $newFileName=$filename.time().".".$ext;
                            move_uploaded_file($file_tmp=$_FILES["product_img"]["tmp_name"][$key],"uploads/products/".$newFileName);
                            array_push($imgs_src,'uploads/products/'.$file_name.'');
                        }
                    }
                    else {
                        array_push($error,"$file_name, ");
                    }
                }
                $img_paths = serialize($imgs_src);
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
    public function create_new_slider()
    {
        $query = $this->db->get('nep_sliders');
        if($query->num_rows() > 4)
        {
            $response = array(
                'status' => 'err',
                'message' => 'you cannot create more sliders reach out to info@kpitotal.com'
            );
            echo json_encode($response);
        }
        else
        {
            // Upload image to folder
            $create_path = "uploads/sliders/";
            if (!file_exists($create_path)) {
                mkdir($create_path, 0777, true);
            }
            if( $_FILES['slider_img']['name'] != "" ) {
                $path=$_FILES['slider_img']['name'];
                $pathto="uploads/sliders/".$path;
                move_uploaded_file( $_FILES['slider_img']['tmp_name'],$pathto) or die( "Could not copy file!");
                // Push data to database

                $data = array(
                    'caption' => $_POST['slider_cap'],
                    'img_path' => $pathto,
                    'created_on' => date("Y/m/d")
                );
                $this->db->insert('nep_sliders',$data);
                if($this->db->affected_rows() > 0)
                {
                    $id = $this->db->insert_id();
                    $response = array(
                        'status' => 'success',
                        'message' => 'created new slider'
                    );
                    echo json_encode($response);
                } 
                else
                {
                    $response = array(
                        'status' => 'err',
                        'message' => 'failed to create new slider'
                    );
                    echo json_encode($response);
                }
            }  
        }
    }
    public function get_all_sliders()
    {
        $query = $this->db->get('nep_sliders');
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
