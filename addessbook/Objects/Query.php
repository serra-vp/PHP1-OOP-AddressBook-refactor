<?php 

//Include Connection class here..
include 'Connection.php';

class Query extends Connection {
	
	public function __construct()
	{
	   parent::__construct();
	}

	public function display()
	{
		//your select code here
		$fetch_address_statement = $this->connect()->prepare("SELECT * FROM address");
		$fetch_address_statement->execute();
		
		return $fetch_address_statement -> fetchAll();
	}

	public function insert($get)
	{
	  //your insert code here
	  $get = array($get['contact-name'],$get['contact-number'],$get['contact-email']);
	  $insert_contact_statement = $this->connect()->prepare("INSERT INTO address(name,phone,email) VALUES(?,?,?)");
	  $insert_contact_statement->execute($get);
	}

	public function update($id,$get)
	{
	  //your update code here
	  $id = intval($id);
	  $get = array($get['contact-name'],$get['contact-number'],$get['contact-email'],$id);
	  $update_contact_statement = $this->connect()->prepare("UPDATE address SET name=?,phone=?,email=? WHERE id = ?");
	  $update_contact_statement->execute($get); 
	}

	public function delete($id)
	{
	  //your delete code
	  $id = intval($id);
	  $delete_contact_statement = $this->connect()->prepare("DELETE FROM address WHERE id = ?");
	  $delete_contact_statement->execute(array($id));
	}
} 


