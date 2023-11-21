<?php
defined('BASEPATH') or exit('No direct script access allowed');


class User_Model extends CI_Model
 {
   
    public function savePartnerData($data){
        $this->load->database();
        try {
            $result = $this->db->insert("partners", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }

    public function updateUserData($data, $id)
    {
        $this->load->database();
        try {
            $result=$this->db->update("partners",$data,"id=".$id."");
            // $result = $this->db->insert("partners", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }

    public function deleteUserData( $id)
    {
        $this->load->database();
        try {
            $result=$this->db->delete("partners",array("id" => $id));
            // $result = $this->db->insert("partners", $data);
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }

    public function checkDuplicate($key_name, $id = null)
    {
      //  print_r($key_name, $id);
      //  error_reporting(E_ERROR | E_PARSE);
      
      $this->load->database();


        try {
            if(isset($id) && !empty($id)){
                $this->db->select('key_name');
                $this->db->from('partners');
                $this->db->where('key_name', $key_name);
                $this->db->where('id !=', $id);
                $query = $this->db->get();      
            }else{
                $this->db->select('key_name');
                $this->db->from('partners');
                $this->db->where('key_name', $key_name);
                $query = $this->db->get();
               
            }
            if ($query->num_rows() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }
// Model function to retrieve all members
public function getAllMembers()
{
    $this->load->database();
    try {
        $this->db->select('id, key_name, image, name, email, education, designation, location');
        $this->db->from('partners');
        $result = $this->db->get()->result_array();
        return $result;
    } catch (Exception $e) {
        return false;
    }
}

// Controller function to fetch all member details and return as JSON
    public function getAllMemberDetails()
    {
        $result = $this->User_Model->getAllMembers();

        if ($result !== false) {
            echo json_encode(array("status" => "success", "data" => $result));
        } else {
            echo json_encode(array("status" => "error", "message" => "Error fetching data"));
        }
    }

    public function getMemberDetails($id)
    {
        $this->load->database();
        try {
            $this->db->select('id, key_name, image, name, email, education, designation, location');
            $this->db->from('partners');
            $this->db->where('id', $id);
            $result = $this->db->get()->row_array();
            // $result = $this->db->get()->result_array();
           
            return $result;
        } catch (Exception $e) {
            echo "Error:" . $e;
            return false;
        }
    }
 }
?>