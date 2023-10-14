@extends('main.base')

@section('title', 'トップメニュー')

@section('other_product_edit')
  <p>他社商品編集画面</p>
    {{-- 概要を入力する自社商品を選択する --}}
    <select name="others_id" id="">
      <option value="#"><p> - </p></option>
      @foreach($other_products as $product)
        <option value="{{ $product->id }}">{{ $product->name }}</option>
      @endforeach
    </select>
    
    {{-- 1.自社商品を選択すると機能概要入力フォームが表示されるイベントが発生する
         2.「+」押下すると入力フォームが追加されると同時に"id"が{next value}の状態で入力されているレコードが追加される --}}
  @foreach($other_details as $other_detail)
    <form method="POST" action="{{ route('storeOtherEdit') }}">
      @csrf
      {{-- jsを使用して11行目で選択した「owns_id」をvalueに格納する --}}
      <input type="hidden" name="others_id" value="999">
      @if(isset($other_detail->id))
        <input name="id" type="hidden" value="{{ $other_detail->id }}">
      @endif
      <div>
        <label for="id">他社商品に紐づくid</label>
        <input type="integer" name="others_id" value="{{ $other_detail->others_id }}">
        <label for="int_value">数値入力フォーム</label>
        <input type="integer" name="int_value" value="{{ $other_detail->int_value }}">
        <label for="str_value">文字列入力フォーム</label>
        <input type="text" name="str_value" value="{{ $other_detail->str_value }}">
        <label for="remarks">備考</label>
        <input type="textarea" name="remarks" value="{{ $other_detail->remarks }}">
      </div>
      <br>
      <button class="btn btn-block" type="submit">登録</button>
    </form>
  @endforeach
  <a href="{{ route('menu') }}">戻る</a>
@endsection