<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserMessage;

class UserMessageController extends Controller
{
    public function index()
    {
        $userMessages = UserMessage::paginate(10);

        return view('admin.userMessages.index', ['userMessages' => $userMessages]);
    }
}
