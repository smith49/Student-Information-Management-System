<html>
<head>
<title></title>
<style>
body{
	background-image: url(Database.jpg);
	background-size: cover;
	background-attachment: fixed;
	font-family:'Times New Roman';
}
table,th,td{
	border:2px solid black;
	width: 1100px;
	background-color: lightgreen;
}
.btn{
	width: 10%;
	height: 5%;
	font-size: 22px;
	padding: 0px;
}
</style>
</head>
<body >
<center>
<h1> Search</h1>
<h2> Retrieve</h2>

<div class="container">
<form action="" method="POST">
	<input type="text" name="id" class="btn" placeholder="Enter Roll"/>
	<br>
	<input type="text" name="password" class="btn" placeholder="Enter Password"/>
	<br>
	<input type="submit" name="search" value="SEARCH ">
	<br>
	
	</form>
	<table>
	<tr>
	<th>Name </th>
	<th>Roll </th>
	<th>Password</th>
	<th>DOB</th>
	<th>Email</th>
	<th>Contact</th>
	<th>Dept</th>
	<th>Batch</th>
	<th>Room</th>
	<th>Country</th>
	<th>State</th>
	<th>City</th>
	</tr><br>

<?php
$connection=mysqli_connect("localhost","root","");
$db=mysqli_select_db($connection,'profile');
 
if( isset( ($_POST['id']))) {
	if( isset( ($_POST['password']))){
    $id = $_POST['id'];
	$pass=$_POST['password'];
	$query="SELECT * FROM adminlogin where id='$id' AND password='$pass' ";
	$query_run=mysqli_query($connection,$query);
	while($row=mysqli_fetch_array($query_run))
	{
		?>
		<tr>
			<td> <?php echo $row['username'];?></td>
			<td> <?php echo $row['id'];?></td>
			<td> <?php echo $row['password'];?></td>
			<td> <?php echo $row['DOB'];?></td>
			<td> <?php echo $row['Email'];?></td>
			<td> <?php echo $row['Contact'];?></td>
			<td> <?php echo $row['Dept'];?></td>
			<td> <?php echo $row['Batch'];?></td>
			<td> <?php echo $row['Room'];?></td>
			<td> <?php echo $row['Country'];?></td>
			<td> <?php echo $row['State'];?></td>
			<td> <?php echo $row['City'];?></td>
			
			</tr>
			<?php
	}
}

}

?>
</table>
</center>
</body>
</html>