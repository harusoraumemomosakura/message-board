<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use PhpParser\Node\Stmt\Return_;//追加

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = Message::all(); //全部表示

        return view('messages.index', [
            'messages' => $messages,//●●=>$▲▲・・・●●がビューファイルでの変数になる。
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // getでmessages/createにアクセスされた場合の「新規作成用の入力フォーム」
    public function create()
    {
        $message = new Message; //Message モデルのためのフォームが必要の為インスタンスを作成

        return view('messages.create', [
            'message' => $message, //●●=>$▲▲・・・●●がビューファイルでの変数になる。
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // postでmessages/にアクセスされた場合の「新規登録処理」
     public function store(Request $request)//creteで入力されたデータは「$request」に入っている
    {
        $this->validate($request, [
            'title' => 'required|max:191',   // 追加
            'content' => 'required|max:191',
        ]); //required (カラッポでない) かつ max:191 を検証
        
        $message = new Message;
        $message->title = $request->title;    // 追加
        $message->content = $request->content; //creteで入力された内容を「$message」へ代入
        $message->save();//保存

        return redirect('/'); //viewは作らずにindexへ戻る
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $message = Message::find($id); //$idを探して$messageに代入

        return view('messages.show', [
            'message' => $message, //●●=>$▲▲・・・●●がビューファイルでの変数になる。
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // getでmessages/id/editにアクセスされた場合の「更新画面表示処理」
     public function edit($id)
    {
        $message = Message::find($id); //$idを探して$messageに代入

        return view('messages.edit', [
            'message' => $message, //●●=>$▲▲・・・●●がビューファイルでの変数になる。
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // putまたはpatchでmessages/idにアクセスされた場合の「更新処理」
     public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required|max:191',   // 追加
            'content' => 'required|max:191',
        ]); //required (カラッポでない) かつ max:191 を検証
        
        $message = Message::find($id); //$idを探して$messageに代入
        $message->title = $request->title;    // 追加
        $message->content = $request->content; //editで入力された内容を「$message」へ代入
        $message->save();//保存

        return redirect('/'); //viewは作らずにindexへ戻る
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $message = Message::find($id); //$idを探して$messageに代入
        $message->delete();//削除

        return redirect('/'); //viewは作らずにindexへ戻る
    }
}
