@extends('layouts')

@section('title')
    <div class="return">
        <a href="{{route('users.index')}}">戻る</a>
    </div>
    <div class="title">
        <h1>ユーザー更新</h1>
    </div>
@endsection

@section('content')    
    <p>更新する内容を入力してください。</p>
    <br>
    <form action="{{route('users.update', $user)}}" method="post">
        @method('patch')
        @csrf
        <!-- <div>
            <label for="user_name">お名前<span>【必須】</span></label>
            <input type="text" name="user_name" value="{{$user->name}}" maxlength="60" required>
            <br><br>

            <label for="user_furigana">ふりがな<span>【必須】</span></label>
            <input type="text" name="user_furigana" value="{{$user->furigana}}" maxlength="60" required>
            <br><br>

            <label for="user_email">メールアドレス<span>【必須】</span></label>
            <input type="email" name="user_email" value="{{$user->email}}" maxlength="255" required>
            <br><br>

            <label for="user_age">年齢</label>
            <input type="number" name="user_age" value="{{$user->age}}" min="13" max="130">
            <br><br>

            <label for="user_address">住所</label>
                <input type="text" name="user_address" value="{{$user->address}}" maxlength="255">
            <br><br>
        </div> -->
        <div class="form">
                @error('お名前')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="お名前">お名前<span>【必須】</span></label>
                <!-- <input type="text" name="user_name" maxlength="60" required> -->
                <input type="text" name="お名前" value="{{old('お名前',$user->name)}}">
            </div>

            <div class="form">             
                 @error('ふりがな')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="ふりがな">ふりがな<span>【必須】</span></label>
                <!-- <input type="text" name="user_furigana" maxlength="60" required> -->
                <input type="text" name="ふりがな" value="{{old('ふりがな',$user->furigana)}}">
            </div>

            <div class="form">
                @error('メールアドレス')
                <p class="validation"> {{$message}}</p>    
                @enderror
                <label for="メールアドレス">メールアドレス<span>【必須】</span></label>
                <!-- <input type="email" name="user_email" maxlength="255" required> -->
                <input type="email" name="メールアドレス" value="{{old('メールアドレス',$user->email)}}">
            </div>


            <div class="form">
                @error('年齢')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="年齢">年齢</label>
                <!-- <input type="number" name="user_age" min="13" max="130"> -->
                <input type="number" name="年齢" value="{{old('年齢',$user->age)}}">
            </div>

            <div class="form">
                @error('住所')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="住所">住所</label>
                <!-- <input type="text" name="user_address" maxlength="255"> -->
                <input type="text" name="住所" value="{{old('住所',$user->address)}}">
            </div>

        <button type="submit" name="submit" value="update">更新</button>
    </form>  
@endsection      
