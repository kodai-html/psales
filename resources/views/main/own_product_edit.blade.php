@extends('main.base')

@section('title', '自社商品編集画面')

@section('own_product_edit')
  <p>自社商品編集画面</p>
    {{-- 概要を入力する自社商品を選択する --}}
    <select name="owns_id" id="">
      <option value="#"><p> - </p></option>
      @foreach($own_products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
      @endforeach
    </select>
    
    {{-- 1.自社商品を選択すると機能概要入力フォームが表示されるイベントが発生する
         2.「+」押下すると入力フォームが追加されると同時に"id"が{next value}の状態で入力されているレコードが追加される --}}
  @foreach($own_details as $own_detail)
    <form method="POST" action="{{ route('storeOtherEdit') }}">
      @csrf
      {{-- jsを使用して11行目で選択した「owns_id」をvalueに格納する --}}
      <input type="hidden" name="owns_id" value="999">
      @if(isset($own_detail->id))
        <input name="id" type="hidden" value="{{ $own_detail->id }}">
      @endif
      <div>
        <label for="behavior">機能名</label>
        <input type="text" name="behavior" value="{{ $own_detail->behavior }}">
        <label for="type">数値か文字列を選択</label>
        <input type="integer" name="type" value="{{ $own_detail->type }}">
        <label for="int_value">数値入力フォーム</label>
        <input type="integer" name="int_value" value="{{ $own_detail->int_value }}">
        <label for="str_value">文字列入力フォーム</label>
        <input type="text" name="str_value" value="{{ $own_detail->str_value }}">
        <label for="remarks">備考</label>
        <input type="textarea" name="remarks" value="{{ $own_detail->remarks }}">
      </div>
      <br>
      <button class="btn btn-block" type="submit">登録</button>
    </form>
  @endforeach
  <a href="{{ route('menu') }}">戻る</a>
@endsection
