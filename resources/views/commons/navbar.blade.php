<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <!-- 横幅が狭い時に出るハンバーガーボタン -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
                <a class="navbar-brand" href="/">MessageBoard</a>
            </div>
            <!-- メニュー項目 -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>{!! link_to_route('messages.create', '新規メッセージの投稿') !!}</li>
                </ul>
            </div>
        </div>
    </nav>
</header>