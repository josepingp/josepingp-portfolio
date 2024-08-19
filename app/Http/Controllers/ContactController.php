<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;

class ContactController extends Controller
{
	public function submit(Request $request)
	{

		$validatedData = $request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
		]);

		//Send email
		return response()->json([
			'success' => true,
		]);

	}
}

