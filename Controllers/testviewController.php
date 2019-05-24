<?php

/** Autoloading The required Classes **/

use Core\Core\C_Base;
use Core\Core\Redirect;

class testviewController extends C_Base
  {
  	function __construct( $tile )
  	{
      /** Loading the corresponding Model class **/
  		$this->model = new $tile;
  	}

  	public function index()
  	{
      
      Init::view('testview' , array(
'posts' => ['post1','post2'],
'comments' => ['comment1','comment2']
)); //->with('response', $this->model->getUsers());
  	}

    public function create(){
        
    }

}
 ?>
