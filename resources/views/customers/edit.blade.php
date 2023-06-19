@extends('layouts')

@section('title')
    
    <div class="title">
        <h2>ユーザー更新</h2>
    </div>
@endsection

@section('content')    
    <p>更新する内容を入力してください。</p>
    <br>
    <form action="{{route('customers.update', $customer)}}" method="post">
        @method('patch')
        @csrf
        <!-- <div>
            <label for="customer_name">お名前<span>【必須】</span></label>
            <input type="text" name="customer_name" value="{{$customer->name}}" maxlength="60" required>
            <br><br>

            <label for="customer_furigana">ふりがな<span>【必須】</span></label>
            <input type="text" name="customer_furigana" value="{{$customer->furigana}}" maxlength="60" required>
            <br><br>

            <label for="customer_email">メールアドレス<span>【必須】</span></label>
            <input type="email" name="customer_email" value="{{$customer->email}}" maxlength="255" required>
            <br><br>

            <label for="customer_age">年齢</label>
            <input type="number" name="customer_age" value="{{$customer->age}}" min="13" max="130">
            <br><br>

            <label for="customer_address">住所</label>
                <input type="text" name="customer_address" value="{{$customer->address}}" maxlength="255">
            <br><br>
        </div> -->
        <div class="form">
                @error('お名前')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="お名前">お名前<span>【必須】</span></label>
                <!-- <input type="text" name="customer_name" maxlength="60" required> -->
                <input type="text" name="お名前" value="{{old('お名前',$customer->name)}}">
            </div>

            <div class="form">             
                 @error('ふりがな')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="ふりがな">ふりがな<span>【必須】</span></label>
                <!-- <input type="text" name="customer_furigana" maxlength="60" required> -->
                <input type="text" name="ふりがな" value="{{old('ふりがな',$customer->furigana)}}">
            </div>

            <div class="form">
                @error('メールアドレス')
                <p class="validation"> {{$message}}</p>    
                @enderror
                <label for="メールアドレス">メールアドレス<span>【必須】</span></label>
                <!-- <input type="email" name="customer_email" maxlength="255" required> -->
                <input type="email" name="メールアドレス" value="{{old('メールアドレス',$customer->email)}}">
            </div>


            <div class="form">
                @error('年齢')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="年齢">年齢</label>
                <!-- <input type="number" name="customer_age" min="13" max="130"> -->
                <input type="number" name="年齢" value="{{old('年齢',$customer->age)}}">
            </div>

            <div class="form">
                @error('住所')
                <p class="validation"> {{$message}}</p>  
                @enderror
                <label for="住所">住所</label>
                <!-- <input type="text" name="customer_address" maxlength="255"> -->
                <input type="text" name="住所" value="{{old('住所',$customer->address)}}">
            </div>

        <button type="submit" name="submit" value="update">更新</button>
    </form>  
@endsection      
