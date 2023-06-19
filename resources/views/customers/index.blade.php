@extends('layouts')


<!-- <!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-DB-App</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body> -->

@section('title')
    <div class="title">
        <h2>会員一覧</h2>
    </div>
@endsection


@section('content')
    <div class="title">
            @if (session('flash_message'))
                <p>{{ session('flash_message')}}</p>
            @endif    
        <h4>{{$greeting}}</h4>  

        <h5>{{$msg}}</h5>
    </div>  
    <div class="sort">
        
        <div class="btn-rapper">
            <a href="{{route('customers.create')}}" class="create-btn">新規作成</a>
        </div>
    </div>

    <div class="sort">
        <table class="all-column">         
            <tr>
                <th>ID</th>
                <th>氏名</th>
                <th>ふりがな</th>
                <th>メールアドレス</th>
                <th>年齢</th>
                <th>住所</th>
                <th>編集</th>
                <th> 削除</th>
            </tr>
            @each('components.each', $customers, 'customer')
            <!-- @foreach ($customers as $customer) 
                <tr>
                <td width="35">{{$customer->id}}</td>
                <td width="120">{{$customer->name}}</td>
                <td width="150">{{$customer->furigana}}</td>
                <td width="150"><middleware>{{$customer->email}}</middleware></td>
                <td width="50")>{{$customer->age}}</td>
                <td width="70">{{$customer->address}}</td>
                <td width="50"><a href="{{route('customers.edit', $customer)}}">編集</a></td>
                <td width="55"><form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('ユーザーを削除しますか？')">
                @csrf
                @method('DELETE')
                <button class="btn-delete" type="submit">削除</button></td>
                </form>
                </tr>           
            @endforeach -->
        </table>
    </div>
@endsection