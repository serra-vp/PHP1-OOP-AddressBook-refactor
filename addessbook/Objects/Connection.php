<?php 

//Include Interface Iconnect here..
include './IConnect.php';

Class Connection implements IConnect {

	//Variables
	private $host= "localhost";
  private $uname= "root";
  private $pword= "";
  private $databaseName= "address_book_db";

	public function __construct()
	{

	}

	//Add your methods below
	protected function connect(){
    $database = new PDO("mysql:host={$this->host};dbname={$this->databaseName};charset=utf8mb4', {$this->uname}, {$this->pword}");
    $database->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $database;
  }
}

?>
