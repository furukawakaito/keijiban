@extends('layout')
 
@section('content')
  <div class="col-md-4 col-md-offset-">
  <form action="{{ route('postSignup') }}" method="post" class="form-horizontal" style="margin-top: 50px;">
  
  <div class="form-group">
  <label for="name">氏名</label>
  <input type="text" id="name" name="name" class="form-control">
  </div>

  <div class="form-group">
  <label for="email">めーるあどれす</label>
  <input type="text" id="email" name="email" class="form-control" placeholder="メール・アドレス">
  </div>


  <div class="form-group">
  <label for="password">ぱすわあど</label>
  <input type="text" id="password" name="password" class="form-control" placeholder="ぱすわーど">
  </div>
  <div class="form-group">
  <div class="col-sm-offset-3 col-sm-9">
  <button type="submit" class="btn btn-primary btn-block">新規登録</button>
  </div>
 </div>
  {{ csrf_field() }}
  </form>
  </div>
@endsection