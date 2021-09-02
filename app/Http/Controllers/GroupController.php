<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\GroupList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class GroupController extends Controller
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
        return view('groups.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('groups.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'group_name' => 'required',
            'email.*' => 'required|unique:group_lists,email'
        ]);

        $group = Group::create([
            'group_name' => $request->group_name,
            'user_id' => Session::get('user')->id,
        ]);

        $count = count($request->email);
        for ($i = 0; $i < $count; $i++) {
            GroupList::create([
                'group_id' => $group->id,
                'email' => $request->email[$i]
            ]);
        }

        return redirect('/groups')->with('message', 'Group Successfully added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = [
            'group' => Group::find($id),
            'lists' => GroupList::where('group_id', $id)->get()
        ];
        return view('groups.show', $data);
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
            'group_name' => 'required'
        ]);

        $group_id = Group::find($id);
        $group_id->update([
            'group_name' => $request->group_name
        ]);
        return redirect('groups')->with('message', 'Group successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $count = GroupList::where('group_id', $id)->count();
        for ($i = 0; $i < $count; $i++) {
            GroupList::where('group_id', $id)->delete();
        }

        Group::destroy($id);
        return redirect('groups')->with('message', 'Group successfully deleted');
    }
}
