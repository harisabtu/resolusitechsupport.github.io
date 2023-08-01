<?php

namespace App\Controllers;

class Promocode extends BaseController
{
    public function index()
    {
        return view('dashboard/promocode');
        // return view('welcome_message');
    }
}
