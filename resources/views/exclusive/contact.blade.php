<?php
$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";
if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "albinwong@sina.com";
	$subject = "Html5xcss3 - Testing Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<html>
@extends('layout.exclusive',['title' => 'AlbinWong - Free Bootstrap Themes'])
@section('css')
@endsection
@section('content')
<div id="page-content" class="single-page">
	<div class="container">
		<div class="row">
			<div id="main-content">
				<article>
					<div class='embed-container maps'>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3164.289259162295!2d-120.7989351!3d37.5246781!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8091042b3386acd7%3A0x3b4a4cedc60363dd!2sMain+St%2C+Denair%2C+CA+95316%2C+Hoa+K%E1%BB%B3!5e0!3m2!1svi!2s!4v1434016649434" width="100%" height="450px" frameborder="0" style="border: 0"></iframe>
					</div>
					<div class="art-content">
						<div class="row">
							<div class="col-md-4 box-item">
								<h3>Contact Info</h3>
								<span>SED UT PERSPICIATIS UNDE OMNIS ISTE NATUS ERROR SIT VOLUPTATEM ACCUSANTIUM DOLOREMQUE LAUDANTIUM, TOTAM REM APERIAM.</span><br> <br>
								<p>JL.Kemacetan timur no.23. block.Q3<br>
									Jakarta-Indonesia</p>
								   <p>+6221 888 888 90 <br>
									+6221 888 88891</p>
								<p>info@yourdomain.com</p>
							</div>
							<div class="col-md-8">
								<h3>Contact Form</h3>
								<!--Warning-->
								<center><?php echo $text;?></center>
								<!---->
								<form name="form1" method="post" action="contact.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
											<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
												placeholder="Message" style="height: 190px;"></textarea>
											</div>						
											<button type="submit" class="btn btn-skin btn-block" name="submitcontact" id="submitcontact">Submit</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</article>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
			$('.maps iframe').css("pointer-events", "auto");
		});
		$( ".maps" ).mouseleave(function() {
		  $('.maps iframe').css("pointer-events", "none"); 
		});
	</script>
@endsection