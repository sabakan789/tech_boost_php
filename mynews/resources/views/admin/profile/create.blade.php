@extends('layouts.admin')
@section('title', 'profileの新規作成')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 mx-auto">
      <h2>ニュース新規作成</h2>
      <form action="{{ action('Admin\ProfileController@create') }}" method="post" enctype="multipart/form-data">

        <div class="form-group row">
          <label class="col-md-2" for="title">名前</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="name" value="{{ old('name') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">性別</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="title">趣味</label>
          <div class="col-md-10">
            <input type="text" class="form-control" name="hobby" value="{{ old('hobby') }}">
          </div>
        </div>
        <div class="form-group row">
          <label class="col-md-2" for="body">自己紹介</label>
          <div class="col-md-10">
            <textarea class="form-control" name="introduction" rows="10">{{ old('introduction') }}</textarea>
          </div>
        </div>
        <input type="submit" class="btn btn-primary" value="登録">
      </form>
    </div>
  </div>
</div>
@endsection