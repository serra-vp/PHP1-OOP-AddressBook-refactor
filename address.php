<?php 
error_reporting(1); 
?>

<html>
 	<head>
 		<title>Address Book V.1.0</title>
 	</head>
 	<body>
 <?php

 // Connects to your Database 
 $conn = mysqli_connect("localhost", "root", "") or die(mysqli_error()); 
 mysqli_select_db($conn, "address_book_db") or die(mysqli_error()); 

//get variables 
$mode = $_GET['mode'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$id = $_GET['id'];
$self = $_SERVER['PHP_SELF'];


if ( $mode=="add") 
 {
		 echo '<h2>Add Contact</h2>
		 <p> 
		 <form action=';
		 echo $self; 
		 echo '
		 method=GET> 
		 <table>
		 <tr><td>Name:</td><td><input type="text" name="name" /></td></tr> 
		 <tr><td>Phone:</td><td><input type="text" name="phone" /></td></tr> 
		 <tr><td>Email:</td><td><input type="text" name="email" /></td></tr> 
		 <tr><td colspan="2" align="center"><input type="submit" /></td></tr> 
		 <input type=hidden name=mode value=added>
		 </table> 
		 </form> <p>';
 } 
 

 if ( $mode=="added") 
 {
 mysqli_query ($conn, "INSERT INTO address (name, phone, email) VALUES ('$name', '$phone', '$email')");
 }



 if ( $mode=="edit") 
 { 
	 echo '<h2>Edit Contact</h2> 
	 <p> 
	 <form action=';
	 echo $self; 
	 echo '
	 method=GET> 
	 <table> 
	 <tr><td>Name:</td><td><input type="text" value="'; 
	 echo $name; 
	 echo '" name="name" /></td></tr> 
	 <tr><td>Phone:</td><td><input type="text" value="'; 
	 echo $phone; 
	 echo '" name="phone" /></td></tr> 
	 <tr><td>Email:</td><td><input type="text" value="'; 
	 echo $email; 
	 echo '" name="email" /></td></tr> 
	 <tr><td colspan="2" align="center"><input type="submit" /></td></tr> 
	 <input type=hidden name=mode value=edited> 
	 <input type=hidden name=id value='; 
	 echo $id; 
	 echo '> 
	 </table> 
	 </form> <p>'; 
 } 
 
 if ( $mode=="edited") 
 { 
	 mysqli_query ($conn, "UPDATE address SET name = '$name', phone = '$phone', email = '$email' WHERE id = $id"); 
	 echo "Data Updated!<p>"; 
 } 

if ( $mode=="remove") 
 {
	 mysqli_query ($conn, "DELETE FROM address where id=$id");
	 echo "Entry has been removed <p>";
 }
 


 $data = mysqli_query($conn, "SELECT * FROM address ORDER BY name ASC") 
 or die(mysqli_error()); 
 echo "<h2>Address Book</h2><p>"; 
 echo "<table border cellpadding=3>"; 
 echo "<tr><th width=100>Name</th><th width=100>Phone</th><th width=200>Email</th><th width=100 colspan=2>Admin</th></tr>"; echo "<td colspan=5 align=right><a href=" .$_SERVER['PHP_SELF']. "?mode=add>Add Contact</a></td>"; 
 while($info = mysqli_fetch_array( $data )) 
 { 
 echo "<tr><td>".$info['name'] . "</td> "; 
 echo "<td>".$info['phone'] . "</td> "; 
 echo "<td> <a href=mailto:".$info['email'] . ">" .$info['email'] . "</a></td>"; 
 echo "<td><a href=" .$_SERVER['PHP_SELF']. "?id=" . $info['id'] ."&name=" . $info['name'] . "&phone=" . $info['phone'] ."&email=" . $info['email'] . "&mode=edit>Edit</a></td>"; echo "<td><a href=" .$_SERVER['PHP_SELF']. "?id=" . $info['id'] ."&mode=remove>Remove</a></td></tr>"; 
 } 
 echo "</table>"; 

 ?> 

<p>


 	</body> 
 </html> 
