@extends('layouts')

@section('title')
<div class="return">
        <a href="{{route('users.index')}}">戻る</a>
    </div>
    <h1>ユーザー登録</h1>
@endsection

@section('content')    
    <p>ユーザー情報を入力してください。</p>
    <!-- @if($errors->any()) -->
        <!-- <div>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif -->
    
    <form action="{{route('users.store')}}", method="post">
        @csrf
    
            <div class="form">
                @error('お名前')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="お名前">お名前<span>【必須】</span></label>
                <!-- <input type="text" name="user_name" maxlength="60" required> -->
                <input type="text" name="お名前" value="{{old('お名前')}}">
            </div>

            <div class="form">             
                 @error('ふりがな')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="ふりがな">ふりがな<span>【必須】</span></label>
                <!-- <input type="text" name="user_furigana" maxlength="60" required> -->
                <input type="text" name="ふりがな" value="{{old('ふりがな')}}">
            </div>

            <div class="form">
                @error('メールアドレス')
                <p class="validation"> {{$message}}</p>    
                @enderror
                <label for="メールアドレス">メールアドレス<span>【必須】</span></label>
                <!-- <input type="email" name="user_email" maxlength="255" required> -->
                <input type="email" name="メールアドレス" value="{{old('メールアドレス')}}">
            </div>


            <div class="form">
                @error('年齢')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="年齢">年齢</label>
                <!-- <input type="number" name="user_age" min="13" max="130"> -->
                <input type="number" name="年齢" value="{{old('年齢')}}">
            </div>

            <div class="form">
                @error('住所')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="住所">住所</label>
                <!-- <input type="text" name="user_address" maxlength="255"> -->
                <input type="text" name="住所" value="{{old('住所')}}">
            </div>

        <button type="submit" name="submit" value="insert">登録</button>
    </form>   
@endsection   