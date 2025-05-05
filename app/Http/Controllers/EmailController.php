<?php

namespace App\Http\Controllers;

use App\Mail\EmailReply;
use Illuminate\Http\Request;
use App\Models\Complaint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;

Carbon::setLocale('id');


class EmailController extends Controller
{
    public function sendEmail(Request $request, $id)
    {
        $request->validate([
            'response_subject' => 'required|string',
            'response_message' => 'required|string'
        ]);

        DB::beginTransaction();
        try {
            $complaint = Complaint::findOrFail($id);
            $complaint->update([
                'response_subject' => $request->response_subject,
                'response_message' => $request->response_message,
                'status' => 'sudah dibalas',
                'response_at' => now(),
            ]);
            $complaint->save();
            DB::commit();
            Mail::to($complaint->email)->send(new EmailReply($complaint));
            return redirect()->route('admin.ReplyEmail')->with('success', 'Order berhasil disimpan!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal mengirim keluhan: ' . $e->getMessage());
        }
    }
}
