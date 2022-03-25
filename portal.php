<?php 
include_once('config.php');
session_start();

	if(!isset($_SESSION['userlogin'])){
		header("Location: Login.php");
	}

	if(isset($_GET['logout'])){
		session_destroy();
		unset($_SESSION);
		header("Location: index.php");
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Creator Portal</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


 <!-- ======= Header ======= -->
 <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>

      <nav id="navbar" class="navbar">
        <ul>

            <li>
              <a href="portal.php?logout=true"><button type="button" id="myBtn" class="btn btn-primary navbar-btn">            
                <b>LOG OUT</b>
              </button></a>
            </li> 

          
      
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

	<div class="limiter">
	<h1><b><strong>
							<?php 
							$sql="SELECT * from users;";
							$result = $db->query($sql);
							if($result)
							{
								// while($row = $result->fetch())
								foreach($result as $row)
								{
									if($_SESSION['userlogin']==$row->email){
										echo $row->firstname;
									}
								}
							}
							// $resultCheck = 
						?>'s Creator Portal</strong></b></h1>


	<section id="portal" class="d-flex align-items-center">
	<h1></h1>
	</section>

		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100 ver1 m-b-110">
				<div id="container" class="flex">
					<div class="completed"><h1><b> Completed Projects</b></h1></div>
					<div id="create"><a href=""><button type="button" id="myBtn" class="btn btn-primary navbar-btn">            
					<b>Create a New Project</b></button></a></div>
					</div>
					
					<table data-vertable="ver1">
						<thead>
							<tr class="row100 head">
								<th class="column100 column1" data-column="column1">Project Name</th>
								<th class="column100 column2" data-column="column2">Link</th>
								<th class="column100 column3" data-column="column3">QR Code</th>
								<th class="column100 column4" data-column="column4">Action</th>
								<!-- <th class="column100 column5" data-column="column5">Wednesday</th>
								<th class="column100 column6" data-column="column6">Thursday</th>
								<th class="column100 column7" data-column="column7">Friday</th>
								<th class="column100 column8" data-column="column8">Saturday</th> -->
							</tr>
						</thead>
						<tbody>
							<tr class="row100">
								<td class="column100 column1" data-column="column1">First Model</td>
								<td class="column100 column2" data-column="column2">arrviewer.com/firstmodel</td>
								<td class="column100 column3" data-column="column3"><a href="" class="QRcode"><img src="assets/img/favicon.png" width="44" alt=""></a></td>
								<td class="column100 column4" data-column="column4"><a href="" class="QRcode">View 3D Model</a></td>
								<!-- <td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Second Model</td>
								<td class="column100 column2" data-column="column2">arrviewer.com/secondmodel</td>
								<td class="column100 column3" data-column="column3"><a href="" class="QRcode"><img src="assets/img/favicon.png" width="44" alt=""></a></td>
								<td class="column100 column4" data-column="column4"><a href="" class="QRcode">View 3D Model</a></td>
								<!-- <td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1">Third Model</td>
								<td class="column100 column2" data-column="column2">arrviewer.com/thirdmodel</td>
								<td class="column100 column3" data-column="column3"><a href="" class="QRcode"><img src="assets/img/favicon.png" width="44" alt=""></a></td>
								<td class="column100 column4" data-column="column4"><a href="" class="QRcode">View 3D Model</a></td>
								<!-- <td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
								<!-- <td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
								<!-- <td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
								<!-- <td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">9:00 AM</td>
								<td class="column100 column7" data-column="column7">--</td>
								<td class="column100 column8" data-column="column8">--</td> -->
							</tr>

							<tr class="row100">
								<td class="column100 column1" data-column="column1"></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
								<!-- <td class="column100 column5" data-column="column5">--</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">2:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td> -->
							</tr>

							<!-- <tr class="row100">
								<td class="column100 column1" data-column="column1"></td>
								<td class="column100 column2" data-column="column2"></td>
								<td class="column100 column3" data-column="column3"></td>
								<td class="column100 column4" data-column="column4"></td>
								<td class="column100 column5" data-column="column5">8:00 AM</td>
								<td class="column100 column6" data-column="column6">--</td>
								<td class="column100 column7" data-column="column7">5:00 PM</td>
								<td class="column100 column8" data-column="column8">8:00 AM</td>
							</tr> -->
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>