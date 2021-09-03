<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use App\Mail\SendMail;
use App\Models\Group;
use App\Models\GroupList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Session::get('user')->id;
        $data = [
            'groups' => Group::where('user_id', $id)->get()
        ];
        return view('email.index', $data);
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
        // $email_list = [];
        // foreach ($request->group as $list) {
        //     $email_coll = GroupList::where('group_id', $list)->get();
        //     foreach ($email_coll as $mail) {
        //         array_push($email_list, $mail->email);
        //     }
        // };
        // dd($email_list);
        // return 'ok';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function sendEmail(Request $request)
    {

        $request->validate([
            'group' => 'required',
            'subject' => 'required',
            'body' => 'required'
        ]);

        $email_list = [];
        foreach ($request->group as $list) {
            $email_coll = GroupList::where('group_id', $list)->get();
            foreach ($email_coll as $mail) {
                array_push($email_list, $mail->email);
            }
        };

        $detail = [
            'email' => $email_list,
            'subject' => $request->subject,
            'body' => $request->body
        ];
        dispatch(new SendEmailJob($detail));

        return redirect()->back()->with('message', 'Email has been sent');
    }
}
