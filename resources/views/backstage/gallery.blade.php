@extends('layout.backstage',['title' => 'Gallery'])
@section('css')
<link rel="stylesheet" href="/backstage/css/lightbox.css">
@endsection
@section('breadcrumb')
	Gallery
@endsection
@section('content')
<div class="gallery-grids">
	<div class="col-md-6 gallery-grids-left">
		<div class="gallery-grid">
			<a class="example-image-link" href="/backstage/images/g1.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
				<img src="/backstage/images/g1.jpg" alt="">
			</a>
		</div>
		<div class="gallery-grids-left-sub">
			<div class="col-md-6 gallery-grids-left-subl">
				<div class="gallery-grid"><a class="example-image-link" href="/backstage/images/g2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
						<img src="/backstage/images/g2.jpg" alt="">
					</a>
				</div>
				<div class="gallery-grid gallery-grid-sub">
					<a class="example-image-link" href="/backstage/images/g3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
						<img src="/backstage/images/g3.jpg" alt="">
					</a>
				</div>
			</div>
			<div class="col-md-6 gallery-grids-left-subr">
				<div class="gallery-grid">
					<a class="example-image-link" href="/backstage/images/g4.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
						<img src="/backstage/images/g4.jpg" alt="">
					</a>
				</div>
		</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<div class="col-md-6 gallery-grids-left">
		<div class="col-md-6 gallery-grids-right">
			<div class="gallery-grid">
				<a class="example-image-link" href="/backstage/images/g5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="/backstage/images/g5.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-md-6 gallery-grids-right">
			<div class="gallery-grid">
				<a class="example-image-link" href="/backstage/images/g6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="/backstage/images/g6.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="clearfix"> </div>
		<div class="gallery-grids-right1">
			<div class="gallery-grid">
				<a class="example-image-link" href="/backstage/images/g7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="/backstage/images/g7.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-md-6 gallery-grids-right">
			<div class="gallery-grid">
				<a class="example-image-link" href="/backstage/images/g8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="/backstage/images/g8.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="col-md-6 gallery-grids-right">
			<div class="gallery-grid">
				<a class="example-image-link" href="/backstage/images/g9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
					<img src="/backstage/images/g9.jpg" alt="">
				</a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="clearfix"> </div>
	<script src="/backstage/js/lightbox-plus-jquery.min.js"> </script>
</div>
<script>
	$(document).ready(function() {
		 var navoffeset=$(".header-main").offset().top;
		 $(window).scroll(function(){
			var scrollpos=$(window).scrollTop(); 
			if(scrollpos >=navoffeset){
				$(".header-main").addClass("fixed");
			}else{
				$(".header-main").removeClass("fixed");
			}
		 });
		 
	});
</script>
<div class="inner-block">
</div>
@endsection
@section('js')
<script src="/backstage/js/jquery.nicescroll.js"></script>
@endsection