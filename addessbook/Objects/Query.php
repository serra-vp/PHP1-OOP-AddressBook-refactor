<?php 

//Include Connection class here..

Class Query extends Connection {
	
	public function __construct()
	{
	   parent::_construct();
	}

	public function display()
	{
	  //your select code here
	}

	public function insert($get)
	{
	  //your insert code here
	}

	public function update($id,$get)
	{
	 //your update code here
	}

	public function delete($id)
	{
	 //your delete code
	}
} 


