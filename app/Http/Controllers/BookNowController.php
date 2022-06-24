<?php

namespace App\Http\Controllers;

use App\Mail\BookNowMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Alert;

class BookNowController extends Controller
{
    public function index(Request $request)
    {
        $data = $request;

        Mail::to('hamada@gmail.com')->send(new BookNowMail($data));
        return redirect()->back()
        ->with('success', 'your booking send successfuly');
    }
}
