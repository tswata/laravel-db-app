<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate(['user_name'=>'required']);
        $user = new User();
        $user->name = $request->input('user_name');
        $user->furigana = $request->input('user_furigana');
        $user->email = $request->input('user_email');
        $user->age = $request->input('user_age');
        $user->address = $request->input('user_address');
        $user->save();
        return redirect()->route('users.index') -> with('flash_message', '登録が完了しました');
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('users.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->name = $request->input('user_name');
        $user->furigana = $request->input('user_furigana');
        $user->email = $request->input('user_email');
        $user->age = $request->input('user_age');
        $user->address = $request->input('user_address');
        $user->save();
        return redirect()->route('users.index') -> with('flash_message', '変更が完了しました');
    } 


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        // $name = $user->name;
        $user->delete();
        return redirect()->route('users.index')->with('flash_message',"ユーザー $user->name を削除しました");
    }
}
