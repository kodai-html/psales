@extends('main.base')

@section('title', '商品比較画面')

@section('compare')

{{-- {{ dd($details) }} --}}

{{-- ヘッダー --}}





<table border = "1"> 
  <form action="POST">
    <select name="addh">
      <option value="2">2</option>
      <option value="3">3</option>
      <option value="4">4</option>
    </select>
    <button class="addh" type="submit">ヘッダーの数を選択する</button>
  </form>

  <tr>
    {{-- 「＋」押下でヘッダー追加 --}}
    <th>
      <div>
        <select name="id" id="">
          <option value="#"> - </option>
          @foreach($owns as $own)
            <option value="{{ $own->id }}">{{ $own->name }}</option>
          @endforeach
        </select>
      </div>
    </th>
    <th>
      <div>
        <select name="id" id="">
          <option value="#"> - </option>
          @foreach($details as $detail)
            <option value="{{ $detail->id }}">{{ $detail->name }}</option>
          @endforeach
        </select>
      </div>
    </th>
    {{-- <div>
      <th>
        <select name="" id="">
          <option value=""> - </option>
          <option value=""></option>
        </select>
      </th>
    </div>
    <div>
      <th>
        <select name="" id="">
          <option value=""> - </option>
          <option value=""></option>
        </select>
      </th>
    </div> --}}
  </tr>
  {{-- 「+」押下でレコード追加 --}}

  <tr>
    <td>{{ $own->int_value; }}</td> 
    <td>{{ $detail->int_value }}</td>
    {{-- <td>{{ $detail->int_value }}</td>
    <td>{{ $detail->int_value }}</td> --}}
  </tr>
</table>
@endsection
