<?php
	session_start();
	$p=$_SESSION["username"];
?>
<!DOCTYPE html>
<html>
	<head>
		<title>NIRMA UNIVERSITY</title>
		<link rel="stylesheet" href="index.css" type="text/css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" >
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"  ></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
		
		<meta name="viewport" content="width=device-width, intial-scale=1 ">
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.css" />
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

		<style>
/*------------------------------------id01---------------------------------------------*/		
				
				/*		 Full-width input fields */
			input[type=text], input[type=password] {
			  width: 100%;
			  padding: 12px 20px;
			  margin: 8px 0;
			  display: inline-block;
			  border: 1px solid #ccc;
			  box-sizing: border-box;
			}

			/* Set a style for all buttons */
			.container button {
			  background-color: #4CAF50;
			  color: white;
			  padding: 14px 20px;
			  margin: 8px 0;
			  border: none;
			  cursor: pointer;
			  width: 100%;
			}

			.container button:hover {
			  opacity: 0.8;
			}

			/* Extra styles for the cancel button */
			.cancelbtn {
			  width: auto;
			  padding: 10px 18px;
			  background-color: #f44336;
			}

			/* Center the image and position the close button */
			.imgcontainer {
			  text-align: center;
			  margin: 24px 0 12px 0;
			  position: relative;
			}

			img.avatar {
			  width: 40%;
			  border-radius: 50%;
			}

			.container {
			  padding: 16px;
			}

			span.psw {
			  float: right;
			  padding-top: 16px;
			}

			/* The Modal (background) */
			 .modal1 {
			  display: none; /* Hidden by default */
			  position: fixed; /* Stay in place */
			  z-index: 1; /* Sit on top */
			  left: 0;
			  top: 0;
			  width: 100%; /* Full width */
			  height: 100%; /* Full height */
			  overflow: auto; /* Enable scroll if needed */
			  background-color: rgb(0,0,0); /* Fallback color */
			  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
			  padding-top: 60px;
			}

			/* Modal Content/Box */
			 .modal-content1 {
			  background-color: #fefefe;
			  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
			  border: 1px solid #888;
			  width:50%;
				height:850px;/* Could be more or less, depending on screen size */
			}

			/* The Close Button (x) */
			.close {
			  position: absolute;
			 
			  right: 25px;
			  top: 0;
			  color: #000;
			  font-size: 35px;
			  font-weight: bold;
			}

			.close:hover,
			.close:focus {
			  color: red;
			  cursor: pointer;
			}

			/* Add Zoom Animation */
			.animate {
			  -webkit-animation: animatezoom 0.6s;
			  animation: animatezoom 0.6s
			}

			@-webkit-keyframes animatezoom {
			  from {-webkit-transform: scale(0)} 
			  to {-webkit-transform: scale(1)}
			}
			  
			@keyframes animatezoom {
			  from {transform: scale(0)} 
			  to {transform: scale(1)}
			}

			/* Change styles for span and cancel button on extra small screens */
			@media screen and (max-width: 300px) {
			  span.psw {
				 display: block;
				 float: none;
			  }
			  .cancelbtn {
				 width: 100%;
			  }
			}
			
/*------------------------------------id02---------------------------------------------*/	
				/* Full-width input fields */
				input[type=text], input[type=password] {
				  width: 100%;
				  padding: 15px;
				  margin: 5px 0 22px 0;
				  display: inline-block;
				  border: none;
				  background: #f1f1f1;
				}

				/* Add a background color when the inputs get focus */
				input[type=text]:focus, input[type=password]:focus {
				  background-color: #ddd;
				  outline: none;
				}

				/* Set a style for all buttons */
				.container button {
				  background-color: #0033cc;
				  color: white;
				  padding: 14px 20px;
				  margin: 8px 0;
				  border: none;
				  cursor: pointer;
				  width: 100%;
				  opacity: .8;
				}

				.container button:hover {
				  opacity:1;
				}

				/* Extra styles for the cancel button */
				.cancelbtn {
				  padding: 14px 20px;
				  background-color: #f44336;
				}

				/* Float cancel and signup buttons and add an equal width */
				.cancelbtn, .signupbtn {
				  float: left;
				  width: 50%;
				}

				/* Add padding to container elements */
				.container {
				  padding: 16px;
				}

				/* The Modal (background) */
				 .modal2 {
				  display: none; /* Hidden by default */
				  position: fixed; /* Stay in place */
				  z-index: 1; /* Sit on top */
				  left: 0;
				  top: 0;
				  width: 100%; /* Full width */
				  height: 100%; /* Full height */
				  overflow: auto; /* Enable scroll if needed */
				  
				 background-color: rgba(71, 78, 93,.6);
				  padding-top: 50px;
				}

				/* Modal Content/Box */
				 .modal-content2 {
				  background-color: #fefefe;
				  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
				  border: 1px solid #888;
				  width: 60%; /* Could be more or less, depending on screen size */
				}

				/* Style the horizontal ruler */
				hr {
				  border: 1px solid #f1f1f1;
				  margin-bottom: 25px;
				}
				 
				/* The Close Button (x) */
				.close {
				  position: absolute;
				  right: 35px;
				  top: 15px;
				  font-size: 40px;
				  font-weight: bold;
				  color: #f1f1f1;
				}

				.close:hover,
				.close:focus {
				  color: #f44336;
				  cursor: pointer;
				}

				/* Clear floats */
				.clearfix::after {
				  content: "";
				  clear: both;
				  display: table;
				}

				/* Change styles for cancel button and signup button on extra small screens */
				@media screen and (max-width: 300px) {
				  .cancelbtn, .signupbtn {
					 width: 100%;
				  }
				}
