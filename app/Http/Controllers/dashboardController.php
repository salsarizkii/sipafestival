<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

Carbon::setLocale('id');


class dashboardController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
}
