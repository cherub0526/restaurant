@extends('frontend.template')

@section('content')
<div class="container_12">
	<div class="grid_7">
		<h2>Welcome</h2>
		<div class="page1_block col1">
			<img src="images/welcome_img.png" alt="">
			<div class="extra_wrapper">
				<p><span class="col2"><a href="http://blog.templatemonster.com/free-website-templates/" rel="nofollow">Click here</a></span> for more info about this free website template created by TemplateMonster.com </p>
				Aenean nonummy hendrerit mau rellus porta. Fusce suscipit varius m sociis natoque penaibet magni parturient montes nasetur ridiculumula dui. <br>
				<a href="#" class="btn">more</a>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="grid_5">
		<h2>Features</h2>
		<ul class="list">
			<li><a href="#">Unlimited consultations and/or planning</a></li>
			<li><a href="#">Expert advice on traditions, customs, aetiquette</a></li>
			<li><a href="#">Determine and stay within budget</a></li>
			<li><a href="#">Choosing the right Wedding Venue</a></li>
			<li><a href="#">Provide preferred vendor's list</a></li>
			<li><a href="#">Assist with wedding scheme and design</a></li>
		</ul>
	</div>
	<div class="clear"></div>
	<div class="grid_12">
		<div class="hor_separator"></div>
	</div>
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