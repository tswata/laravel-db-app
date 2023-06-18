<tr>
<td width="35">{{$customer->id}}</td>
<td width="120">{{$customer->name}}</td>
<td width="150">{{$customer->furigana}}</td>
<td width="150"><middleware>{{$customer->email}}</middleware></td>
<td width="50")>{{$customer->age}}</td>
<td width="70">{{$customer->address}}</td>
<td width="50"><a href="{{route('customers.edit', $customer)}}">編集</a></td>
<!-- <td><a href="{{route('customers.destroy', $customer)}}">削除</a></td> -->
<td width="55"><form action="{{ route('customers.destroy', $customer) }}" method="POST" onsubmit="return confirm('ユーザーを削除しますか？')">
@csrf
@method('DELETE')
<button class="btn-delete" type="submit">削除</button></td>
</form>
</tr>         