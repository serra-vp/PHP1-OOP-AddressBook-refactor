<?php 

//Include Connection class here..

Class Query extends Connection implements IConnect {
	
	public __construct()
	{

	}

	public function display()
	{
	  //your select code here
	}

	public function insert($post)
	{
	  //your insert code here
	}

	public function update($id,$post)
	{
	 //your update code here
	}

	public function delete($id)
	{
	 //your delete code
	}
} 


