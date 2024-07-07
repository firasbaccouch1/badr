<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use App\Mail\Appointment;
use App\Mail\ContantUs;
use Illuminate\Support\Facades\Mail;

class SendEmail extends Controller
{
    protected $Email = 'firasbaccouch98@gmail.com';
    public function ContactUs (Request $request){

        try {
            $data =[
                'name' => $request->name,
                'subject' => $request->subject,
                'phone' => $request->phone,
                'email' => $request->email,
                'msg' => $request->msg,
            ];
            Mail::to($this->Email)->send(new ContantUs($data));
            return response()->json('success');
        } catch (\Throwable $th) {
            Log::debug($th);
            return response()->json('error',400);
        }
    }
    public function Appointment(Request $request){

        try {
            $data =[
                'name' => $request->uname,
                'email' => $request->uemail,
                'number' => $request->unumber,
                'date' => $request->date,
                'msg' => $request->udate,
            ];
            Mail::to($this->Email)->send(new Appointment($data));
            return response()->json('success');
        } catch (\Throwable $th) {
            Log::debug($th);
            return response()->json('error',400);
        }
    }
}
