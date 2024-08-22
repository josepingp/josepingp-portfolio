<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
	public function submit(Request $request)
	{

		$validatedData = $request->validate([
			'name' => 'required',
			'email' => 'required|email',
			'message' => 'required',
		]);

		Mail::to('josepingp@gmail.com')->send(new ContactMail($validatedData['name'], $validatedData['email'], $validatedData['message']));
		//Send email
		return response()->json([
			'success' => true,
		]);

	}
}

