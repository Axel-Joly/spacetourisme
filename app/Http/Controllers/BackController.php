<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class BackController extends Controller
{
    public function login(): View
    {
        return view('back.login', [
               
        ]);
    }
    public function backspace(): View
    {
        return view('back.backspace', [     
        ]);
    }
}
