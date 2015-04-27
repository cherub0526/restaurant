<header>
	<div class="container_12">
		<div class="grid_12">
			<h1><a href="{{ url('') }}"><img src="{{ asset('images/deepRedLogo.png') }}" alt="EXTERIOR"></a> </h1>
			<div class="menu_block">
				<nav  class="" >
					<ul class="sf-menu">
						<li @if($menuActive == 'index') class="current" @endif><a href="{{ url('/') }}">首頁</a></li>
						<li @if($menuActive == 'about') class="current" @endif><a href="{{ url('about') }}">關於我們</a></li>
						<li @if($menuActive == 'menu') class="current" @endif><a href="{{ url('menu') }}">菜單</a></li>
						<li @if($menuActive == 'portfolio') class="current" @endif><a href="{{ url('portfolio') }}">美食佳餚</a></li>
						<li @if($menuActive == 'news') class="current" @endif><a href="{{ url('news') }}">最新消息 </a></li>
						<li @if($menuActive == 'contact') class="current" @endif><a href="{{ url('contact') }}">聯絡我們</a></li>
					</ul>
				</nav>
				<div class="clear"></div>
			</div>
			<div class="clear"></div>
		</div>
	</div>
</header>