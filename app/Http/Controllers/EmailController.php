<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\Auth;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            'response_subject' => 'required|string',
            'response_message' => 'required|string'
        ]);

        Complaint::create([
            'response_subject' => $request->response_subject,
            'response_message' => $request->response_message,
            'status' => 'sudah dibalas',
            'response_by' => Auth::user()->name,
            'response_at' => now(),
        ]);
    }
}
