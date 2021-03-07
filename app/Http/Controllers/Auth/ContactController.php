<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMessage;
use Auth;

class ContactController extends Controller
{
    public function contact()
    {
        return view('home.contact');
    }

    public function store(Request $request)
    {
        $userMessage = new UserMessage;

        $userMessage->subject = $request->subject;
        $userMessage->message = $request->message;
        $userMessage->user_id = Auth::user()->id;

        $userMessage->save();

        return redirect()->route('contact')->with('success');
    }
}
