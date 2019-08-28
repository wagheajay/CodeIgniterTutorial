<?php


class Users extends CI_Controller
{



   public function view()
   {

      // $this->load->model('user_model');//menually loading model
      // if we auto loading model no need this
      //use autoload.php  /config/autoload.php to load model automatically


      //getting databse data
      //$result = $this->user_model->get_users();
      $data['result'] = $this->user_model->get_users();
      // $result = $this->user_model->get_users();
      // $data['this act like a variable'] here is result is variable of array

      $this->load->view('home_view', $data);

      //echo json_encode($result);


      // foreach ($result as $object) {

      //     echo '<br>';
      //     echo $object->id;
      //     echo $object->username;
      //     echo $object->password;
      // }


   }

   // we can use this to getUserData as json format 
   public function getUserData()
   {

      $result = $this->user_model->get_users();
      echo json_encode($result);
   }



   public function insert()
   {

      $username = "AJJ";
      $password = "1231231235";

      $this->user_model->insert_users(
         [
            "username" => $username,
            "password" => $password
         ]


      );

      echo "user created successfully!";
   }


   //update where id 

   public function update(){

      $id = 5;

      $username = "johnwick";
      $password = "BoogieMan";

      $this->user_model->update_users(
         [
                'username' => $username,
                'password' => $password
         ],$id
      );

      echo 'data updated successfully!';
   }


   public function delete(){

      $id = 4;

      $this->user_model->delete_users(['id'=> $id]);
   }
}
