<?php
$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";
if (isset($_POST['submitcontact'])) {
    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $to = "albinwong@sina.com";
    $subject = "Html5xcss3 - Testing Contact Form";
    $message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
     
    $from = "";
    $headers = "From:" . $from . "\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";
     
    if (@mail($to, $subject, $message, $headers)) {
        $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
    }
}
?>
<html>
@extends('layout.exclusive',['title' => '联系我 - AlbinWong --- Pencil do the thinking!'])
@section('css')
@endsection
@section('content')
<div id="page-content" class="single-page">
    <div class="container">
        <div class="row">
            <div id="main-content">
                <article>
                    <div class='embed-container maps'>
                        <iframe src="https://www.amap.com/place/B0FFHD4FKM" width="100%"" height="450px" frameborder="0" style="border:0"></iframe>
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
    <script type="text/javascript">
        // $("body").attr('class','sub-page');
        // Google Map 
        $('.maps').click(function () {
            $('.maps iframe').css("pointer-events", "auto");
        });
        $( ".maps" ).mouseleave(function() {
          $('.maps iframe').css("pointer-events", "none"); 
        });
    </script>
@endsection