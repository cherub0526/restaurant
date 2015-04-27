@extends('frontend.template')

@section('content')
<div class="container_12">
	<div class="grid_12">
		<div class="car_wrap">
			<h2>Best Choice</h2>
			<a href="#" class="prev"></a><a href="#" class="next"></a>
			<ul class="carousel1">
				<li><div><img src="images/page1_img1.jpg" alt="">
					<div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
					<span> Dorem ipsum dolor amet consectetur</span>
					<div class="price">45$</div></div>
				</li>
				<li><div><img src="images/page1_img2.jpg" alt="">
					<div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
					<span> Dorem ipsum dolor amet consectetur</span>
					<div class="price">45$</div></div>
				</li>
				<li><div><img src="images/page1_img3.jpg" alt="">
					<div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
					<span> Dorem ipsum dolor amet consectetur</span>
					<div class="price">45$</div></div>
				</li>
				<li><div><img src="images/page1_img4.jpg" alt="">
					<div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
					<span> Dorem ipsum dolor amet consectetur</span>
					<div class="price">45$</div></div>
				</li>
				<li><div><img src="images/page1_img3.jpg" alt="">
					<div class="col1 upp"> <a href="#">Lorem ipsum doamet consectet</a></div>
					<span> Dorem ipsum dolor amet consectetur</span>
					<div class="price">45$</div></div>
				</li>
			</ul>
		</div>

	</div>
	<div class="clear"></div>
	<div class="bottom_block">
		@include('frontend.blocks.newsletter')
	</div>
	<div class="clear"></div>
</div>
@endsection