<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class XieLeiController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        echo '磊哥,整了一下午了啊';
    }
    public function show()
    {
        return view('show');
    }


}
