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
		$fetch_address_statement = parent::connect()->prepare("SELECT * FROM address");
		$fetch_address_statement->execute();

		return $fetch_address_statement -> fetchAll();
	}

	public function insert($get)
	{
	  //your insert code here
	  //$get = array($get['contact-name'],$get['contact-number'],$get['contact-email']);
		$insert_contact_statement = parent::connect()->prepare("INSERT INTO address(name,phone,email) VALUES(:name,:phone,:email)");
		$insert_contact_statement->bindParam(':name', $get['contact-name']);
    $insert_contact_statement->bindParam(':phone', $get['contact-number']);
		$insert_contact_statement->bindParam(':email', $get['contact-email']);
		$insert_contact_statement->execute();
		$GLOBALS = ['alert' => true, 'data' => ['icon'=>'success','title'=>'Success','text'=>'Contact added successfuly']];
		return $this;
	  // $insert_contact_statement->execute($get);
	  //header("Location: index.php");
	}

	public function update($id,$get)
	{
	  //your update code here
	  $id = intval($id);
	  //$get = array($get['contact-name'],$get['contact-number'],$get['contact-email'],$id);
		$update_contact_statement = parent::connect()->prepare("UPDATE address SET name=:name,phone=:phone,email=:email WHERE id =:id");
		$update_contact_statement->bindParam(':name', $get['contact-name']);
    $update_contact_statement->bindParam(':phone', $get['contact-number']);
		$update_contact_statement->bindParam(':email', $get['contact-email']);
		$update_contact_statement->bindParam(':id', $id);
		$update_contact_statement->execute(); 
		$GLOBALS = ['alert' => true, 'data' => ['icon'=>'success','title'=>'Success','text'=>'Contact updated successfuly']];
		return $this;
		//$update_contact_statement->execute($get); 
	  //header("Location: index.php");
	}

	public function delete($id)
	{
	  //your delete code
	  $id = intval($id);
		$delete_contact_statement = parent::connect()->prepare("DELETE FROM address WHERE id = :id");
		$delete_contact_statement->bindParam(':id',$id);
		$delete_contact_statement->execute();
		$GLOBALS = ['alert' => true, 'data' => ['icon'=>'success','title'=>'Success','text'=>'Contact deleted successfuly']];
		return $this;
	  // $delete_contact_statement->execute(array($id));
	  //header("Location: index.php");
	}
} 


