@extends('frontend.template')

@section('content')
<div class="container_12">
	<div class="grid_7">
		<h2>地理位置</h2>
		<div class="map">
			<figure class="img_inner">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3612.86060382631!2d121.531931!3d25.106579601244423!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3442ae9c9ab5780b%3A0xe138ba9ac0460ac1!2z5pyd5rmY6ZaA!5e0!3m2!1szh-TW!2stw!4v1429981666956" width="600" height="450" frameborder="0" style="border:0"></iframe>
			</figure>
			<address>
				<dl>
					<dt><p>朝湘門小館<br>111台北市士林區忠義街84號.</p></dt>
					<dd><span>聯絡電話:</span>02 2831 2017</dd>
					<dd><span>營業時間:</span>11:00–14:00、 17:30–21:00</dd>
				</dl>
			</address>
		</div>
	</div>

	<div class="grid_5">
		<h2>聯絡我們</h2>
		<form id="form">
			<div class="success_wrapper">
				<div class="success" style="display: none;">訊息已送出！<br>
					<strong>我們將迅速與您聯絡.</strong>
				</div>
			</div>
			<fieldset>
				<label class="name">
					<input type="text" value="姓名:">
					<br class="clear">
					<span class="error error-empty" style="display: none;">*This is not a valid name.</span>
					<span class="empty error-empty" style="display: none;">*請輸入 姓名.</span>
				</label>
				<label class="email">
					<input type="text" value="E-mail:">
					<br class="clear">
					<span class="error error-empty" style="display: none;">*This is not a valid email address.</span>
					<span class="empty error-empty" style="display: none;">*請輸入 E-mail.</span>
				</label>
				<label class="phone">
					<input type="tel" value="聯絡電話:">
					<br class="clear">
					<span class="error error-empty" style="display: none;">*This is not a valid phone number.</span>
					<span class="empty error-empty" style="display: none;">*請輸入 聯絡電話.</span>
				</label>
				<label class="message">
					<textarea>訊息:</textarea>
					<br class="clear">
					<span class="error" style="display: none;">*The message is too short.</span>
					<span class="empty" style="display: none;">*請輸入 訊息.</span>
				</label>
				<div class="clear"></div>
				<div class="btns">
					<a data-type="reset" class="btn">清除</a>
					<a data-type="submit" class="btn">送出</a>
					<div class="clear"></div>
				</div>
			</fieldset>
		</form>
	</div>
	<div class="clear"></div>
	<div class="bottom_block">
		@include('frontend.blocks.newsletter')
	</div>
	<div class="clear"></div>
</div>
@endsection