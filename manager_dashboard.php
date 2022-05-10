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


	<title>Dashboard Manager</title>
<style>
body{
	padding: 0;
	background: url("POSwp.jpg");
	height: 100vh;
	display: flex;
	justify-content: center;
}
img {
  width: 150px;
  height: 200px;
  object-fit: scale-down;
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
  	margin-top: 360px;
}
.btn{
  border: 2px solid #575757;
  background: none;
  padding: 10px 20px;
  font-size: 18px;
  font-family: "montserrat";
  cursor: pointer;
  margin: 5px;
  transition: 0.8s;
  position: relative;
  overflow: hidden;
  color: #575757;
}
.btn:hover{
  color: #fff;
}
.btn::before{
	content: "";
	position: absolute;
	left: 0;
	width: 100%;
	height: 0%;
	background: #c6d2f7;
	z-index: -1;
	transition: 0.8s;
	bottom: 0;
	border-radius: 50% 50% 0 0;
}
.btn:hover::before{
	height: 180%;
}
</style>
</head>
<body>
	<article class="py-5 text-center">
	<h3 class="display-4 text-dark">Manager Dashboard</h3>
	<img src="Paddle-bat.gif">		 
	<div class="py-5 text-center glow">
	<a href="inventory_dashboard.html"  class="btn btn-info col-sm-8">Inventory Management</a>
	<br>
	<a href="sale_information.html" class="btn btn-info col-sm-8">Make a Sale</a>
	<br>
	<a href="crm_dashboard.html" class="btn btn-info col-sm-8">Customer Relation Management</a>
	<br>
	<a href="employee_management_dashboard.html" class="btn btn-info col-sm-8">Employee Management</a>
	<br>
	<br>
	<a href="logout.php" class="btn btn-outline-danger col-sm-5 data-bs-toggle= 
	"popover" title="You'll log out of the session">Logout</a>
	</article>
</div>
</body> 
