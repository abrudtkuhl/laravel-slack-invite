<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Jobs\SendInvite;

class InviteController extends Controller
{
    public function index(Request $request)
    {
        $email = $request->email;
        $slug = $request->slug;
        $this->dispatch(new SendInvite($email, $slug));
        return view('success');
    }
}
