<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-DB-App</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="return">
        <a href="{{route('users.index')}}">戻る</a>
    </div>
    <h2>ユーザー更新</h2>
    <p>更新する内容を入力してください。</p>
    <br>
    <form action="{{route('users.update', $user)}}" method="post">
        @method('patch')
        @csrf
        <div>
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
        </div>
        <button type="submit" name="submit" value="update">更新</button>
    </form>        
</body>
</html>