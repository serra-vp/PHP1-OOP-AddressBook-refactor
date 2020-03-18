<?php error_reporting(1); ?>

<?php 
//Inlude the Query class here ..
include "./Objects/Query.php";

$self = $_SERVER['PHP_SELF'];

//Default methods

/*
	display()
	insert($_GET)
	update($id,$_GET)
	delete($id)
*/

$query = new Query();
?>


<!-- Your HTML below php code below-->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Address Book V.1.0</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">	
	<style>
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
			font-size: 16px;
		}

		html, body{
			height: 100%;
			width: 100%;
		}

		header{
			border: 1px solid black;
			height: 7%;
		}

		header > nav{
			display: flex;
			height: 100%;
			justify-content: flex-start;
		}

		header > nav > a{
			margin: auto auto auto 15px;
			height: 100%;	
			outline: none;
		}

		.contact-list{
			margin: 0 auto;
			border-radius: 12px;	
			height: 70%;
			width: 75%;
			overflow: auto;
		}

		.add-contact{
			margin: 3% auto auto;
			width: 75%;
			height: 5%;
			display: flex;
			flex-direction: column;
		}

		.add-contact > button{
			align-self: flex-end;
			margin: auto 0;
		}

		.action-column{
			display: flex;
		}

		.btn-group{
			margin: auto;
		}
		
	</style>
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
					foreach($query->display() as $index => $row_data){
						echo '
							<tr>
								<th scope="row">{$index}</th>
								<td scope="row">Mark</td>
								<td scope="row">Otto</td>
								<td scope="row">@mdo</td>
								<td scope="row" class="action-column">
									<div class="btn-group" role="group">
										<button id="btnGroupDrop1" type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Action
										</button>
										<div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
											<a class="dropdown-item" data-toggle="modal" data-target="#edit-contact-modal">Edit</a>
											<a class="dropdown-item" data-toggle="modal" data-target="#delete-contact-modal">Delete</a>
										</div>
										<?php 
											include "./assets/includes/edit-contact-modal.inc.php";
											include "./assets/includes/delete -contact-modal.inc.php";
										?>
									</div>
								</td>
							</tr>
						';
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
