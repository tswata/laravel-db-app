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
        $request->validate([
            'お名前'=>'required',
            'ふりがな'=>'required',
            'メールアドレス'=>'required|email',
            '年齢'=>'required|between:0,100|numeric',
            '住所'=>'required']);
        // $this->validate($request,['user_name'=>'required']);
        $user = new User();
        $user->name = $request->input('お名前');
        $user->furigana = $request->input('ふりがな');
        $user->email = $request->input('メールアドレス');
        $user->age = $request->input('年齢');
        $user->address = $request->input('住所');
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
        $request->validate([
            'お名前'=>'required',
            'ふりがな'=>'required',
            'メールアドレス'=>'required|email',
            '年齢'=>'required|between:0,100|numeric',
            '住所'=>'required']);
        $user->name = $request->input('お名前');
        $user->furigana = $request->input('ふりがな');
        $user->email = $request->input('メールアドレス');
        $user->age = $request->input('年齢');
        $user->address = $request->input('住所');
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