/*------------------------------------id03---------------------------------------------*/	
								/* Full-width input fields */
				input[type=text], input[type=password] {
				  width: 100%;
				  padding: 15px;
				  margin: 5px 0 22px 0;
				  display: inline-block;
				  border: none;
				  background: #f1f1f1;
				}

				/* Add a background color when the inputs get focus */
				input[type=text]:focus, input[type=password]:focus {
				  background-color: #ddd;
				  outline: none;
				}

				/* Set a style for all buttons */
				.container button {
				  background-color: #4CAF50;
				  color: white;
				  padding: 14px 20px;
				  margin: 8px 0;
				  border: none;
				  cursor: pointer;
				  width: 100%;
				  opacity: 0.9;
				}

				.conatainer button:hover {
				  opacity:1;
				}

				/* Extra styles for the cancel button */
				.cancelbtn {
				  padding: 14px 20px;
				  background-color: #f44336;
				}

				/* Float cancel and signup buttons and add an equal width */
				/* Add padding to container elements */
				.container {
				  padding: 16px;
				}

				/* The Modal (background) */
				.modal {
				  display: none; /* Hidden by default */
				  position: fixed; /* Stay in place */
				  z-index: 1; /* Sit on top */
				  left: 0;
				  top: 0;
				  width: 100%; /* Full width */
				  height: 100%; /* Full height */
				  overflow: auto; /* Enable scroll if needed */
				  background-color: rgba(71, 78, 93,.6);
				  padding-top: 50px;
				}

				/* Modal Content/Box */
				.modal-content {
				  background-color: #fefefe;
				  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
				  border: 1px solid #888;
				  width: 80%; /* Could be more or less, depending on screen size */
				}

				/* Style the horizontal ruler */
				hr {
				  border: 1px solid #f1f1f1;
				  margin-bottom: 25px;
				}
				 
				/* The Close Button (x) */
				.close {
				  position: absolute;
				  right: 35px;
				  top: 15px;
				  font-size: 40px;
				  font-weight: bold;
				  color: #f1f1f1;
				}

				.close:hover,
				.close:focus {
				  color: #f44336;
				  cursor: pointer;
				}

				/* Clear floats */
				.clearfix::after {
				  content: "";
				  clear: both;
				  display: table;
				}

				/* Change styles for cancel button and signup button on extra small screens */
				@media screen and (max-width: 300px) {
				  .cancelbtn, .signupbtn {
					 width: 80%;
				  }
				}
				.bootstrap-select .bs-ok-default::after {
						width: 0.3em;
						height: 0.6em;
						color:black;
						border-width: 0 0.1em 0.1em 0;
						transform: rotate(45deg) translateY(0.5rem);
					}

					.btn.dropdown-toggle:focus {
						outline: none !important;
					}
					.tagmenu{
						color:blue;
					}
		</style>
	</head>
	<body>
				<!---JAVAscript---->
				<script>
				// Get the modal
				var modal = document.getElementById("id01");

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
				// Get the modal
				var modal = document.getElementById("id02");

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				  if (event.target == modal) {
					modal.style.display = "none";
				  }
				}
								// Get the modal
				var modal = document.getElementById("id03");

				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
				  if (event.target == modal) {
					modal.style.display = "none";
				  }
				}
				$(function () {
					$(".selectpicker:").selectpicker();
				});
				</script>
				<!----------------------NAV bar--------------------->
		<section id="nav-bar">
			<nav class="navbar navbar-expand-lg navbar-light ">
			  <a class="navbar-brand" href="#"><img src="abc2.png"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				 <i class="fa fa-bars" ></i>
			  </button>
			  
			  <div class="collapse navbar-collapse" id="navbarNav">
			  <form class="navbar-form navbar-right" >
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search...">
					</div>
			  </form>
				<ul class="navbar-nav ml-auto"  >
				  <li class="nav-item ">
					<a class="nav-link" href="#top">HOME </a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="#about-us">ABOUT US</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link " href="#footer" >CONTACT</a>
				  </li>
				  <li class="nav-item">
				   <a class="nav-link " href="#skjd" >
				   <?php
					echo $p;
					?>
				   </a>
				  </li> 
				  <li class="nav-item ">
					<a class="nav-link " href="logout.php" >LOGOUT</a>
				  </li>
				  
				</ul>
			  </div>
			</nav>
			
		</section >
		<!---MAiN start--->
		<section id="main">
			
			<div class="row">
				
				<div class="col-2 blong">
					<button type="button" class="btn btn-primary" onclick="""document.getElementById("id03").style.display="block" """ style="width:auto;">+ ASK A QUESTION</button><br><br>
					<hr>
					<div class="bleft">
						<p style="font-size:20px">QUESTION</p>
						<b style="font-size:40px;">
						<?php
							$sql="select * from ask_question";
							$query=mysqli_query($con,$sql);
							$total=mysqli_num_rows($query);
							echo $total;
						?></b>
					</div><br>
					<div class="bleft">
						<p style="font-size:20px">USERS</p>
						<b style="font-size:40px;">
						<?php
							$sql="select * from registration";
							$query=mysqli_query($con,$sql);
							$total=mysqli_num_rows($query);
							echo $total;
						?></b>
					</div>
				</div>
				
				<div class="col-10">
					<p style="font-size:45px;font-weight:bold;font-family:Georgia" align="center">Online Discussion Forum For Nirma</p>
					<div class="bbottom"></div>
					<div class="row">
						<div class="col-8 effect">
							<button type="button"class="btn btn-info" >Latest Questions</button>&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="button"class="btn btn-info" >Popular Questions</button>&nbsp;&nbsp;&nbsp;&nbsp;
							<button type="button"class="btn btn-info" >All Questions</button>&nbsp;&nbsp;&nbsp;&nbsp;
						</div>
						<div class="col-4 filter">
							Filter by:
							<select >
								<option>Placement</option>
								<option>Books</option>
								<option>Competitive coding</option>
								<option>Further studies</option>
								<option>Nirma campus</option>
							</select>
						
						</div>
					</div>
				</div>
				<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
			</div>
			
		
