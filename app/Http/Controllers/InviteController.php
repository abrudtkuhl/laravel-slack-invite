<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InviteController extends Controller
{
    public function invite() {
        $email = Request::get('email');
        $this->dispatch(new SendInvite($email));
        return view('success');
    }
}
