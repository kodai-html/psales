@extends('main.base')

@section('title', 'トップメニュー')

@section('other_product_register')
  <p>他社商品登録画面</p>

  <form method="POST" action="{{ route('storeComparedProductRegister') }}">
    @csrf
    <div class="md-form">
      {{-- どの提案商品に対する対向商品か選択する --}}
      <label for="" class="form-label">登録する他社商品が比較される自社商品を選択してください</label>
      <select name="proposed_id" id="" class="form-select">
        <option value=""> - </option>
        @foreach($products as $product)
          <option value={{ $product->id }}>
              {{ $product->name }}
          </option>
        @endforeach
      </select>

      <br>
      
      {{-- <input  class="form-control" type="hidden" value="{{ old('id') }}" required> --}}

      <label for="name" class="form-label">商品名</label>
      <input class="form-control" type="text" id="name" name="name" value="{{ old('name') }}" required>

      <label for="name" class="form-label">備考</label>
      <input class="form-control" type="textarea" id="remarks" name="remarks" value="{{ old('remarks') }}">
    </div>
    
    <button class="btn btn-block" type="submit">送信</button>
  
  </form>
@endsection

