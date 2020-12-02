<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		$data = [
			'title' => 'Home'
		];
		return view('pages/index', $data);
	}
	public function login()
	{
		return view('pages/login');
		
	}
	public function register()
	{
		return view('pages/register');
		
	}
	public function keluar()
	{
		$data = [
			'title' => 'Obat Keluar'
		];
		return view('pages/keluar', $data);
	}
	public function masuk()
	{
		$data = [
			'title' => 'Obat Masuk'
		];
		return view('pages/masuk', $data);
	}
	public function stok()
	{
		$data = [
			'title' => 'Stok Obat'
		];
		return view('pages/stok', $data);
	}

	//--------------------------------------------------------------------

}
