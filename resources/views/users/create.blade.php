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
    <h1>ユーザー登録</h1>
    <p>ユーザー情報を入力してください。</p>
    <form action="{{route('users.store')}}", method="post">
        @csrf
        <div>
            <label for="user_name">お名前<span>【必須】</span></label>
            <input type="text" name="user_name" maxlength="60" required>
            <br><br>

            <label for="user_furigana">ふりがな<span>【必須】</span></label>
            <input type="text" name="user_furigana" maxlength="60" required>
            <br><br>

            <label for="user_email">メールアドレス<span>【必須】</span></label>
            <input type="email" name="user_email" maxlength="255" required>
            <br><br>

            <label for="user_age">年齢</label>
            <input type="number" name="user_age" min="13" max="130">
            <br><br>

            <label for="user_address">住所</label>
            <input type="text" name="user_address" maxlength="255">
            <br><br>
        </div>
        <button type="submit" name="submit" value="insert">登録</button>
    </form>        
</body>
</html>