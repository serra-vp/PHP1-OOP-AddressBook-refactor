<?php 

//Include Connection class here..
include './Connection.php';

Class Query extends Connection {
	
	public function __construct()
	{
	   parent::__construct();
	}

	public function display()
	{
		//your select code here
		$fetch_address_statement = $this->connect()->prepare("SELECT * FROM address");
		$fetch_address_statement->execute();
		
		return $fetch_address_statement -> fetch();
		echo '<script>console.log($fetch_address_statement)</script>';

		// $get_test_query = $database -> prepare("SELECT * FROM analysis, test WHERE analysis.analysis_ID = test.test_analysis_ID AND test.test_analysis_ID = ?");
		// $get_test_query -> execute(array($selected_analysis_ID));
		// while($get_test_row = $get_test_query -> fetch(PDO::FETCH_ASSOC)){
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


