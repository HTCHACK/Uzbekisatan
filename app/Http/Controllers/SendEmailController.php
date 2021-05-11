<?php

namespace App\Http\Controllers;

use App\SendEmail;
use App\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dynamic_email_template',['send_emails'=>SendEmail::all()]);
    }

    public function send(Request $request)
    {

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'message' =>  'required',
            'email_id'=>'required',
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email_id' => $request->email_id
        );

        Mail::to('asatbekxalimjonov2000@gmail.com')->send(new SendMail($data));
        return redirect()->route('email.index')->with('asad', 'Thanks for contacting us!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function show(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function edit(SendEmail $sendEmail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SendEmail $sendEmail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SendEmail  $sendEmail
     * @return \Illuminate\Http\Response
     */
    public function destroy(SendEmail $sendEmail)
    {
        //
    }
}
