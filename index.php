<?php require_once 'email.php' ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

		<!-- jQuery CDN -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<link rel="stylesheet" type="text/css" href="flipcountdown/jquery.flipcountdown.css" />
				<script type="text/javascript" src="flipcountdown/jquery.flipcountdown.js"></script>

		<style>
			body{
				margin: 0;
				padding: 0;
				color: #666F77;
				font-family: helvetica, arial, serif;
			}
			.navbar{
				margin: 0;
				border-radius: 0;
			}
			.topContainer{
				background-image: url('images/bible.jpg');
				background-size: cover;
				width: 100%;
				height: 650px;
			}
			.title{
				font-size: 3em;
				margin: 50px 0 50px 0;
				text-align: center;
			}
			.donateForm{
				margin-top: 200px;
			}
			.donateBtn{
				width: 150px;
				height: 50px;
				font-size: 1.4em;

			}
			#retroclockbox_float{
				/*pad*/
			}
			#contentContainer{
				margin-bottom: 75px;
			}
			p{
				font-size: 1.4em;
			}
			/*img{
				width: 450px;
				height: 300px;
			}*/
			.marginBottom{
				margin-bottom: 100px;
			}
			.topRow h1{
				margin-top: 250px;
			}
			.topRow h2{
				text-align: right;
			}
			.topRow h1,h2{
				text-align: center;
				font-style: italic;
				color: #FFFFFF;
			}
			.topContainer input[type|="image"]{
				margin-top: 200px;
				width: 175px;
			}
			#about input[type|="image"]{
				width: 175px;
			}
			#contact{
				background-color: #222222;
				color: #FFFFFF;
				padding-top: 15px;
				padding-bottom: 50px;
			}
			#contact h1{
				text-align: center;
				margin-bottom: 40px;
			}
			.progressbar{
				counter-reset: step;
			}
			.progressbar li{
				list-style-type: none;
				float: left;
				width: 25%;
				position: relative;
				text-align: center;
				font-weight: 700;

			}
			.progressbar li:before{
				content: counter(step);
				counter-increment: step;
				width: 40px;
				height: 40px;
				line-height: 40px;
				border: 2px solid #ddd;
				border-radius: 50%;
				display: block;
				text-align: center;
				margin: 0 auto 10px auto;
				background-color: #fff;
			}
			.progressbar li:after{
				content: '';
				position: absolute;
				width: 100%;
				height: 2px;
				background-color: #ddd;
				top: 15px;
				left: -50%;
				z-index: -1;
			}
			.progressbar li:first-child:after{
				content: none;

			}
			.progressbar li:active{
				color: green;
			}
			.progressbar li.active:before{
				border-color: green;
			}
			.progressbar li.active + li:after{
				background-color: green;
			}
			
		</style>
	</head>

	<body>
		<div class="nav navbar navbar-inverse navbar-fixed">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Orlando Gospel Assembly</a>
				</div>

				<div class="collapse navbar-collapse">
					<div class="navbar-right">
						<ul class="nav navbar-nav">
							<li><a href="#">Home</a></li>
							<li><a href="#about">About us</a></li>
							<li><a href="#contact">Contact</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container topContainer" id="contentContainer">
			<div class="row topRow">
				<div class="col-md-6 col-md-offset-3">
					<h1>Give, and it will be given unto you</h1>
					<h2>-Luke 6:38</h2>
				</div>		
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-5 col-sm-offset-4">
					<form  class="donateForm" action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="Q8P5HRMJDP8C6">
						<button class="btn btn-success donateBtn" name="submit" style="margin-left:50px" >Donate Now</button>
					</form>
				</div>
			</div>
		</div>
		
		<div class="container marginBottom" id="about">
			<div class="row">
				<div class="col-md-12">
					<div class="progressbar">
						<ul>
							<li class="active">$100,000</li>
							<li class="active">$250,000</li>
							<li>$500,000</li>
							<li>$1,000,000</li>
						</ul>
					</div>
				</div>
					
				<!-- <div class="col-md-6 col-md-offset-4" id="retroclockbox_float"></div> -->
			</div>
			<div class="row">
				<h1 class="title">About Us</h1>
			</div>
			<div class="row marginBottom">
				<div class="col-md-8">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias mollitia, 
					odit non culpa blanditiis inventore architecto porro soluta, sequi. Sed eaque 
					optio qui quasi ipsam maiores explicabo, quibusdam animi laboriosam!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias mollitia, 
					odit non culpa blanditiis inventore architecto porro soluta, sequi. Sed eaque 
					optio qui quasi ipsam maiores explicabo, quibusdam animi laboriosam!</p>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias mollitia, 
					odit non culpa blanditiis inventore architecto porro soluta, sequi. Sed eaque 
					optio qui quasi ipsam maiores explicabo, quibusdam animi laboriosam!</p>
				</div>
				<div class="col-md-4">
					<img src="images/OGA.jpg" alt="OGA Church" class="img-responsive img-rounded">
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 col-md-offset-5 col-sm-offset-4">
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
						<input type="hidden" name="cmd" value="_s-xclick">
						<input type="hidden" name="hosted_button_id" value="Q8P5HRMJDP8C6">
						<button class="btn btn-success donateBtn" name="submit" >Donate Now</button>
						<!-- <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!"> -->
						<!-- <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="0" height="0"> -->
					</form>
				</div>
			</div>
		</div>

		<div class="container-fluid" id="contact">
			<div class="row">
				<h1>Contact</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<form class="form-horizontal" method="post" action="#">
					  <div class="form-group">
					    <label for="inputName" class="col-sm-2 control-label">Name</label>
					    <div class="col-sm-10">
					      <input type="text" class="form-control" id="inputName" placeholder="John Smith" required="true">
					    </div>
					  </div>
					  <div class="form-group">
					    <label for="inputEmail" class="col-sm-2 control-label">Email</label>
					    <div class="col-sm-10">
					      <input type="email" class="form-control" id="inputEmail" placeholder="jsmith@gmail.com" required="true">
					    </div>
					  </div>
					  <div class="form-group">
					  	<label for="inputeMessage" class="col-sm-2 control-label">Message</label>
					  	<div class="col-sm-10">
					  		<textarea name="inputMessage" id="inputMessage" rows="8" class="form-control" placeholder="Message" required="true"></textarea>
					  	</div>
					  </div>
					  <div class="form-group">
					    <div class="col-sm-offset-2 col-sm-10">
					      <button type="submit" class="btn btn-primary" name="submit">Send</button>
					    </div>
					  </div>
					</form>
				</div>
				<div class="col-md-6">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.1971759268517!2d-81.37963838461245!3d28.473607998006152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77c8c6689bddf%3A0x39931e9ca5c1ca44!2sGospel+Assembly!5e0!3m2!1sen!2sus!4v1479794096029" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					
				</div>
			</div>
		</div>
				
	</body>
</html>

<script>
	$(document).ready(function(){
		jQuery('#retroclockbox_float').flipcountdown({
			size:"lg",
			tick: 300000.59
		});
	});
	
</script>