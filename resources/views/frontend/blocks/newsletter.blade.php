<div class="grid_6">
	<h3>Follow Us</h3>
	<div class="socials">
		<a href="#"></a>
		<a href="#"></a>
		<a href="#"></a>
	</div>
	<nav>
		<ul>
			<li @if($menuActive == 'index') class="current" @endif><a href="{{ url('') }}">首頁</a></li>
			<li @if($menuActive == 'about') class="current" @endif><a href="{{ url('about') }}">關於我們</a></li>
			<li @if($menuActive == 'menu') class="current" @endif><a href="{{ url('menu') }}">菜單</a></li>
			<li @if($menuActive == 'portfolio') class="current" @endif><a href="{{ url('portfolio') }}">美食佳餚</a></li>
			<li @if($menuActive == 'news') class="current" @endif><a href="{{ url('news') }}">最新消息</a></li>
			<li @if($menuActive == 'contact') class="current" @endif><a href="{{ url('contact') }}">聯絡我們</a></li>
		</ul>
	</nav>
</div>
<div class="grid_6">
	<h3>Email Updates</h3>
	<p class="col1">Join our digital mailing list and get news<br> deals and be first to know about events</p>
	<form id="newsletter">
		<div class="success">Your subscribe request has been sent!</div>
		<label class="email">
			<input type="email" value="Enter e-mail address" >
			<a href="#" class="btn" data-type="submit">subscribe</a>
			<span class="error">*This is not a valid email address.</span>
		</label>
	</form>
</div>