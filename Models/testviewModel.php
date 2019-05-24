<?php
/** Autoloading The required Classes **/

use Core\Core\C_Model;

class testviewModel extends C_Model
{
    function __construct(){
      
    }

    public function getUsers(){
        
$users = [
["name" => "Williams Isaac", "Phone Number" => "090982xxxxxx"],
["name" => "Oji Mike", "Phone Number"=> "080982xxxxxx"]
];
return json_encode($users);
}
  
  public function create($title, $description)
    {
        //connect to the database;
        $conn = $this->connect();
       $result = $conn->insert(array(
                'title' => $title,
                'description' => $description,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ))
            ->into('tasks');
    }

}
 ?>
