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

    <div class="container h-100">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @include('modals.add_comment')

        <div class="d-flex mb-3">
            <a href="#" class="link-dark text-decoration-none" data-bs-toggle="modal" data-bs-target="#addCommentModal">
                <div class="d-flex align-items-center">
                    <span class="fs-5 fw-bold">+</span>&nbsp;コメントの追加
                </div>
             </a>
        </div>
    </div>

    <div class="row row-cols-1 row row-cols-md-2 row-cols-lg-3 g-4">                         
             @foreach ($comments as $comment) 
             
                 <!-- 目標の編集用モーダル -->
                 @include('modals.edit_comment') 
 
                 <!-- 目標の削除用モーダル -->
                 @include('modals.delete_comment')  
 
                 <div class="col">     
                     <div class="card bg-light">
                         <div class="card-body d-flex justify-content-between align-items-center">
                             <h4 class="card-title ms-1 mb-0">{{ $comment->comment }}</h4>
                             <div class="d-flex align-items-center">                                 
                                 <div class="dropdown">
                                     <a href="#" class="dropdown-toggle px-1 fs-5 fw-bold link-dark text-decoration-none menu-icon" id="dropdownCommentMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">︙</a>
                                     <ul class="dropdown-menu dropdown-menu-end text-center" aria-labelledby="dropdownCommentMenuLink">
                                         <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#editCommentModal{{ $comment->id }}">編集</a></li>                                   
                                         <div class="dropdown-divider"></div>
                                         <li><a href="#" class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deleteCommentModal{{ $comment->id }}">削除</a></li>                                                                                                          
                                     </ul>
                                 </div>
                             </div>
                         </div>
                     </div>                           
                 </div>
             @endforeach                       
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