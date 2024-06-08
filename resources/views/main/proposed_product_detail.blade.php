@extends('main.base')

@section('title', '自社商品編集画面')

@section('proposed_product_detail')
  {{ $proposed_id = isset($proposed_id) ? $proposed_id : ""; }}
  {{ $type = isset($type) ? $type : ""; }}
  {{ $attribute = isset($attribute) ? $attribute : ""; }}
  <p>自社商品編集画面</p>
    {{-- 概要を入力する自社商品を選択する --}}
  <form method="POST" action="{{ route('showProposedProductDetail2') }}">
    @csrf
    @if ($type == "")
      <label for="" class="form-label">詳細を登録する商品を選択してください</label>
      <select name="proposed_id" id="" class="form-select">
        <option value="#"><p> - </p></option>
        @foreach($proposed_products as $proposed_product)
          <option value="{{ $proposed_product->id }}">{{ $proposed_product->name }}</option>
        @endforeach
      </select>
      <br>
      <label for="" class="form-label">機能名を入力する</label>
      <input name="attribute" type="text" class="form-control">
      <br>
      <label for="" class="form-label">数値か文字か選択してください</label>
      <select name="type" id="" class="form-select">
        <option value="">必ず選択してください</option>
        <option value="1">数値で登録する</option>
        <option value="2">文字で登録する</option>
        <option value="3">可否で登録する</option>
        {{-- <option value="4">割合で登録する</option> --}}
      </select>
      <button class="btn btn-block" type="submit">値を入力する</button>
    @else

      <input type="hidden" name="proposed_id" value={{ $proposed_id }}>
      <input type="hidden" name="type" value={{ $type }}>
      <input type="hidden" name="attribute" value={{ $attribute }}>

    @endif
    @if ($type != "")
      @if ($type == 1) 
        <label for="" class="form-label">数値で登録する</label>
        <input name="int_value" type="text" class="form-control">
        <br>
        <label for="" class="form-label">単位を入力する</label>
        <input name="unit" type="text" class="form-control">
        <br>
        <label for="" class="form-label">備考</label>
        <input name="remarks" type="text" class="form-control">
      @elseif ($type == 2)
        <label for="" class="form-label">文字列で登録する</label>
        <input name="str_value" type="text" class="form-control">
        <br>
        <label for="" class="form-label">備考</label>
        <input name="remarks" type="text" class="form-control">
      @elseif ($type == 3)
        <label for="" class="form-label">可否で登録する</label>
        <select name="int_value" name="" id="" class="form-select">
          <option value="#">選択してください</option>
          <option value="1">⚪︎</option>
          <option value="2">✖️</option>
        </select>
        <br>
        <label for="" class="form-label">備考</label>
        <input name="remarks" type="text" class="form-control">
      {{-- @elseif ($type == 4)
        <label for="" class="form-label">割合を登録する</label>
        <input name="type" type="text" class="form-control"> --}}
      @endif

      <button class="btn btn-block" type="submit">登録する</button>
    @endif
  </form>

  <a href="{{ route('menu') }}">戻る</a>
@endsection
