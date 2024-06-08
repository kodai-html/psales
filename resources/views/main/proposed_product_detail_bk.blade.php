@extends('main.base')

@section('title', '自社商品詳細画面')

@section('proposed_product_detail')

<p>自社商品詳細登録画面</p>

{{-- 20230111 : type毎に表示するINPUTを分ける --}}

<p>{{ $proposed_id }}</p>
<p>{{ $type }}</p>
<form method="POST" action="{{ route('storeProposedProductDetail') }}">
  @csrf
  <input type="hidden" name="detail_id" value={{ $detail_id }}>

  <label for="int_value" class="form-label">数値で登録する</label>
  <input class="form-control" name='int_value' type="text">
  
  <label for="str_value" class="form-label">文字列で登録する</label>
  <input class="form-control" name='str_value' type="text">
  
  {{-- <label for="int_value" class="form-label">可否で登録する</label>
  <input class="form-control" name='int_value' type="text">
  
  <label for="int_value" class="form-label">割合で登録する</label>
  <input class="form-control" name='int_value' type="text"> --}}
  
  <label for="unit">単位を入力する</label>
  <input class="form-control" name='unit' type="text">
  
  <label for="remarks" class="form-label">備考</label>
  <input class="form-control" name='remarks' type="text">

  <button class="btn btn-block" type="submit">登録</button>
</form>


@endsection