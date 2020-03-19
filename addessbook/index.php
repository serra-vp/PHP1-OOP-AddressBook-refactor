<?php error_reporting(1); ?>

<?php 
//Inlude the Query class here ..
include "Objects/Query.php";

$self = $_SERVER['PHP_SELF'];

//Default methods
	$query = new Query();
	//insert($_GET)
	if(isset($_REQUEST['add-btn'])){
	  array_splice($_POST,-1,1);
	  $query->insert($_POST);
	}
	//update($id,$_GET)
	elseif(isset($_REQUEST['update-btn'])){
	  $id = $_POST['update-btn'];
	  array_splice($_POST,-1,1);
	  $query->update($id,$_POST);
	}
	//delete($id)
	elseif(isset($_REQUEST['delete-btn'])){
	  $id = $_POST['delete-btn'];
	  $query->delete($id);
	}
	//display()
	$contact_list_array = $query->display();
?>


<!-- Your HTML below php code below-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Address Book V.1.0</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
	<header>
		<nav class="navbar navbar-dark bg-dark">
			<a class="navbar-brand" href="#">
				<img src="assets/images/imageonline-co-invertedimage.png" width="30" height="30" class="d-inline-block align-top" alt="">
			</a>
		</nav>
	</header>
	<div class="add-contact">
		<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#add-contact-modal">
			Add Contact
		</button>
		<?php include "./assets/includes/add-contact-modal.inc.php"?>
	</div>
	<div class="contact-list">
		<table class="table table-hover table-bordered">
			<thead class="thead-dark">
				<tr>
					<th scope="col">#</th>
					<th scope="col">Name</th>
					<th scope="col">Phone Number</th>
					<th scope="col">Email</th>
					<th scope="col"></th>
				</tr>
			</thead>
			<tbody>
				<?php
					foreach($contact_list_array as $index => $row_data){
				?>
					<tr>
						<th scope="row"><?php echo ++$index ?></th>
						<td scope="row"><?php echo $row_data['name'] ?></td>
						<td scope="row"><?php echo $row_data['phone'] ?></td>
						<td scope="row"><?php echo $row_data['email'] ?></td>
						<td scope="row" class="action-column">
							<div class="btn-group" role="group">
								<button id="btnGroupDrop1" type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Action
								</button>
								<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
									<a class="dropdown-item" data-toggle="modal" data-target="#edit-contact-modal-<?php echo $index ?>">Edit</a>
									<a class="dropdown-item" data-toggle="modal" data-target="#delete-contact-modal-<?php echo $index ?>">Delete</a>
								</div>
								<?php 
									include "./assets/includes/edit-contact-modal.inc.php";
									include "./assets/includes/delete-contact-modal.inc.php";
								?>
							</div>
						</td>
					</tr>
				<?php
					}
				?>
			</tbody>
		</table>
	</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
