<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Share;

class RestaurantController extends Controller {

	public function __construct()
	{
		$actionName = \Route::getCurrentRoute()->getActionName();
		$active = explode('@',$actionName);
		$data = array(
			'share' => Share::load(asset(''), '朝湘門小館'),
			'menuActive' => $active[1]
		);
		return view()->share($data);
	}

	public function index()
	{
		$data = array(
			'slider' => true,
			'bodyClass' => 'content page1'
		);
		return view('frontend.pages.index',$data);
	}

	public function about()
	{
		$data = array(
		);
		return view('frontend.pages.about',$data);
	}

	public function menu()
	{
		$data = array(
		);
		return view('frontend.pages.menu',$data);
	}

	public function portfolio()
	{
		$data = array(
		);
		return view('frontend.pages.portfolio',$data);
	}

	public function news()
	{
		$data = array(
		);
		return view('frontend.pages.news',$data);
	}

	public function contact()
	{
		$data = array(
		);
		return view('frontend.pages.contact',$data);
	}


}
