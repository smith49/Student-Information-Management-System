<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/Bootstrap.css">
        
        <title>Hostel Enrollment Form</title>
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=RM1mqKjAqS0ng-1_U9TZo4P-0wKtfVo_v9CgymMbZPGCeTjDsL2xmMbkD_sPG2nwWJL3L0zW0iDZDHU8zfKLASSxuFapWt7yVYzQHklBGdkc35JOQ6jP1HzX7VRxLG3IQ0u4XxVNJoZg02JLDoqSxsRTFN6v1HPaW4vRrwzm2KwOiudZf6FWmJpvLkFyBn0ta96pPXYbgHu2kk8scJ8I164vLW-UMXld5eQRr3EI_m2L_C3hSMI0PJQMDW17ivj6Ee8KLEnIlDw_1CVmuqNbAY80imwuW3O3Ug-rpTiiBlwkGtK0IIdN61XF6VFCCAxvRfqd4Bd8ZmRkwoR7D49R-lnLuwR1YN5io18cLTc-zUs6JYkSfIE4VMEJJ94_RYqj0HkYdP4YZ5FlNDDLu9FfBfO48O8jQ0ImunTXVnu0g81NxOZ12YSU5MGUgFfT6XswAHhACC5B4GX1eEX_hQdpxQ" charset="UTF-8"></script><style>
        *{
            margin:0px;
            padding: 0px;
        }
        body{
            background-image: url(login.jpg);
            background-size: cover;
            background-attachment: fixed;
            font-family: 'Times New Roman';
        }
        h1{
            font-size: 40px;
            color: white;
            margin-top: 250px;
        }
        p{
            font-size: 17px;
            color: white;
        }
        h3{
            font-size: 25px;
            color: white;
        }
        .col-md-5{
            margin-top: 80px;
            color: white;
            font-size: 19px;
        }
        .form-control{
            background: transparent;
            border-radius: 0px;
            border-bottom: 1px solid white;
            font-size: 18px;
            margin-top: 15px;
            height: 40px;
            color: white;

        }
        small{
            font-size: 18px;
            color: white;
        }
        input{
            margin-top: 22px;

        }
    </style>
    </head>
<body>
<div>
<?php 
if(isset($_POST['Create'])){
	$Name= $_POST['username'];
	$Pass=$_POST['Pass'];
	$DOB= $_POST['DOB'];
	$Email= $_POST['Email'];
	$Contact= $_POST['Contact'];
	$Dept=$_POST['Dept'];
	$Batch=$_POST['Batch'];
	$Roll=$_POST['Roll'];
	$Room=$_POST['Room'];
	$Country=$_POST['Country'];
	$State=$_POST['State'];
	$City=$_POST['City'];
	
	$sql="INSERT INTO adminlogin (username,password,DOB,Email,Contact,Dept,Batch,id,Room,Country,State,City) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
	$stmtinsert=$conn->prepare($sql);
	$result=$stmtinsert->execute([$Name,$Pass,$DOB,$Email,$Contact,$Dept,$Batch,$Roll,$Room,$Country,$State,$City]);
	if($result){
			 echo '<a href="index.php">Success</a>';
}
	else{
		echo 'Unsuccessful';
	}
}
?>
<div>
<form action="enrollment.php" method="post" >
   <div class="container">
       <div class="row">
           <div class="col-md-7">
           <div class="col-md-7">
               <h1 class="text-left">Welcome to XUB UG Hostel</h1>
               <p class="text-left">Students are requested to fill the Enrollment form carefully.</p>
			<hr class="mb-3">
			<label for="Name"><b>Name</b></label>
            <input class="form-control" type="text" name="username" required>
			<br>
			<label for="Password"><b>Password</b></label>
            <input class="form-control" type="text" name="Pass" pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" title="Minimum eight characters, at least one letter and one number:" required>
			<br>
			<label for="DOB"><b>DOB</b></label>
			<input class="form-control" type="date" name="DOB" required>
			<br>
			
			<label for="Email"><b>Email</b></label>
			<input class="form-control" type="email" name="Email" pattern=".+@xub\.edu\.in" title="Incorrect Domain" required>
			<br>
			<label for="Contact"><b>Contact</b></label>
			<input class="form-control" type="text" name="Contact" pattern="^((\+)?(\d{2}[-]))?(\d{10}){1}?$" required>
			<br>
			<label for="Dept Name"><b>Dept</b></label>
			<input class="form-control" type="text" name="Dept" required>
			<br>
			<label for="Batch"><b>Batch</b></label>
			<input class="form-control" type="text" name="Batch" required>
			<br>
			<label for="Roll No"><b>Roll</b></label>
			<input class="form-control" type="text" name="Roll" required>
			<br>
			<label for="Room No"><b>Room No</b></label>
			<input class="form-control" type="text" name="Room" required>
			<br>
			<label for="Country"><b>Country</b></label>
			<input class="form-control" type="text" name="Country" required>
			<br>
			<label for="State"><b>State</b></label>
			<input class="form-control" type="text" name="State" required>
			<br>
			<label for="City"><b>City</b></label>
			<input class="form-control" type="text" name="City" required>
			<br>
			<input type="submit" name="Create" value="Sign Up">
       </div>
   </div>
   </div>
   </form>

   
</body>
</html>