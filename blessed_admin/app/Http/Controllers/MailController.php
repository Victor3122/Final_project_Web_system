<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\HelloMail;

class MailController extends Controller
{
    public function send(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        // Mail data
        $mail_data = [
            'recipient' => 'orrsu3333@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'subject' => $request->subject,
            'body' => $request->message
        ];

        // Sending email
        Mail::send('email-template', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });

        // Returning success response
        return response()->json(['success' => true, 'message' => 'Email Sent!']);
    }

    public function apiSend(Request $request)
    {
        // Validation
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required|string',
        ]);

        // Mail data
        $mail_data = [
            'recipient' => 'orrsu3333@gmail.com',
            'fromEmail' => $request->email,
            'fromName' => $request->name,
            'subject' => $request->subject,
            'body' => $request->message
        ];

        // Sending email
        Mail::send('email-template', $mail_data, function ($message) use ($mail_data) {
            $message->to($mail_data['recipient'])
                ->from($mail_data['fromEmail'], $mail_data['fromName'])
                ->subject($mail_data['subject']);
        });

        // Returning success response
        return response()->json(['success' => true, 'message' => 'Email Sent!']);
    }
}