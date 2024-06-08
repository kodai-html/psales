@extends('main.base')

@section('title', 'トップメニュー')

@section('proposed_product_continue')
  <p>自社商品チャート用データ登録画面</p>

  <form action="{{ route('storeProposedProductContinues') }}">
  @csrf
    <label for="" class="form-label">登録する他社商品が比較される自社商品を選択してください</label>
    <select name="proposed_id" id="form-label">
      <option value="#"> - </option>
      @foreach ($proposed_products as $proposed_product)
        <option value="{{ $proposed_product->id }}">{{ $proposed_product->name }}</option>
      @endforeach
    </select>
    <br>
    
  </form>

@endsection
