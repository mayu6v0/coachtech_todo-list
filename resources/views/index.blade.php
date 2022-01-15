<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
  <link rel="stylesheet" href="{{asset('/reset.css')}}" />
  <link rel="stylesheet" href="{{asset('/style.css')}}" />
</head>
<body>
  <div class="container">
    <div>
      <p class="title">Todo List</p>
      @error('content')
        <ul>
          <li>{{$message}}</li>
        </ul>
      @enderror
      <form action="/todo/create" method="post" class="form-create">
        @csrf
        <input type="text" name="content" class="input input-create">
        <button class="btn create_btn" >追加</button>
      </form>
      <table>
          <tr>
            <th class="created_at">作成日</th>
            <th class="tasks">タスク名</th>
            <th class="update">更新</th>
            <th class="delete">削除</th>
          </tr>
          @foreach ($items as $item)
          <tr>
            <td>{{$item->created_at}}</td>
            <form action="/todo/update/{{$item->id}}" method="post">
            @csrf
              <td><input type="text" name="content" value="{{$item->content}}" class="input input-update" ></td>
              <td><button class="btn update_btn">更新</button></td>
            </form>
            <form action="/todo/delete/{{$item->id}}" method="post">
            @csrf
              <td><button class="btn delete_btn">削除</button></td>
            </form>
          </tr>
          @endforeach

        </table>
        </div>
      </div>
</body>
</html>