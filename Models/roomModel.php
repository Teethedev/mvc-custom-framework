<?php
namespace Models;
/** Autoloading The required Classes **/

use Core\Core\C_Model;

class roomModel extends C_Model
{
    function __construct(){
      
    }

    public function rooms()
    {
       $conn = $this->connect();
       $result = $conn->from('rooms')
             ->select()
             ->all();
             
       return $result;
    }
}
 ?>
