@extends('layout.exclusive',['title' => '关于 - AlbinWong --- Pencil do the thinking!'])
@section('css')
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/styles/default.min.css">
@endsection
@section('content')
<div id="page-content" class="single-page">
	<div class="container">
		<div class="row">
			<div id="main-content">
				<article>
					<img src="/exclusive/images/banner1.jpg" />
					<div class="art-content">
						<h1>Sharing Your Explorer’s Story: Man and Mother Nature</h1>
						<div class="info">By <a href="#">Danny</a> on April 14, 2015</div>
						<div class="excerpt"><p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum exercitation ullamco laboris nisi ut aliquip.</p></div>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
						 sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor 
						 invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
						<blockquote><p>Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet vultatup duista.</p></blockquote>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis
						at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril.</p>
						<h2>Heading 1</h2>
						<p>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
						 Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse lorem ipsum dolor sit amet.</p>
						<h2>Heading 2</h2>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis. 
						 At vero eos et accusam et justo.</p>
						<h2>Heading 3</h2>
						<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. 
						 At vero eos et accusam et justo duo dolores et ea rebum hendrerit in vulputate velit esse molestie.</p>
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
						 sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.</p>
					
						<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, 
						sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
						<div class="note">
						  <ol>
							<li>Lorem ipsum</li>
							<li>Sit amet vultatup nonumy</li>
							<li>Duista sed diam</li>
						  </ol>
						  <div class="clear"></div>
						</div>
						<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at 
						 vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi. 
						 Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
						<p>Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores.</p>
					</div>
				</article>
				<pre>
					<code class="php">
					$var = '111';
					</code>
				</pre>
				<div class="widget wid-related">
					<div class="heading"><h4>Related Post</h4></div>
					<div class="content">
						<div class="row">
							<div class="col-md-4">
								<div class="wrap-col">
									<a href="#"><img src="/exclusive/images/7.jpg" /></a>
									<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-col">
									<a href="#"><img src="/exclusive/images/8.jpg" /></a>
									<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
								</div>
							</div>
							<div class="col-md-4">
								<div class="wrap-col">
									<a href="#"><img src="/exclusive/images/6.jpg" /></a>
									<h4><a href="#">Vero eros et accumsan et iusto odio </a></h4>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('js')
<script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.13.1/highlight.min.js"></script>
<!-- <script src="https://gist.github.com/dragonir/b3b43d791c259b597907069020f4b754.js"></script> -->
	<script type="text/javascript">
		// hljs.initHighlightingOnLoad();

		$(document).ready(function() {
		  $('pre code').each(function(i, block) {
		    hljs.highlightBlock(block);
		  });
		});
		$("body").attr('class','sub-page');
	</script>
@endsection