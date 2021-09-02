<?php

namespace App\Http\Controllers;

use App\Models\GroupList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        return view('groupList.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {
        $request->validate([
            'email.*' => 'required'
        ]);

        $count = count($request->email);
        for ($i = 0; $i < $count; $i++) {
            GroupList::create([
                'group_id' => $id,
                'email' => $request->email[$i]
            ]);
        }

        return redirect('groups/' . $id)->with('message', 'Member successfully added');
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
        $request->validate([
            'email' => 'required|email'
        ]);

        $email_id = GroupList::find($id);

        $email_id->update([
            'email' => $request->email
        ]);
        return redirect()->back()->with('message', 'Member successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GroupList::destroy($id);
        return redirect()->back()->with('message', 'Member successfully deleted');
    }
}
