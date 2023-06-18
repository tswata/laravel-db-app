<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;
// use Validator;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $customers = Customer::all();
        if ($request->hasCookie('msg'))
        {
            $msg = '直近に登録されたお名前は' . $request->cookie('msg');
        }else{
            $msg = "直近に登録はありません";
        }
            return view('customers.index',compact('customers','msg'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        // $request->validate([
        //     'お名前'=>'required',
        //     'ふりがな'=>'required',
        //     'メールアドレス'=>'required|email',
        //     '年齢'=>'required|between:0,100|numeric',
        //     '住所'=>'required']);

        // $this->validate($request,['user_name'=>'required']);

        // $validator = Validator::make($request->all(),[
        // 'お名前'=>'required',
        // 'ふりがな'=>'required',
        // 'メールアドレス'=>'required|email',
        // '年齢'=>'required|between:0,100|numeric',
        // '住所'=>'required']);
        // if ($validator->fails()) {
        //     return redirect()->route('users.create')->withErrors($validator)->withInput();
        // }else{

        $customer = new Customer();
        $customer->name = $request->input('お名前');
        $customer->furigana = $request->input('ふりがな');
        $customer->email = $request->input('メールアドレス');
        $customer->age = $request->input('年齢');
        $customer->address = $request->input('住所');
        $customer->save();
        // $response = redirect()->route('users.index') -> with('flash_message', '登録が完了しました');
        // $response->cookie('msg', $user->name, 1);
        // return $response;
        // return redirect()->route('users.index') -> with('flash_message', '登録が完了しました');
        return redirect()->route('customers.index') -> with('flash_message', '登録が完了しました') ->withCookie('msg', $customer->name, 1);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Customer $customer)
    {
        return view('customers.edit',compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request, Customer $customer)
    {
        // $request->validate([
        //     'お名前'=>'required',q
        //     'ふりがな'=>'required',
        //     'メールアドレス'=>'required|email',
        //     '年齢'=>'required|between:0,100|numeric',
        //     '住所'=>'required']);
        $customer->name = $request->input('お名前');
        $customer->furigana = $request->input('ふりがな');
        $customer->email = $request->input('メールアドレス');
        $customer->age = $request->input('年齢');
        $customer->address = $request->input('住所');
        $customer->save();
        return redirect()->route('customers.index') -> with('flash_message', '変更が完了しました');
    } 


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Customer $customer)
    {
        // $name = $user->name;
        $customer->delete();
        return redirect()->route('customers.index')->with('flash_message',"ユーザー $customer->name を削除しました");
    }
}
