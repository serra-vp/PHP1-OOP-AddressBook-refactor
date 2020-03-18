<?php 

//Include Interface Iconnect here..
include 'IConnect.php';

class Connection implements IConnect {

	//Variables
	private $host= "localhost";
  private $uname= "root";
  private $pword= "";
  private $databaseName= "address_book_db";

	public function __construct()
	{

	}

	//Add your methods below
	public function connect(){
    $database = new PDO("mysql:host={$this->host};dbname={$this->databaseName}", $this->uname, $this->pword);
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $database;
  }
}

?>
