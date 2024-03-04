<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\user;

class AthController extends Controller
{
    public function show()
    {
return view(('auth.login'));
    }
    public function login()
    {

    }

}
