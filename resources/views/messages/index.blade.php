@extends('layouts.app')

@section('content')

  <h1>メッセージ一覧</h1>

  @if (count($messages) > 0) <!--$messagesレコードが1個以上あれば-->
    <table class="table table-striped"><!--テーブル表示-->
        <thead>
          <tr>
            <th>id</th>
            <th>タイトル</th>
            <th>メッセージ</th>
          </tr>
        </thead>
        <tbody>          
          @foreach ($messages as $message)<!--一つづつ取り出して表示する-->
            <tr>
              <td>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!}</td><!--idの表示と「show」へのリンク-->
              <td>{{ $message->title }}</td><!--$messageからtitleを取り出して表示-->
              <td>{{ $message->content }}</td><!--$messageからcontentを取り出して表示-->         
            </tr>
          @endforeach
        </tbody>
    </table>
  @endif
    {!! link_to_route('messages.create', '新規メッセージの投稿', 
    null, ['class' => 'btn btn-primary']) !!} <!--青ボタン(btn btn-defau)表示--> 
    <!--link_to_route() は、
第三引数には、 ['id' => 1] のようなリンクを作るためのパラメータが入る
第四引数には、 ['class' => 'btn btn-primary'] のような HTML タグの属性が入る
となっています。だから「null」が入っている？--> 
    
@endsection
