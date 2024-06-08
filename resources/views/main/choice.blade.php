@extends('main.base')

@section('title', '比較商品選択画面')

@section('choice')

<form method="POST" action="{{ route('compare') }}">
  @csrf
  <div class="proposed-wrap">
    <select name="proposed_product" id="">
      <option value="#"> - </option>
      @foreach ($proposed_products as $proposed_product)
        <option value="{{ $proposed_product->id }}">{{ $proposed_product->name }}</option>
      @endforeach
    </select>
  </div>
  <div class="compared-wrap">
    @foreach ($compared_products as $compared_product)
      <label><input type="checkbox" name="compared_product[]" value="{{ $compared_product->id }}">{{ $compared_product->name }}</label><br>
    @endforeach
  <input type="submit" value="比較する">

</form> 

@endsection