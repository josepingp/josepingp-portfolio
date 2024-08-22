<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CVController extends Controller
{

	public function download()
	{
		return response()->download("./img/Curriculum_Jose_Luis_Garcia_Pelayo.pdf");
	}
}
