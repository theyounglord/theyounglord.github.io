<?php
        session_start();
        if(!isset($_SESSION['usernm']))
        {
            header("location:index.php");
        }
       /*$connect = mysqli_connect("162.222.225.87:3306", "prajakta", "Prajakta@123","a_db") or die(mysqli_error());*/	
?>
<!DOCTYPE html>
<html lang="en">
	
<!-- Mirrored from giantevent.themeebit.com/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 04:17:13 GMT -->
<head>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"></link>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- Meta-->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Title-->
		<title>Giant Event Template</title>

		<!-- Google Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700" rel="stylesheet">

		<!-- owl carousel css -->
		<link rel="stylesheet" href="assets/css/owl.carousel.min.css">

		<!-- animate -->
		<link rel="stylesheet" href="assets/css/animate.min.css">

		<!-- ionicon -->
		<link rel="stylesheet" href="assets/css/ionicons.min.css">

		<!-- bootstrap css -->
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">

		<!-- bootstrap css -->
		<link rel="stylesheet" href="assets/css/meanmenu.css">

		<!-- Style css -->
		<link rel="stylesheet" href="assets/css/style.css">

		<!-- responsive css -->
		<link rel="stylesheet" href="assets/css/responsive.css">

		<!-- Favicon  -->
		<link rel="shortcut icon" href="assets/img/components/fevicon.png" type="image/x-icon">
		<link rel="icon" href="assets/img/components/fevicon.png" type="image/x-icon">
	</head>
	<body>
		<!-- preloader -->
		<div id="preloader">
			<div class="preloader-content">
				<img src="assets/img/components/preloader.gif" alt=""> 
			</div>
		</div>
		<!-- preloader -->
		
		<div class="giant-event pricing error">
			<!-- ===========================================
						== Start Main Menu ==
			=========================================== -->
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-md-2 col-sm-2 col-xs-6">
							<div class="header_logo">
								
							</div>
						</div>
						<div class="col-md-10 col-sm-10 col-xs-6">
							<div class="mainmenu_area">
								<nav class="mainmenu">
									<ul>
										<!-- <li class="active">
											<a href="#">
												Welcome                                                
											</a>
										</li> -->
										<li>
											<a href="#">Singel Events</a>
											<ul class="dropdown">
												<li>
													<a href="airxonix.php">
														AirXonix
													</a>
												</li>
												<li>
													<a href="chess.php">
														Chess
													</a>
												</li>
												<li>
													<a href="let'sc.php">
														Let's C
													</a>
												</li>
												<li>
													<a href="nfs.php">
														NFS
													</a>
												</li>
												<li>
													<a href="sqlpin.php">
														SQL Pin
													</a>
												</li>
												<li>
													<a href="surfers.php">
														Surfers
													</a>
												</li>
												<!-- <li>
													<a href="error.html">
														Error
													</a>
												</li> -->
											</ul>
										</li>
										<!-- <li>
											<a href="speakers.html">
												Speakers
											</a>
										</li> -->
										<li>
											<a href="#">Group Events</a>
											<ul class="dropdown">
												<li>
													<a href="maths.php">
														Tricky Maths
													</a>
												</li>
												<li>
													<a href="cloneform.php">
														Clone Form
													</a>
												</li>
												<li>
													<a href="webmania.php">
														Web Mania
													</a>
												</li>
												<li>
													<a href="bermudatri.php">
														Bremuda Triangle
													</a>
												</li>
												<li>
													<a href="counterstrike.php">
														Counter Strike
													</a>
												</li>
												<li>
													<a href="carrom.php">
														Carrom
													</a>
												</li>
												<li>
													<a href="zodiac.php">
														Zodiac
													</a>
												</li>
												<!-- <li>
													<a href="error.html">
														Error
													</a>
												</li> -->
											</ul>
										</li>
										<li>
											<a href="schedule.php">
												Schedule
											</a>
										</li>
										<!-- <li>
											<a href="blog.html">
												Blog
											</a>
											<ul class="dropdown">
												<li>
													<a href="blog.html">
														Blog
													</a>
												</li>
												<li>
													<a href="singleblog.html">
														Single Blog
													</a>
												</li>
											</ul>
										</li> -->
										<li>
											<a href="contact.php">
												Contact
											</a>
										</li>
										<li>
											<a href="logout.php">
												Logout
											</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- =======================================
						== End Main Menu ==
			=========================================== -->

			<!-- ======================================
					== Start Banner Area ==
			====================================== -->

			<!-- ======================================
					== Start Banner Area ==
			====================================== -->
			<div class="banner_area">
				<div class="breadcrumb_table">
					<div class="page-banner-content">
						<div class="section-title">
							<h3>SQL Pin</h3>
						</div>
						<div class="other-page">
							<ul>
								<li>
									<a href="index-2.html">
										Home
									</a>
								</li>
								
								<li class="active">
									<a href="#">
										SQL Pin
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- ======================================
					== End Banner Area ==
			====================================== -->

			<!-- ======================================
					== Start Form Area ==
			====================================== -->
			<br>
			<br>
			<?php
			require_once("config.php");
            require_once("seventc.php");
			
			//session_start();
			
			$var = $_SESSION['usernm'];
			//echo $var;
			$data=new sevent();
            if(isset($_POST["submit"]))
            {
			
			$x=$data->regsqlpin($_SESSION['usernm']);
			if($x)
			{
                echo 'inserted';
                //header("location:chess.php");
            
			}
             }
			?>
			<div class="con_schedule_area">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<ul class="tabmenu">
							</ul>
							<div class="tab-content">
								<ul class="tab-pane active fade in secondRow" id="home">
									<li>
										<ul>
											<li>
												<div class="speaker_img">
													<img src="assets/img/schedule/01.jpg" alt="sp">
												</div>
											</li>
											<li>
												<div class="speaker_bio">
													<div class="speaker_desig">
														<a href="eventdetail.html">
															Game Name
															<p>SQL Pin</p>
														</a>
													</div>
													<div class="speaker_time">
														<a href="#">31st Jan 2018 <span>12:30 PM</span></a>
													</div>
												</div>
												<br>
												<br>
												<div class="schedule_content">
													<h3>Rules For Game</h3>
													>Event will start sharp at 12:30 PM.<br>
													>Event will be of 1 hour.<br>
													>1 participants will be entertained.<br>
													>In this event, table name will be given.<br>
													>According to the queries participants has to decide the fields and constraints in the table.<br>
													>Minimum 5 records should be displayed.<br>
												</div>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<center>
			<form action="" method="post"> 
			<div class="banner_btn">
				<?php
				$test=$data->chkchess($var);
				if(!$test)
					{ ?>
				<button name="submit" href="" type="submit" class="event_one_btn">Registration</button>
				<?php }
				else
				{
					?>
					<label>Registerd</label>
					<?php
                }
				 ?>
			</div>
			</form>
			</center>
			<br>
			<br>
			<!-- ======================================
					== End Form Area ==
			====================================== -->
			
			
			
			<!-- ========================================
				== Start Footer Area ==
			========================================= -->
			<footer>
				<div class="footer_top_area">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6">
								<div class="widget widget_content">
									<div class="widget_title">
										<!-- <a href="index-2.html">
											<img src="assets/img/components/event-logo.png" alt="img">
										</a> -->
									</div>
									<!-- <div class="widget_desc">
										<span>Duis autem vel eum iriure dolor 
										hendrerit in vulputate velit esse
										lobortis nisl ut.</span>
									</div> -->
									<!-- <div class="widget_social">
										<a href="#">
											<i class="ion-social-facebook-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-twitter-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-github-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-pinterest-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-skype-outline"></i>
										</a>
									</div> -->
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget latest_post">
									<div class="widget_title">
										<h3>Follow Links</h3>
									</div>
									<div class="widget_social">
										<a href="#">
											<i class="ion-social-facebook-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-twitter-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-github-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-pinterest-outline"></i>
										</a>
										<a href="#">
											<i class="ion-social-skype-outline"></i>
										</a>
									</div>
									<!-- <div class="widget_desc">
										<ul>
											<li>
												<a href="#!">
													Sed diam nonummy nibh euis 
													<span>18 - 10 - 2016</span>
												</a>
											</li>
											<li>
												<a href="#!">
													Sed diam nonummy nibh euis 
													<span>18 - 10 - 2016</span>
												</a>
											</li>
										</ul>
									</div> -->
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget_address">
									<div class="widget_title">
										<h3>Our Partners</h3>
									</div>
									<div class="widget_desc">
										<ul>
											<li>
												<div class="address_image">
													<a href="#!">
														<i class="ion-ios-telephone-outline"></i>
													</a>
												</div>
												<div class="address_content">
													<a href="#">
														<h4>
															(+91) 9409523384
															<span>Mithil Panchal</span>
														</h4>
													</a>
												</div>
											</li>
											<li>
												<div class="address_image">
													<a href="#!">
														<i class="ion-ios-telephone-outline"></i>
													</a>
												</div>
												<div class="address_content">
													<a href="#">
														<h4>
															(+91) 8141185003
															<span>Akshay Uperia</span>
														</h4>
													</a>
												</div>
												<br>
												<br>
												<div class="address_image">
													<a href="#!">
														<i class="ion-ios-telephone-outline"></i>
													</a>
												</div>
												<div class="address_content">
													<a href="#">
														<h4>
															(+91) 9537761511
															<span>Rushabh Patel</span>
														</h4>
													</a>
												</div>
											</li>
											<li>
												<div class="address_image">
													<a href="#!">
														<i class="ion-ios-telephone-outline"></i>
													</a>
												</div>
												<div class="address_content">
													<a href="#">
														<h4>
															(+91) 9033994272
															<span>Maulik Patel</span>
														</h4>
													</a>
												</div>
												<!-- <div class="address_content">
													<a href="#">
														<h4>
															724 Woodland Road 
															<span>Marlton, NJ 08053</span>
														</h4>
													</a>
												</div> -->
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6">
								<div class="widget widget_newsletter">
									<div class="widget_title">
										<h3>Newsletter</h3>
									</div>
									<div class="widget_desc">
										<form action="#">
											<input type="text" placeholder="Email Address">
											<button>Send</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer_bottom_area">
					<p>© Copyright 2018 Surat, All Rights Reserved</p>
				</div>
			</footer>
			<!-- ========================================
				== End Footer Area ==
			========================================= -->
		</div>
		<!-- Vendor  -->
		<script src="assets/js/vendor/jquery-1.12.1.min.js"></script>

		<!-- Library Min js-->
		<script src="assets/js/bootstrap.min.js"></script>

		<!-- Library Min js-->
		<script src="assets/js/jquery.meanmenu.min.js"></script>

		<!-- Venobox -->
		<script src="assets/js/jquery.easing.min.js"></script>

		<!-- Venobox -->
		<script src="assets/js/owl.carousel.min.js"></script>

		<!-- Waypoint -->
		<script src="assets/js/waypoints.min.js"></script>

		<!-- Waypoint -->
		<script src="assets/js/jquery.countdown.min.js"></script>

		<!-- Venobox -->
		<script src="assets/js/wow.min.js"></script>
		
		<!-- Google Map -->
		<script src="https://maps.googleapis.com/maps/api/js"></script>
		
		<!-- main js -->
		<script src="assets/js/main.js"></script>
	</body>

<!-- Mirrored from giantevent.themeebit.com/pricing.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 05 Jan 2018 04:17:13 GMT -->
</html>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
	<script>
	  $(document).ready(function() {
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
             user_name: {
                validators: {
                     stringLength: {
					    min: 5,
                        max: 20,
                    },
                    notEmpty: {
                        message: 'Please enter your Username'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },
            contact_no: {
                validators: {
                     stringLength: {
					    min: 10,
                        max: 10,
                    },
                    notEmpty: {
                        message: 'Please enter your Contect No'
                    }
                }
            },


            course: {
                validators: {
                     stringLength: {
					    min: 2,
                        max: 3,
                    },
                    notEmpty: {
                        message: 'Please enter your Course'
                    }
                }
            },

				sem: {
                validators: {
                     stringLength: {
					    min: 5,
                        max: 20,
                    },
                    notEmpty: {
                        message: 'Please enter your Sem'
                    }
                }
            },
				rollno: {
                validators: {
                     stringLength: {
					    min: 3,
                        max: 3,
                    },
                    notEmpty: {
                        message: 'Please enter your Roll No'
                    }
                }
            }
            }
        })
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
	</script>