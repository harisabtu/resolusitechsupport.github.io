<?php

namespace App\Controllers;

class Sentemail extends BaseController
{
    public function index()
    {
        return view('dashboard/sent_email');
        // return view('welcome_message');
    }
}
