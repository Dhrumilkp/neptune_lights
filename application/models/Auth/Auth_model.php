<?php 
class Auth_model extends CI_Model
{
    public function auth_user($email,$password)
    {   
        $this->db->select('firstname,lastname,username');
        $this->db->where('username',$email);
        $this->db->where('password',$password);
        $query = $this->db->get('nep_user');
        if($query->num_rows() > 0)
        {
            $result = $query->row_array();
            $response = array(
                'status' => 'success',
                'message' => 'This is reponse message',
                'user_data' => $result
            );
            // Setting users session data
            $this->session->set_userdata($result);
            // Echo it out
            echo json_encode($response);
        }
        else
        {
            $response = array(
                'status' => 'err',
                'message' => 'Invalid username or password'
            );
            echo json_encode($response);
        }
    }
}
