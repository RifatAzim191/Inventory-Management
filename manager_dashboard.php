<?php

session_start();
$user_info = $_SESSION['Username'];

if ($user_info == null) header('Location: login2.html');
?>

<!DOCTYPE html>

<html lang = "en">
<head>
	<meta charset = "UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital@1&display=swap" rel="stylesheet">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="allcss.css">


	<title>Manager Dashboard</title>
	<style>
body{
	padding: 0 100px;
	background: url("POSwp.jpg");
	height: 100vh;
	display: flex;
	justify-content: center;
}
h3 {
  text-shadow: 3px 3px 6px darkgray;
  font-variant: small-caps;
  text-decoration: underline;
  letter-spacing: 2px;
  
  text-align: center;
}

div.relative {
	text-shadow: 1px 1px 3px darkgray;
	color: black;
	text-align: center;
	margin: 0;
	padding: 0;
	position: relative;
}
</style>
</head>

<body>
	<article class="py-5 text-center">
	 		<h3 class="display-4 text-dark">Manager Dashboard</h3>
	<br>
	<br>
<div class="py-5 text-center">
	<a href="inventory_dashboard.html"  class="btn">Inventory Management</a>
	<br>
	<br>
	<a href="sale_information.html" class="btn btn-primary col-sm-5">Make a sale</a>
	<br>
	<br>
	<a href="crm_dashboard.html" class="btn btn-primary col-sm-5">Customer Relation Management</a>
	<br>
	<br>
	<a href="employee_management_dashboard.html" class="btn btn-primary col-sm-5">Employee Management</a>
	<br>
	<br>
	<a href="logout.php" class="btn">Logout</a>
	</article>

</div>
</body> 

