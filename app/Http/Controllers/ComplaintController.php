<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint; // Make sure you have a Complaint model
use Illuminate\Support\Facades\DB;

class ComplaintController extends Controller
{
    public function store(Request $request)
    {
        try {
            // Validate input
            $validated = $request->validate([
                'name' => 'required|string',
                'email' => 'required|email',
                'subject' => 'required|string',
                'message' => 'required|string',
                // 'status' => 'string'
            ]);

            // dd($validated);

            DB::beginTransaction();
            // Save complaint data
            $complaint = Complaint::create([
                'name' => $request->name,
                'email' => $request->email,
                'subject' => $request->subject,
                'message' => $request->message,
                'status' => 'belum dibalas',
                'sent_at' => now(),
            ]);

            DB::commit();
            // Send email logic here
            // Mail::to($request->email)->send(new EmailReply($request->name, $request->subject, $request->message));
            // You can also use the following line to send an email
            return redirect('/')->with('success', 'Order berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal mengirim keluhan: ' . $e->getMessage());
        }
    }

    public function showComplaint()
    {
        $complaints = Complaint::all();
        return view('admin/dashboard', compact('complaints'));
    }

    public function sendEmail(Request $request, $id)
    {
        $complaint = Complaint::findOrFail($id);
        $name = $complaint->name;
        $subject = $complaint->subject;
        $message = $complaint->message;

        // Send email logic here
        // Mail::to($complaint->email)->send(new EmailReply($name, $subject, $message));

        return view('admin.reply', compact('complaint'));
    }
}
