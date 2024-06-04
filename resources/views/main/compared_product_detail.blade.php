@extends('main.base')

@section('title', 'トップメニュー')

@section('compared_product_detail')
  <?php $detail_flg = isset($compared_products[0]->detail_flg) ? $compared_products[0]->detail_flg : ""; ?>
  <?php $compared_product = isset($compared_products[0]->name) ? $compared_products[0]->name : ""; ?>
  <p>他社商品編集画面</p>
  {{-- {{ dd($compared_products) }} --}}
    @if ($detail_flg == "")
      <form method="POST" action="{{ route('showComparedProductDetail2') }}">
        @csrf
          <label for="" class="form-label">詳細を登録する他社商品を選択してください</label>
          <select name="compared_id" id="" class="form-select">
            <option value="#"><p> - </p></option>
            @foreach($compared_products as $compared_product)
              <option value="{{ $compared_product->id }}">{{ $compared_product->name }}</option>
            @endforeach
          </select>
          <button class="btn btn-block" type="submit">詳細を入力する</button>
      </form>
    @else
      {{-- 「attributeを選択→情報入力→登録」の手順で操作する --}}
      <form method="POST" action="{{ route('showComparedProductConfirm') }}">
        @csrf
        <input name="id" type="hidden" value="{{ $compared_products[0]->id }}">
        <input name="proposed_id" type="hidden" value="{{ $compared_products[0]->proposed_id }}">
        <p>{{ $compared_product }}</p>
        <label for="mix_value" class="form-label">要素を選択してください</label>
        <select name="mix_value" id="mix_value">
          <option value="#-#-#"><p> - </p></option>
          @foreach ($compared_products as $compared_product)
            <option value="{{ $compared_product->cc_id }}-{{ $compared_product->type }}-{{ $compared_product->unit }}">{{ $compared_product->attribute }}</option><br>
          @endforeach
          <br>
        </select>
        
        @if ($compared_product->type == 2)
          <label for="str_value" class="form-label">値を入力してください</label><br>
          <input name="str_value" class="form-control" id="str_value" type="text">
        @else 
          <label for="int_value" class="form-label">値を入力してください</label><br>
          <input name="int_value" class="form-control" id="int_value" type="text">
        @endif

        <label for="remarks" class="form-label">備考を入力してください</label><br>
        <input name="remarks" class="form-control" id="remarks" type="text">
        
        <button class="btn btn-block" name="load_flg" value=1 type="submit">確認する</button>
        <button class="btn btn-block" name="load_flg" value=2 type="submit">登録する</button>
      </form>
    @endif
  <a href="{{ route('menu') }}">戻る</a>
@endsection
