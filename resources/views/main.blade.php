<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <table>
    <tr>
      <th> todolist</th>
    </tr>
    <form action="/add" method="post">
      @csrf
      <tr>
        <td class="text" colspan='3'>
          <input type="text " name="list">
        </td>
        <td>
          <input type="submit" value="追加" 　>
        </td>
      </tr>
    </form>
    @if(count($errors)>0)
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
    @endif

    @foreach($items as $item)
    <tr>
      <th>作成日</th>
      <th>タスク名</th>
      <th>更新</th>
      <th>削除</th>
    </tr>
    <tr>
      <td>{{$item->updated_at}}</td>
      <form action="{{route('person.update',['id'=>$item->id])}}" method="POST">
        <td><input type="text" value="{{$item->list}}" name='list'>
        </td>
        <td>
          @csrf
          <input type="submit" value="更新">
        </td>
        <td>
          <form action="{{ route('person.delete', ['id' => $item->id]" method="POST">
            @csrf
            <input type="submit" value="削除" class="third">
          </form>
        </td>
    </tr>

    @endforeach

    <table>
</body>

</html>