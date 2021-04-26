<?php

namespace App\Http\Controllers;

class NotFoundController
{
    public function index()
    {
        return view('not_found');
    }
}