<!------------------------------------------id01------------------------------------------------->	
<!------------------------------------------LOGIN--------------------->
				
	<!------------------------------------------id02------------------------------------------------->
			
<!------------------------------------------id03------------------------------------------------->
			<div id="id03" class="modal">
			  <span onclick="""document.getElementById("id03").style.display="none" """ class="close" title="Close Modal">&times;</span>
			  <form class="modal-content" action="/action_page.php">
				<div class="container">
				  <h1>ASK A QUESTION</h1>
				  <hr>
				  Question:
				  <input type="text" placeholder="Enter question" name="question" required>

				  <textarea name="message" rows="10" cols="100" placeholder="Description....."></textarea><br>
						<div class="tagmenu">
								<select multiple data-style="bg rounded-pill px-4 py-3 shadow-sm " style="color:black"class="selectpicker w-100">
									<option selected>Select Tag:</option>
									<option>Placement</option>
									<option>Books</option>
									<option>Competitive coding</option>
									<option>Further studies</option>
									<option>Nirma campus</option>
								</select><!-- End -->	
						</div>

				  <p>Please do not ask any irrelavent question otherwise it would be removed  <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

				  <div class="clearfix">
					<button type="button" onclick=""" document.getElementById("id03").style.display="none" """ class="cancelbtn">Cancel</button>
					<button type="submit" class="signupbtn">Submit</button>
				  </div>
				</div>
			  </form>
			</div>
			
		</section>	
		
	</body>
</html> 
?>
