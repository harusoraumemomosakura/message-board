@extends('layouts.app')

@section('content')

  <h1>id = {{ $message->id }} のメッセージ編集ページ</h1>

<div class="row">
<div class="col-xs-6">  

                                                    <!--「$message->id」でidもPUTで運んでいる-->
{!! Form::model($message, ['route' => ['messages.update', $message->id], 'method' => 'put']) !!}
 <div class="form-group">
  {!! Form::label('title', 'タイトル:') !!}
  {!! Form::text('title', null, ['class' => 'form-control']) !!}
 </div> 

 <div class="form-group">
  {!! Form::label('content','メッセージ:') !!}
  {!! Form::text('content', null, ['class' => 'form-control']) !!}<!--「Form::model」を使うことによりフィールド名に一致するモデルの値が自動的にフィールド値として設定されている-->
                               <!--viewでは既に元のコンテンツが入って表示される-->

 </div>

  {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}

{!! Form::close() !!}

</div>
</div>
    
@endsection
