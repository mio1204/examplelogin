<style>
  th {
    background-color: black;
    color: white;
    padding: 5px 30px;
  }

  td {
    border: 1px solid black;
    padding: 5px 30px;
    text-align: center;
  }

  svg.w-5.h-5 {
    /*paginateメソッドの矢印の大きさ調整のために追加*/
    width: 30px;
    height: 30px;
  }
</style>

@if (Auth::check())
<p>USER: {{'ようこそ'.Auth::user()->name.'さん'}}</p>
@else
<p>※ログインしていません。（<a href="/login">ログイン</a>｜
  <a href="/register">登録</a>）
</p>
@endif