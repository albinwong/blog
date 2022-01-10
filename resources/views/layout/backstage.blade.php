<!DOCTYPE html>
<html>
	<head> 
		<title>{{$title}}</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1" /> 
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
		<meta name="csrf_token" content="{{csrf_token()}}">
		<!-- <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>  -->
		<link href="/backstage/css/bootstrap.min.css" rel="stylesheet" type="text/css" /> 
		<link href="/backstage/css/style.css" rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" href="/backstage/css/morris.css" type="text/css" /> 
		<link href="/backstage/css/font-awesome.css" rel="stylesheet" /> 
		<link href="//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400" rel="stylesheet" type="text/css" /> 
		<link href="//fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /> 
		<link rel="stylesheet" href="/backstage/css/icon-font.min.css" type="text/css" /> 
		@yield('css')
	</head> 
	<body> 
		<div class="page-container"> 
			<!--/content-inner--> 
			<div class="left-content"> 
				<div class="mother-grid-inner"> 
					<!--header start here--> 
					<div class="header-main"> 
						<div class="logo-w3-agile"> 
							<h1>
								<a href="index.html" style="text-transform:none;">Albin</a>
							</h1> 
						</div> 
						<div class="w3layouts-left"> 
							<!--search-box--> 
							<div class="w3-search-box"> 
								<form action="#" method="post"> 
									<input type="text" placeholder="Search..." required="" /> 
									<input type="submit" value="" /> 
								</form> 
							</div>
							<!--//end-search-box--> 
							<div class="clearfix"></div> 
						</div> 
						<div class="w3layouts-right"> 
							<div class="profile_details_left">
								<!--notifications of menu start --> 
								<ul class="nofitications-dropdown"> 
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a> 
										<ul class="dropdown-menu"> 
											<li> 
											<div class="notification_header"> 
											<h3>You have 3 new messages</h3> 
											</div> 
											</li> 
											<li>
												<a href="#"> 
													<div class="user_img">
														<img src="/backstage/images/in11.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
														<p>Lorem ipsum dolor</p> 
														<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li class="odd">
												<a href="#"> 
													<div class="user_img">
														<img src="/backstage/images/in10.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
														<p>Lorem ipsum dolor </p> 
														<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li>
												<a href="#"> 
													<div class="user_img">
													<img src="/backstage/images/in9.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
													<p>Lorem ipsum dolor</p> 
													<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li> 
												<div class="notification_bottom"> 
													<a href="#">See all messages</a> 
												</div>
											</li> 
										</ul>
									</li> 
									<li class="dropdown head-dpdn">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a> 
										<ul class="dropdown-menu"> 
											<li> 
												<div class="notification_header"> 
													<h3>You have 3 new notification</h3> 
												</div>
											</li> 
											<li>
												<a href="#"> 
													<div class="user_img">
														<img src="/backstage/images/in8.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
														<p>Lorem ipsum dolor</p> 
														<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li class="odd">
												<a href="#"> 
													<div class="user_img">
														<img src="/backstage/images/in6.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
														<p>Lorem ipsum dolor</p> 
														<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li>
												<a href="#"> 
													<div class="user_img">
														<img src="/backstage/images/in7.jpg" alt="" />
													</div> 
													<div class="notification_desc"> 
															<p>Lorem ipsum dolor</p> 
															<p><span>1 hour ago</span></p> 
													</div> 
													<div class="clearfix"></div>
												</a>
											</li> 
											<li> 
												<div class="notification_bottom"> 
													<a href="#">See all notifications</a> 
												</div> 
											</li> 
										</ul> 
									</li> 
									<li class="dropdown head-dpdn"> 
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-tasks"></i><span class="badge blue1">9</span></a> 
										<ul class="dropdown-menu"> 
											<li> 
												<div class="notification_header"> 
												<h3>You have 8 pending task</h3> 
												</div>
											</li> 
											<li>
												<a href="#"> 
													<div class="task-info"> 
														<span class="task-desc">Database update</span>
														<span class="percentage">40%</span> 
														<div class="clearfix"></div> 
													</div> 
													<div class="progress progress-striped active"> 
														<div class="bar yellow" style="width:40%;"></div> 
													</div> 
												</a>
											</li> 
											<li>
												<a href="#"> 
													<div class="task-info"> 
														<span class="task-desc">Dashboard done</span>
														<span class="percentage">90%</span> 
														<div class="clearfix"></div> 
													</div> 
													<div class="progress progress-striped active"> 
														<div class="bar green" style="width:90%;"></div> 
													</div>
												</a>
											</li> 
											<li>
												<a href="#"> 
													<div class="task-info"> 
														<span class="task-desc">Mobile App</span>
														<span class="percentage">33%</span> 
														<div class="clearfix"></div> 
													</div> 
													<div class="progress progress-striped active"> 
														<div class="bar red" style="width: 33%;"></div> 
													</div>
												</a>
											</li> 
											<li>
												<a href="#"> 
													<div class="task-info"> 
														<span class="task-desc">Issues fixed</span>
														<span class="percentage">80%</span> 
														<div class="clearfix"></div> 
													</div> 
													<div class="progress progress-striped active"> 
														<div class="bar  blue" style="width: 80%;"></div> 
													</div>
												</a>
											</li> 
											<li> 
												<div class="notification_bottom"> 
													<a href="#">See all pending tasks</a> 
												</div>
											</li> 
										</ul>
									</li> 
									<div class="clearfix"></div> 
								</ul> 
								<div class="clearfix"> </div> 
							</div> 
							<!--notification menu end --> 
							<div class="clearfix"></div> 
						</div> 
						<div class="profile_details w3l"> 
							<ul> 
								<li class="dropdown profile_details_drop">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> 
										<div class="profile_img"> 
											<span class="prfil-img"><img src="/backstage/images/in4.jpg" alt="" /> </span> 
											<div class="user-name"> 
											<p>{{session('uname')}}</p> 
											<span>Administrator</span> 
											</div> 
											<i class="fa fa-angle-down"></i> 
											<i class="fa fa-angle-up"></i> 
											<div class="clearfix"></div> 
										</div>
									</a> 
									<ul class="dropdown-menu drp-mnu"> 
										<li> <a href="/admin/setting"><i class="fa fa-cog"></i> Settings</a> </li> 
										<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
										<li> <a href="/admin/logout"><i class="fa fa-sign-out"></i> Logout</a> </li> 
									</ul> 
								</li> 
							</ul> 
						</div> 
						<div class="clearfix"></div> 
					</div> 
					<!--heder end here--> 
					<ol class="breadcrumb"> 
						<li class="breadcrumb-item"><a href="/admin">Home</a></li>
						@yield('breadcrumb')
					</ol>
					@yield('content')
					 
					<!--//w3-agileits-pane--> 
					<!-- script-for sticky-nav --> 
					<script src="/backstage/js/jquery-2.1.4.min.js"></script> 
					<script>
						$(document).ready(function() {
						    var navoffeset = $(".header-main").offset().top;
						    $(window).scroll(function() {
						        var scrollpos = $(window).scrollTop();
						        if (scrollpos >= navoffeset) {
						            $(".header-main").addClass("fixed");
						        } else {
						            $(".header-main").removeClass("fixed");
						        }
						    });
						});
					</script> 
					<!-- /script-for sticky-nav --> 
					<!--inner block start here--> 
					<div class="inner-block"></div> 
					<!--inner block end here--> 
				</div> 
			</div> 
			<!--//content-inner--> 
			<!--/sidebar-menu--> 
			<div class="sidebar-menu"> 
				<header class="logo1"> 
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> 
				</header> 
				<div style="border-top:1px ridge rgba(255, 255, 255, 0.15)"></div> 
				<div class="menu"> 
					<ul id="menu"> 
						@include('layout.menu')
					</ul> 
				</div> 
			</div> 
			<div class="clearfix"></div> 
		</div> 
		<script>
			var toggle = true;
			$(".sidebar-icon").click(function() {                
				if (toggle)
				{
					$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
					$("#menu span").css({"position":"absolute"});
				} else {
					$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
					setTimeout(function() {
						$("#menu span").css({"position":"relative"});
					}, 400);
				}
				toggle = !toggle;
			});
		</script> 
	    @yield('js')
	    <script type="text/javascript" src="/js/layer/layer.js"></script>
		<script src="/backstage/js/scripts.js"></script> 
		<script src="/backstage/js/bootstrap.min.js"></script>
	</body>
</html>