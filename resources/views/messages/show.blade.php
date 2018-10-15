@extends('layouts.app')

@section('content')

  <h1>id = {{ $message->id }} のメッセージ詳細ページ</h1>

    <table class="table table-bordered"><!--テーブル表示-->
        <tr>
            <th>id</th>
            <td>{{ $message->id }}</td><!--id表示-->
        </tr>
        <tr>
            <th>タイトル</th>
            <td>{{ $message->title }}</td><!--title表示-->
        </tr>
        <tr>
            <th>メッセージ</th>
            <td>{{ $message->content }}</td><!--content表示-->
        </tr>
    </table>
  
  <!---editへのリンク-->
  {!! link_to_route('messages.edit', 'このメッセージを編集', ['id' => $message->id], ['class' => 'btn btn-default']) !!}<!--[btn btn-default･･･ボタン表示]-->

  <br>
  <br>
  <!--削除ボタン作成-->
  {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!} 
    {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}<!--[btn btn-danger･･･ボタン表示]-->
  {!! Form::close() !!}

@endsection