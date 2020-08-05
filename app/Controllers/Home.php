<?php

namespace App\Controllers;

use App\Models\Jobs;

class Home extends BaseController
{
	public function index()
	{
		$jobs = new Jobs();

		$data['jobs'] = $jobs->findAll();

		return view('home', $data);
	}
}
