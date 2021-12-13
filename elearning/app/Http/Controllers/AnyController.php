<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class AnyController extends Controller
{
    public function clearSessionKey($key)
    {
        if (Session::has($key))
        {
            Session::forget($key);
        }
    }
}
