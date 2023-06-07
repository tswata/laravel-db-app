<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel-DB-App</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="title">
        <h2>会員一覧</h2>
            @if (session('flash_message'))
                <p>{{ session('flash_message')}}</p>
            @endif    
            <h3>{{$greeting}}</h3>  
    </div>  
    <div class="sort">
        
        <div class="btn-rapper">
            <a href="{{route('users.create')}}" class="create-btn">新規作成</a>
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
            <th>削除</th>
        </tr>
        @foreach ($users as $user) 
            <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td width="150">{{$user->furigana}}</td>
            <td><middleware>{{$user->email}}</middleware></td>
            <td width="35")>{{$user->age}}</td>
            <td width="80">{{$user->address}}</td>
            <td width="45"><a href="{{route('users.edit', $user)}}">編集</a></td>
            <!-- <td><a href="{{route('users.destroy', $user)}}">削除</a></td> -->
            <td width="45"><form action="{{ route('users.destroy', $user) }}" method="POST" onsubmit="return confirm('ユーザーを削除しますか？')">
            @csrf
            @method('DELETE')
            <button class="btn-delete" type="submit">削除</button></td>
            </form>
            </tr>           
        @endforeach
    </table>
    </div>
</body>

</html>