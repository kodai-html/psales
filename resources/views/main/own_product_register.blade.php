@extends('main.base')

@section('title', 'トップメニュー')

@section('own_product_register')
  <p>自社商品登録画面</p>

  <form method="POST" action="{{ route('storeOwnRegister') }}">
    @csrf
    <div class="md-form">
      <input  class="form-control" type="hidden" value="{{ old('id') }}" required>

      <label for="name">商品名</label>
      <input  class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" required>

      <label for="name">備考</label>
      <input  class="form-control" type="textarea" id="remarks" name="remarks" value="{{ old('remarks') }}">
    </div>
    
    <button class="btn btn-block" type="submit">送信</button>
  
  </form>
@endsection
