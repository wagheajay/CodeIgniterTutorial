<?php

class User_model extends CI_Model {


    public function get_users(){
        

        $query = $this->db->get('users');//database table name

        return $query->result();

    }




    // insert_data is just a variable any name to pass
    public function insert_users($insert_data){


        $this->db->insert('users',$insert_data);
  
      }


      public function update_users($update_data,$id){

       $this->db->where(['id'=> $id]);

        $this->db->update('users',$update_data);
      }


      
    

    
}